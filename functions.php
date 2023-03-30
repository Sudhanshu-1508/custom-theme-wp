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

/* Custom Post Type Start */
function create_posttype() {
    // Register News post type
    register_post_type( 'news',
        array(
            'labels' => array(
                'name' => __( 'News' ),
                'singular_name' => __( 'News' )
            ),
            'public' => true,
            'has_archive' => false,
            'rewrite' => array('slug' => 'news'),
        )
    );
    
    // Register News Category taxonomy
    register_taxonomy(
        'news_category', 
        'news',  
        array(
            'labels' => array(
                'name' => __( 'News Categories' ),
                'singular_name' => __( 'News Category' )
            ),
            'public' => true,
            'hierarchical' => true,  
            'rewrite' => array('slug' => 'news-category'),
        )
    );
}
add_action( 'init', 'create_posttype' );


function create_posttype_2nd() {
    register_post_type( 'articles',
    array(
      'labels' => array(
       'name' => __( 'articles' ),
       'singular_name' => __( 'Articles' )
      ),
      'public' => true,
      'has_archive' => false,
      'rewrite' => array('slug' => 'Articles'),
     )
    );
    }
    // Hooking up function to theme setup
    add_action( 'init', 'create_posttype_2nd' );
    