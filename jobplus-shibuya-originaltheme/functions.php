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