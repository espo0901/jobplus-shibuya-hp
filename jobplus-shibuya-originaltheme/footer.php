<!-- footer.php -->
<footer class="l-footer">
  <div class="c-to-top-btn">PAGETOP</div>

  <div class="c-bg-decoration">
    <img src="<?= esc_url(lg_get_img_uri('/アセット 13topページ下装飾.png')); ?>" alt="背景装飾">
  </div>

  <p class="c-footer-message">
    ご相談、ご質問あればお気軽にお問い合わせください。
  </p>

  <div class="l-footer__content">
    <!-- 左：会社情報 -->
    <div class="l-footer__info">

      <!-- 施設の顔 -->
      <div class="c-office-profile">
        <div class="c-footer-logo">
          <img src="<?= esc_url(lg_get_img_uri('/site-logo.png')); ?>" alt="">
          <div class="c-office-profile__heading">
            <p class="c-office-profile__company">株式会社シャンカラ</p>
            <p class="c-office-profile__name">ジョブぷらす渋谷</p>
          </div>
        </div>
      </div>

      <!-- 連絡先情報 -->
      <div class="c-office-contact">
        <dl class="c-company-info">
          <div class="c-company-info__item">
            <dt>住所</dt>
            <dd>東京都渋谷区初台1-49-1<br>第30田中ビル4階</dd>
          </div>

          <div class="c-company-info__item">
            <dt>電話番号</dt>
            <dd>03-6276-1312</dd>
          </div>

          <div class="c-company-info__item">
            <dt>メールアドレス</dt>
            <dd>a.jobplusshibuya@gmail.com</dd>
          </div>

          <div class="c-company-info__item">
            <dt>事業所番号</dt>
            <dd>1311301178(A型)<br>1311301731(定着)<br>1311301780(選択)</dd>
          </div>
        </dl>
      </div>

    </div>

    <!-- 右：地図 -->
    <div class="l-footer__map">
      <img src="<?= esc_url(lg_get_img_uri('/地図.png')); ?>" alt="手書き地図">
    </div>

  </div>

  <!-- バナー -->
  <?php get_template_part("/template-parts/banner-list") ?>

  <!-- フッターナビ -->
  <?php get_template_part("/template-parts/footer-nav") ?>

  <!-- コピーライト -->
  <p class="c-footer-copy">
    Copyright &copy; <?= date('Y'); ?> ジョブぷらす渋谷
  </p>
</footer>