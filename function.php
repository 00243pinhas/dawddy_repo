<?php
/**
 * Chani Child Theme Functions
 *
 * @package Chani Child
 */

// Enqueue parent theme styles
function chani_child_enqueue_styles() {
    wp_enqueue_style( 'chani-parent-style', get_template_directory_uri() .  '/assets/css/theme.css' , array(), "1.0.0" , 'all' );

    wp_enqueue_style('chani-parent-style', get_stylesheet_uri(), array(), "1.0.0" , 'all');

    wp_enqueue_script('chani-parent-script', get_template_directory_uri() . '/assets/main.js', array('jquery'), "1.0.0", true);

}
add_action( 'wp_enqueue_scripts', 'chani_child_enqueue_styles' );
