<?php
/**
 * Chani Child Theme Functions
 *
 * @package Chani_Child
 */


add_action('wp_enqueue_scripts', 'chani_child_enqueue_styles');
function chani_child_enqueue_styles() {
  
    wp_enqueue_style('chani-parent-style', get_template_directory_uri() . '/assets/css/theme.css');

    wp_enqueue_style('chani-child-style', get_stylesheet_directory_uri() . '/style.css', ['chani-parent-style']);


    wp_enqueue_script('chani-parent-script', get_template_directory_uri() . '/assets/main.js', ['jquery'], null, true);
}


add_action('after_setup_theme', 'chani_child_setup');

function chani_child_setup() {
    // Add theme support for custom logo
    $defaults = array(
        'height'      => 100,
        'width'       => 350,
        'flex-height' => true,
        'flex-width'  => true, 
    ); 

 
    add_theme_support( 'custom-logo', $defaults );

    // register theme support 

    add_theme_support('post-thumbnails');
    add_theme_support('woocommerce', array(
        'thumbnail_image_width' => 200,
        'single_image_width'    => 400,
        'product_grid'          => array(
            'default_columns' => 3,
            'min_columns'     => 2,
            'max_columns'     => 4,
        ),
    ));
}

