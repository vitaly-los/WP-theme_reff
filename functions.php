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
    wp_register_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js', [], false, true);
    wp_enqueue_script('jquery');
    wp_enqueue_script('test-popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js', ['jquery'], false, true);
    wp_enqueue_script('test-bootstrapjs', get_template_directory_uri() . '/assets/bootstrap/js/bootstrap.min.js', ['jquery'], false, true);
}

add_action('wp_enqueue_scripts', 'reff_scripts');

function reff_setup()
{
    add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'reff_setup');

// Remove H2 from pagination
add_filter('navigation_markup_template', 'my_navigation_template', 10, 2);

function my_navigation_template($template, $class)
{

    return '
	<nav class="navigation" role="navigation">
		<div class="nav-links">%3$s</div>
	</nav>    
	';
}

// display pagination
the_posts_pagination(array(
    'end_size' => 2,
));
