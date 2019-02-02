<?php

/*
 * Include styles and scripts
 */

function reff_scripts($param)
{
    wp_enqueue_style('test-bootstrapcss', get_template_directory_uri() . '/assets/bootstrap/css/bootstrap.min.css');
    wp_enqueue_style('test-style', get_stylesheet_uri());

    //wp_enqueue_script('jquery'); # include old version that is in wp by default
    wp_deregister_script('jquery');
    wp_register_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js');
    wp_enqueue_script('jquery');
    wp_enqueue_script('test-popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js');
    wp_enqueue_script('test-bootstrapjs', get_template_directory_uri() . '/assets/bootstrap/js/bootstrap.min.js');
}

add_action('wp_enqueue_scripts', 'reff_scripts');
