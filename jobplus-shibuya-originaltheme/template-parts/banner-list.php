<!-- banner-list.php -->
<?php
// バナー
$banner_items = [
    [
        'type' => 'ui',
        'label' => '公式X',
        'subtext' => '最新情報はこちら',
        'url' => 'https://x.com/jobplusshibuya',
        'modifier' => 'x',
    ],
    [
        'type' => 'ui',
        'label' => '公式Instagram',
        'subtext' => '日々の様子を発信中',
        'url' => 'https://www.instagram.com/p/DWDKNRwCSVO/',
        'modifier' => 'instagram',
    ],
    [
        'type' => 'image',
        'label' => 'LITALICO仕事ナビ掲載ページはこちら',
        'url' => 'https://snabi.jp/facility/20234',
        'img' => lg_get_img_uri('/banner-litalico.png'),
    ],
];
?>

<div class="c-footer-banner">
    <ul class="c-banner-list">
        <?php foreach ($banner_items as $banner): ?>
            <li class="c-banner-list__item">

                <?php if ($banner['type'] === 'ui'): ?>
                    <a
                        href="<?= esc_url($banner['url']); ?>"
                        class="c-banner c-banner--<?= esc_attr($banner['modifier']); ?>"
                        target="_blank"
                        rel="noopener noreferrer">
                        <span class="c-banner__icon">
                            <img
                                src="<?= esc_url(lg_get_img_uri('/icon-' . $banner['modifier'] . '.png')); ?>"
                                alt="">
                        </span>

                        <span class="c-banner__body">
                            <span class="c-banner__label">
                                <?= esc_html($banner['label']); ?>
                            </span>
                            <span class="c-banner__subtext">
                                <?= esc_html($banner['subtext']); ?>
                            </span>
                        </span>
                    </a>

                <?php else: ?>
                    <!-- LITALICOは画像そのまま -->
                    <a
                        href="<?= esc_url($banner['url']); ?>"
                        class="c-banner c-banner--image"
                        target="_blank"
                        rel="noopener noreferrer">
                        <img
                            src="<?= esc_url($banner['img']); ?>"
                            alt="<?= esc_attr($banner['label']); ?>">
                    </a>
                <?php endif; ?>

            </li>
        <?php endforeach; ?>
    </ul>
</div>