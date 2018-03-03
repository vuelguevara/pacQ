<?php 

function pacq_files() {
    wp_enqueue_script('main-js', get_theme_file_uri('/js/scripts-bundled.js'), NULL, '1.0', true);
    wp_enqueue_style('custom-google-fonts', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
    wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
    wp_enqueue_style('pacq_main_styles', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'pacq_files');

function pacq_features() {
    register_nav_menus(array(
        'headerMenuLocation' => 'Header Menu Location',
        'footerMenuLocation1' => 'Footer Location 1',
        'footerMenuLocation2' => 'Footer Location 2',
    ));
    add_theme_support('title-tag');
}

add_action('after_setup_theme', 'pacq_features');

?>