<?php
function mytheme_enqueue_styles(){
    wp_enqueue_style('main-style',get_stylesheet_uri(),array(),filemtime(get_stylesheet_directory() . '/style.css')) ;
    wp_enqueue_style('font-awesome','http://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css',array(),'6.5.1');
}
add_action('wp_enqueue_scripts' ,'mytheme_enqueue_styles' , 'mytheme_enqueue_assets') ;
function pouryaftrt_theme_setup(){
    add_theme_support('menus');
    register_nav_menus(array('main-menu' => 'منوی اصلی')) ;
}
add_action('after_setup_theme','pouryaftrt_theme_setup') ;