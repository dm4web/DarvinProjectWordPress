<?php

add_theme_support( 'post-thumbnails' );

add_theme_support( 'title-tag' );

add_filter( 'pre_get_document_title', 'filter_title' );

function filter_title ( $title ) {

    if ( is_home() ) {
        $title = 'Darvin Project Theme';
    }
    return $title;
}

add_action('wp_enqueue_scripts', 'add_style');

function add_style() {

    wp_enqueue_style('mainCSS', get_stylesheet_directory_uri() . '/css/style.css' );

    wp_enqueue_style('swiperCSS', 'https://unpkg.com/swiper/swiper-bundle.min.css' );

}

add_action('wp_enqueue_scripts', 'add_scripts');

function add_scripts() {

    wp_enqueue_script('swiper', get_stylesheet_directory_uri() . '/js/swiper.min.js', null, false, true);

    wp_enqueue_script('customJS', get_stylesheet_directory_uri() . '/js/custom.js', null, false, true );

}

add_filter('template_include', 'add_template');

function add_template( $template ) {
    return $template;
}
