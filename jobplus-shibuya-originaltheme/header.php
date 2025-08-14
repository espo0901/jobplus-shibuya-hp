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
    <div class="l-header__inner u-flex u-pc">
      <div class="c-logo">
        <img src="<?= esc_url(get_theme_file_uri('/img/site-logo.png')); ?>" alt="ジョブぷらす渋谷 ロゴ">
      </div>
      
      <?php if(is_front_page()): ?>
          <nav class="c-nav">
            <ul class="c-nav__list">
              <li class="c-nav__item"><a href="#"><span class="c-underline-1">ホーム</span></a></li>
              <li class="c-nav__item"><a href="#business"><span class="c-underline-1">ジョブぷらす渋谷について</span></a></li>
              <li class="c-nav__item"><a href="#company"><span class="c-underline-1">会社概要</span></a></li>
				<?php /*
				<li class="c-nav__item"><a href="<?= esc_url(home_url('/retention-support')) ?>">定着支援</a></li>
				*/ ?>
              <li class="c-nav__item"><a href="#state"><span class="c-underline-1">定着支援</span></a></li>
              <li class="c-nav__item"><a href="#contact"><span class="c-underline-1">アクセス・お問い合わせ</span></a></li>
            </ul>
          </nav>
      <?php else: ?>
          <nav class="c-nav">
            <ul class="c-nav__list">
              <li class="c-nav__item"><a href="<?= esc_url(home_url()) ?>"><span class="c-underline-1">ホーム</span></a></li>
              <li class="c-nav__item"><a href="<?= esc_url(home_url()) ?>#business"><span class="c-underline-1">ジョブぷらす渋谷について</span></a></li>
              <li class="c-nav__item"><a href="<?= esc_url(home_url()) ?>#company"><span class="c-underline-1">会社概要</span></a></li>
				<?php /*
				<li class="c-nav__item"><a href="<?= esc_url(home_url('/retention-support')) ?>">定着支援</a></li>
				*/ ?>
              <li class="c-nav__item"><a href="#state"><span class="c-underline-1">定着支援</span></a></li>
              <li class="c-nav__item"><a href="<?= esc_url(home_url()) ?>#contact"><span class="c-underline-1">アクセス・お問い合わせ</span></a></li>
            </ul>
          </nav>
      <?php endif; ?>
    </div>

    <div class="u-sp">
      <div class="c-logo">
        <img src="<?= esc_url(get_theme_file_uri('/img/site-logo.png')); ?>" alt="">
      </div>

      <div id="mask">
        <nav class="c-nav-sp">
          <?php if(is_front_page()): ?>
              <ul class="c-nav-sp__list">
                <li><a href="#">ホーム</a></li>
                <li><a href="#business">ジョブぷらす渋谷について</a></li>
                <li><a href="#company">会社概要</a></li>
				  <?php /*
				<li><a href="<?= esc_url(home_url('/retention-support')) ?>">定着支援</a></li>
				*/ ?>
                <li><a href="#state">定着支援</a></li>
                <li><a href="#contact">アクセス・お問い合わせ</a></li>
              </ul>
          <?php else: ?>
              <ul class="c-nav-sp__list">
                <li><a href="<?= esc_url(home_url()) ?>">ホーム</a></li>
                <li><a href="<?= esc_url(home_url()) ?>#business">ジョブぷらす渋谷について</a></li>
                <li><a href="<?= esc_url(home_url()) ?>#company">会社概要</a></li>
				  <?php /*
				<li><a href="<?= esc_url(home_url('/retention-support')) ?>">定着支援</a></li>
				*/ ?>
                <li><a href="<?= esc_url(home_url()) ?>#state">定着支援</a></li>
                <li><a href="<?= esc_url(home_url()) ?>#contact">アクセス・お問い合わせ</a></li>
              </ul>
          <?php endif; ?>
        </nav>
      </div>
      
      <div id="hamburger-btn">
        <span></span>
        <span></span>
        <span></span>
      </div>

      
    </div>
  </header>
