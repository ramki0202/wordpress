<?php 

function figForceFunction(){
    WP_enqueue_script('mainfigforceJS',get_theme_file_uri('/modules/HeroSlider.js'),NULL,'1.0',true);
    wp_enqueue_style('custom-google-font','//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
    wp_enqueue_style('font-awesome','//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css ');
    wp_enqueue_style('figfoce_main_style',get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'figForceFunction');

function figforce_features(){
    add_theme_support('title-tag)');
}

add_action('after_setup_theme','figforce_features');
