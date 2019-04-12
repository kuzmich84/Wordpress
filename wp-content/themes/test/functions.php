<?php
/*
 * Подключение скриптов и стилей
 */

function test_scripts(){
    wp_enqueue_style('test-bootstrap', get_template_directory_uri() .'/assets/bootstrap/css/bootstrap.min.css' );
    wp_enqueue_style('test-style', get_stylesheet_uri());

    wp_deregister_script( 'jquery' );
    wp_register_script( 'jquery', '//ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js',false,false,true);
    wp_enqueue_script( 'jquery' );

    wp_enqueue_script('test-poppercjs','//cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js',false,false,true);
    wp_enqueue_script('test-bootstrapjs',get_template_directory_uri() .'/assets/bootstrap/js/bootstrap.min.js',false,false,true );
}

add_action('wp_enqueue_scripts','test_scripts');

