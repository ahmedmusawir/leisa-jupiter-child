<?php

/**
 * Proper way to enqueue scripts and styles
 */
function moose_scripts() {
    // wp_enqueue_style( 'style-name', get_stylesheet_uri() );
    // wp_enqueue_style( 'style-name', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css' );
    // wp_enqueue_script( 'script-name', get_template_directory_uri() . '/_js/wow.min.js', array(), '1.0.0', true );
    wp_enqueue_script( 'script-wow', get_stylesheet_directory_uri() . '/_js/wow.min.js', array(), '1.0.0', true );
    wp_enqueue_script( 'script-js', get_stylesheet_directory_uri() . '/_js/script.js', array(), '1.0.0', true );
    wp_enqueue_script( 'boot-js', get_stylesheet_directory_uri() . '/_js/bootstrap.min.js', array(), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'moose_scripts' );
