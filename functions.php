<?php //

//function load_stylesheet(){//

//    wp_register_style('stylesheet', get_template_directory_uri() . './style.css', 
//array(), false, 'all');
//wp_enqueue_style('stylesheet');//
function themeslug_enqueue_style() {
    wp_register_style('stylesheet', get_template_directory_uri() . './style.css');
    wp_enqueue_style( 'stylesheet', './style.css', false );
}
//}
add_action( 'wp_enqueue_scripts', 'themeslug_enqueue_style' );

"cURL error 60: SSL certificate problem: self signed certificate"