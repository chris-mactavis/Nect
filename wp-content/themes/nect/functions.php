<?php

function theme_styles() {
    wp_enqueue_style('font-awesome', get_template_directory_uri() . '/css/font-awesome.min.css');
    wp_enqueue_style('socicon',  get_template_directory_uri() . '/css/socicon.min.css');
    wp_enqueue_style('custom',  get_template_directory_uri() . '/css/custom.css');
    wp_enqueue_style('flex-slider',  get_template_directory_uri() . '/css/flexslider.min.css');
    wp_enqueue_style('theme', get_template_directory_uri() . '/css/theme.css');
    wp_enqueue_style('lightbox', get_template_directory_uri() . '/css/lightbox.min.css');
    // wp_enqueue_style('spacing', get_template_directory_uri() . '/spacing.css');
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.css');
    wp_enqueue_style('style', get_template_directory_uri() . '/style.css');
    wp_enqueue_style( $handle, $src, $deps, $ver, 'screen' ); 
}

add_action('wp_enqueue_scripts', 'theme_styles');

function theme_js(){
    wp_enqueue_script('custom', get_template_directory_uri() . '/js/custom.js', array('jquery'), '', true);
    wp_enqueue_script('scripts', get_template_directory_uri() . '/js/scripts.js', array('jquery'), '', true);
    wp_enqueue_script('lightbox', get_template_directory_uri() . '/lightbox/js/lightbox.min.js', array('jquery'), '', true);
    wp_enqueue_script('flexslider', get_template_directory_uri() . '/js/flexslider.min.js', array('jquery'), '', true);
    wp_enqueue_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '', true);
}
add_action('wp_enqueue_scripts', 'theme_js');


function wpse_99333_hide_admin_bar_from_front_end(){
    if ( is_blog_admin() ) {
      return true;
    }
    remove_action( 'wp_head', '_admin_bar_bump_cb' );
    return false;
}
add_filter( 'show_admin_bar', 'wpse_99333_hide_admin_bar_from_front_end' );

// Adding options
if( function_exists('acf_add_options_page') ) {
    acf_add_options_page();

    acf_add_options_sub_page('Footer');
}

// Adding navigation
function register_theme_menus() {
    register_nav_menus(
        array(
            'main-menu' => 'Main Menu'
        )
    );
}
add_action('init', 'register_theme_menus');
