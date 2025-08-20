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
    
    <link rel="icon" href="<?= esc_url(get_theme_file_uri('/img/site-logo.png')); ?>">

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

  <header class="l-header">
    <div class="l-header__inner">
      <div class="c-logo">
        <img src="<?= esc_url(get_theme_file_uri('/img/site-logo.png')); ?>" alt="ジョブぷらす渋谷 ロゴ">
      </div>

      <div id="hamburger-btn" class="hamburger-btn">
        <span class="hamburger__bar"></span>
        <span class="hamburger__bar"></span>
        <span class="hamburger__bar"></span>
      </div>
      
      <?php if(is_front_page()): ?>
        <nav class="c-nav">
          <a href="#">ホーム</a>
          <a href="#business">ジョブぷらす渋谷について</a>
          <a href="#company">会社概要</a>
          <a href="#state">定着支援</a>
          <a href="#contact">アクセス・お問い合わせ</a>
        </nav>
      <?php else: ?>
        <nav class="c-nav">
          <a href="<?= esc_url(home_url()) ?>">ホーム</a>
          <a href="<?= esc_url(home_url()) ?>#business">ジョブぷらす渋谷について</a>
          <a href="<?= esc_url(home_url()) ?>#company">会社概要</a>
          <a href="#state">定着支援</a>
          <a href="<?= esc_url(home_url()) ?>#contact">アクセス・お問い合わせ</a>
        </nav>
      <?php endif; ?>
    </div>
  </header>
