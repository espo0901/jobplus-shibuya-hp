<!-- footer-nav.php -->
<?php
// ナビ
$nav_items = lg_get_nav_items();
?>

<ul class="c-footer-nav">
    <?php foreach ($nav_items as $nav_item): ?>
        <li>
            <a href="<?= esc_url(lg_get_nav_href($nav_item['id'])); ?>">
                <?= esc_html($nav_item['label']); ?>
            </a>
        </li>
    <?php endforeach; ?>
</ul>