<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- GoogleFonts -->
  <!-- 
        モッチーポップ(Mochiy Pop One)
        油性マジック(Yusei Magic)
        ロックンロール One(RocknRoll One)
    -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Mochiy+Pop+One&family=RocknRoll+One&family=Yusei+Magic&display=swap" rel="stylesheet">

  <link rel="icon" href="<?= esc_url(lg_get_img_uri('/site-logo.png')); ?>">

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<!-- グローバルナビメニュー取得 -->
<?php $nav_items = lg_get_nav_items(); ?>

<header class="l-header">
  <div class="l-header__inner">
    <div class="c-logo">
      <img src="<?= esc_url(lg_get_img_uri('/site-logo.png')); ?>" alt="ジョブぷらす渋谷 ロゴ">
    </div>

    <!-- ハンバーガーボタン -->
    <div id="hamburger-btn" class="hamburger-btn">
      <span class="hamburger__bar"></span>
      <span class="hamburger__bar"></span>
      <span class="hamburger__bar"></span>
    </div>

    <!-- グローバルメニュー -->
    <nav class="c-nav" aria-label="グローバルメニュー">
      <?php foreach ($nav_items as $nav_item): ?>
        <?php if ($nav_item['id'] === 'state') { continue; } ?>
        <a href="<?= esc_url(lg_get_nav_href($nav_item['id'])); ?>">
          <?= esc_html($nav_item['label']); ?>
        </a>
      <?php endforeach; ?>
    </nav>
  </div>

  <!-- PC時のみスクロール後固定ヘッダーメニュー -->
  <?php if (is_front_page()): ?>
    <nav class="c-fixed-menu" aria-label="ページ内メニュー">
      <ul class="c-nav u-flex--wrap">
        <?php foreach ($nav_items as $nav_item): ?>
          <li class="c-nav__item">
            <a href="<?= esc_url(lg_get_nav_href($nav_item['id'])); ?>">
              <?= esc_html($nav_item['label']); ?>
            </a>
          </li>
        <?php endforeach; ?>
      </ul>
    </nav>
  <?php endif; ?>
</header>