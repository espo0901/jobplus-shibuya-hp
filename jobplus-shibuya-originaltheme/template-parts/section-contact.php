<!-- section-contact.php -->
<section class="p-contact" id="contact">
    <div class="l-container">

        <div class="c-section-title">
            <h2 class="c-section-title__text">アクセス</h2>
        </div>

        <div class="p-contact__block">
            <div class="p-contact__item">
                <h3 class="p-contact__item-title">建物外観</h3>

                <div class="p-contact__media">
                    <img src="<?= lg_get_img_uri('/ジョブぷらす渋谷建物外観.jpg') ?>" alt="ジョブぷらす渋谷の建物外観">
                </div>
            </div>

            <div class="p-contact__item">
                <h3 class="p-contact__item-title">最寄り駅からの動画</h3>

                <div class="p-contact__media">
                    <video src="<?= lg_get_img_uri('/destination_video.mp4') ?>" controls></video>
                </div>

                <p class="p-contact__address">
                    〒151-0061<br>
                    東京都渋谷区初台1-49-1<br>
                    第30田中ビル4階<br>
                    最寄り駅：京王新線 初台駅南口から徒歩３分
                </p>
            </div>
        </div>

        <div class="c-section-title">
            <h2 class="c-section-title__text">GoogleMap</h2>
        </div>

        <div class="c-box-media">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3240.8268395083855!2d139.686927!3d35.681265499999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6018f300574a6cd3%3A0x8d31c5467d513d8c!2z5qCq5byP5Lya56S-IOOCt-ODo-ODs-OCq-ODqSDlsLHlirTntpnntprmlK_mj7RB5Z6LIOOCuOODp-ODluOBt-OCieOBmea4i-iwtw!5e0!3m2!1sja!2sjp!4v1742363245500!5m2!1sja!2sjp" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" width="100%" height="600" style="border:0;" allowfullscreen loading="lazy"></iframe>
        </div>

        <div id="contact-form" class="c-contactform-box">
            <h2 class="c-section-title">見学・体験・お問い合わせ</h2>
            <div>

            </div>
            <?= do_shortcode('[contact-form-7 id="38bb1b1" title="ジョブぷらす渋谷お問い合わせフォーム"]') ?>
        </div>

    </div>
</section>