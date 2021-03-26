<?php 

// ACTION HOOK EXAMPLE
function theme_setup(){
    //  ADD THE TITLE TAG
    add_theme_support('title-tag');
    //  ADD THE ADD LOGO BUTTON
    add_theme_support('custom-logo');
    //  ADD POST IMG
    add_theme_support( 'post-thumbnails' );
    //  ADD SEARCH FORM
    add_theme_support('html5',array('search-form'));
}
add_action('after_setup_theme', 'theme_setup');


// CHANGE THE LENGHT OF A POST
add_filter( 'excerpt_length', function($length) {
    return 15;
} );

// ADDING CSS AND JS FILES USING ACTION HOOKS

function add_theme_scripts(){
    // add style.css
    wp_enqueue_style('main-stylesheet', get_stylesheet_uri());
    // add a stylesheet
    wp_enqueue_style('normalize', get_template_directory_uri().'./css/normalize.css');
    wp_enqueue_style('bootstrap-grid', get_template_directory_uri().'./css/bootstrap-grid.css');
    wp_enqueue_style('slick', get_template_directory_uri().'./slick/slick.css');
    wp_enqueue_style('slick-theme', get_template_directory_uri().'./slick/slick-theme.css');
    // add a sjs file
    wp_enqueue_script('slick-js', get_template_directory_uri().'./slick/slick.min.js','','1.1', true);
    wp_enqueue_script('main', get_template_directory_uri().'./js/main.js','','1.1', true);
}

add_action('wp_enqueue_scripts', 'add_theme_scripts');