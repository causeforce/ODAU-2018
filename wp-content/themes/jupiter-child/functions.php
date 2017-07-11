<?php


function oneday_enqueue_style() {
    wp_enqueue_style( 'fontawesome', '/wp-content/themes/jupiter-child/font-awesome/css/font-awesome.min.css', false ); 
}

function scripts_method() {

    wp_enqueue_script(
        'jQuery_latest',
        get_stylesheet_directory_uri() . '/js/jquery-3.2.1.min.js',
        array( 'jquery' )
    );
    wp_enqueue_script(
        'sticky_js',
        get_stylesheet_directory_uri() . '/js/sticky_nav.js',
        array( 'jquery' )
    );
    wp_enqueue_script(
        'main_js',
        get_stylesheet_directory_uri() . '/js/main.js',
        array( 'jquery' )
    );
    wp_enqueue_script(
        'size_js',
        get_stylesheet_directory_uri() . '/js/size.js',
        array( 'jquery' )
    );
    wp_enqueue_script(
        'resize_js',
        get_stylesheet_directory_uri() . '/js/resize.js',
        array( 'jquery' )
    );
    

}


add_action( 'wp_enqueue_scripts', 'oneday_enqueue_style' );
add_action( 'wp_enqueue_scripts', 'scripts_method' );
