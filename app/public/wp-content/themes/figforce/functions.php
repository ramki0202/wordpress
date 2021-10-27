<?php 
function figForceFunction(){
    wp_enqueue_style('figfoce_Main_style',get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'figForceFunction');