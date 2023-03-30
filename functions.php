<?php 
function themeslug_enqueue_style() {
    wp_register_style('stylesheet', get_template_directory_uri() . './style.css');
    wp_enqueue_style( 'stylesheet', './style.css', false );
}

add_action( 'wp_enqueue_scripts', 'themeslug_enqueue_style' );

//to convert the the title to uppercase

function uppercase_title($title) {
    //callback function to get the title and return uppercase
    return strtoupper($title);
}

add_filter('the_title', 'uppercase_title');

