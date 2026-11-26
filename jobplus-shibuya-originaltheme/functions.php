<?php
// テーマサポート
add_theme_support('title-tag');
add_theme_support('post-thumbnails');

// CSS読み込み
function custom_theme_enqueue_scripts() {
    wp_enqueue_style('aos-style', ('https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css'));
    wp_enqueue_style('custom-style', get_template_directory_uri() . '/css/style.css', array('aos-style'));
    
    wp_enqueue_script('jquery');
    wp_enqueue_script('aos-js', 'https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js', array('jquery'), '2.3.4', true);
    wp_enqueue_script('main', get_template_directory_uri() . '/js/main.js', array('jquery', 'aos-js'), true);
}
add_action('wp_enqueue_scripts', 'custom_theme_enqueue_scripts');


// テーマのデータ（グローバルナビゲーションメニュー）
function lg_get_nav_items() {
    return [
        ['label' => 'ホーム', 'id' => ''],
        ['label' => 'ジョブぷらす渋谷について', 'id' => 'business'],
        ['label' => '会社概要', 'id' => 'company'],
        ['label' => '就労定着支援', 'id' => 'state'],
        ['label' => 'アクセス・お問い合わせ', 'id' => 'contact'],
    ];
}

// 画像URL
function lg_get_img_uri($path = '') {
  return get_theme_file_uri('/img' . $path);
}

// リンクURL生成
function lg_get_nav_href($section_id = '') {
  if (is_front_page()) {
    return $section_id === '' ? '#' : '#' . $section_id;
  }

  return $section_id === '' ? home_url('/') : home_url('/#' . $section_id);
}

// === CF7 バリデーション（名前・本文・電話）===
// フィールド名が text-790 / textarea-312 のような自動名でも動くように、
// basetype と autocomplete オプションから判定します。

// 便利関数: フィールドの autocomplete オプション値を取得
if (!function_exists('espo_cf7_get_autocomplete')) {
  function espo_cf7_get_autocomplete($tag) {
    if (is_object($tag) && method_exists($tag, 'get_option')) {
      $ac = $tag->get_option('autocomplete', '[-0-9a-zA-Z_]+', true);
      if (is_array($ac)) $ac = implode(' ', $ac);
      return is_string($ac) ? $ac : '';
    }
    return '';
  }
}

// --- 名前：日本語1文字以上を要求 ---
if (!function_exists('espo_cf7_custom_name_validation')) {
  function espo_cf7_custom_name_validation($result, $tag) {
    $name     = isset($tag->name) ? (string)$tag->name : (is_array($tag) && isset($tag['name']) ? $tag['name'] : '');
    $basetype = isset($tag->basetype) ? (string)$tag->basetype : '';
    $ac       = espo_cf7_get_autocomplete($tag);

    // 条件:
    // - text 型 かつ autocomplete に 'name' を含む
    //   もしくは name が your-name/氏名/お名前/fullname 等を含む（保険）
    $looks_like_name =
      ($basetype === 'text' && stripos($ac, 'name') !== false) ||
      preg_match('/\b(your-)?name\b|氏名|お名前|fullname/i', $name);

    if ($looks_like_name) {
      $value = isset($_POST[$name]) ? (string)$_POST[$name] : '';
      // ひらがな・カタカナ・漢字のいずれか1文字以上を要求
      if (!preg_match('/[\p{Hiragana}\p{Katakana}\p{Han}]/u', $value)) {
        $result->invalidate($tag, 'お名前には日本語を1文字以上含めてください。');
      }
    }
    return $result;
  }
}
if (!has_filter('wpcf7_validate_text',  'espo_cf7_custom_name_validation'))  add_filter('wpcf7_validate_text',  'espo_cf7_custom_name_validation', 20, 2);
if (!has_filter('wpcf7_validate_text*', 'espo_cf7_custom_name_validation'))  add_filter('wpcf7_validate_text*', 'espo_cf7_custom_name_validation', 20, 2);

// --- 本文：URL/ドメイン禁止（全 textarea に適用） ---
if (!function_exists('espo_cf7_custom_message_validation')) {
  function espo_cf7_custom_message_validation($result, $tag) {
    $name     = isset($tag->name) ? (string)$tag->name : (is_array($tag) && isset($tag['name']) ? $tag['name'] : '');
    $basetype = isset($tag->basetype) ? (string)$tag->basetype : '';

    if ($basetype === 'textarea') {
      $value = isset($_POST[$name]) ? (string)$_POST[$name] : '';
      // http/https, www., example.com などを禁止
      if (preg_match('/(?:https?:\/\/|www\.)\S+|\b[\w.-]+\.[a-z]{2,}\b/i', $value)) {
        $result->invalidate($tag, 'メッセージにリンク（URL/ドメイン）は記載できません。');
      }
    }
    return $result;
  }
}
if (!has_filter('wpcf7_validate_textarea',  'espo_cf7_custom_message_validation'))  add_filter('wpcf7_validate_textarea',  'espo_cf7_custom_message_validation', 20, 2);
if (!has_filter('wpcf7_validate_textarea*', 'espo_cf7_custom_message_validation'))  add_filter('wpcf7_validate_textarea*', 'espo_cf7_custom_message_validation', 20, 2);

// --- 電話：ハイフン有無OKで国内10-11桁 or +81系を許可 ---
if (!function_exists('espo_cf7_custom_tel_validation')) {
  function espo_cf7_custom_tel_validation($result, $tag) {
    $name     = isset($tag->name) ? (string)$tag->name : (is_array($tag) && isset($tag['name']) ? $tag['name'] : '');
    $basetype = isset($tag->basetype) ? (string)$tag->basetype : '';

    if ($basetype === 'tel') {
      $value  = isset($_POST[$name]) ? trim((string)$_POST[$name]) : '';

      // 使用可文字チェック（数字/空白/ハイフン/括弧/+）
      if ($value !== '' && preg_match('/[^0-9\-\s\(\)\+]/', $value)) {
        $result->invalidate($tag, '電話番号に使用できない文字が含まれています。');
        return $result;
      }

      // 数字に正規化
      $digits = preg_replace('/\D/', '', $value);
      $is_domestic = preg_match('/^0\d{9,10}$/', $digits);  // 03xxxxxxxx or 090xxxxxxxxx
      $is_intl81   = preg_match('/^81\d{9,10}$/', $digits); // +81-90-xxxx-xxxx → 8190xxxxxxxx

      if (!($is_domestic || $is_intl81)) {
        $result->invalidate($tag, '電話番号の形式が正しくありません（例：090-1234-5678 / +81-90-1234-5678）。');
      }
    }
    return $result;
  }
}
if (!has_filter('wpcf7_validate_tel',  'espo_cf7_custom_tel_validation'))  add_filter('wpcf7_validate_tel',  'espo_cf7_custom_tel_validation', 20, 2);
if (!has_filter('wpcf7_validate_tel*', 'espo_cf7_custom_tel_validation'))  add_filter('wpcf7_validate_tel*', 'espo_cf7_custom_tel_validation', 20, 2);
