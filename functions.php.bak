<?php
if ( ! function_exists( 'pinegrow_docs_setup' ) ) :

function pinegrow_docs_setup() {

    /*
     * Make theme available for translation.
     * Translations can be filed in the /languages/ directory.
     */
    load_theme_textdomain( 'pinegrow_docs', get_template_directory() . '/languages' );

    // Add default posts and comments RSS feed links to head.
    add_theme_support( 'automatic-feed-links' );

    /*
     * Let WordPress manage the document title.
     */
    add_theme_support( 'title-tag' );
    
    /*
     * Enable support for Post Thumbnails on posts and pages.
     */
    add_theme_support( 'post-thumbnails' );
    set_post_thumbnail_size( 825, 510, true );

    add_post_type_support( 'page', 'excerpt' );

    // Add menus.
    register_nav_menus( array(
        'primary' => __( 'Primary Menu',      'pinegrow_docs' ),
        'social'  => __( 'Social Links Menu', 'pinegrow_docs' ),
    ) );

    /*
     * Switch default core markup for search form, comment form, and comments
     * to output valid HTML5.
     */
    add_theme_support( 'html5', array(
        'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
    ) );

    /*
     * Enable support for Post Formats.
     */
    add_theme_support( 'post-formats', array(
        'aside', 'image', 'video', 'quote', 'link', 'gallery', 'status', 'audio', 'chat'
    ) );
}
endif; // pinegrow_docs_setup

add_action( 'after_setup_theme', 'pinegrow_docs_setup' );


if ( ! function_exists( 'pinegrow_docs_init' ) ) :

function pinegrow_docs_init() {

    
    // Use categories with attachments
    register_taxonomy_for_object_type( 'category', 'attachment' );

    register_taxonomy(
        'frameworks',
        array('post', 'page'),
        array(
            'label' => __( 'Frameworks' ),
            'rewrite' => array( 'slug' => 'framework' )
        )
    );

    register_taxonomy(
        'workingwith',
        array('post', 'page'),
        array(
            'label' => __( 'Working with' ),
            'rewrite' => array( 'slug' => 'working-with' )
        )
    );

    register_taxonomy(
        'blocks',
        array('post', 'page'),
        array(
            'label' => __( 'Blocks' ),
            'rewrite' => array( 'slug' => 'blocks' )
        )
    );

    register_taxonomy(
        'wordpress',
        array('post', 'page'),
        array(
            'label' => __( 'WordPress' ),
            'rewrite' => array( 'slug' => 'wordpress' )
        )
    );

    /*
     * Register custom post types. You can also move this code to a plugin.
     */
    /* Pinegrow generated Custom Post Types Begin */

    /* Pinegrow generated Custom Post Types End */

    /* Pinegrow generated Register Sidebars Begin */

    register_sidebar( array(
        'name' => __( 'Sidebar' ),
        'id' => 'docs-sidebar',
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'after_widget' => '</li>',
        'before_title' => '<h3 class="widgettitle">',
        'after_title' => '</h3>'
    ) );

    /* Pinegrow generated Register Sidebars End */

}
endif; // pinegrow_docs_setup

if ( ! function_exists( 'pinegrow_docs_enqueue_scripts' ) ) :
    function pinegrow_docs_enqueue_scripts() {

        /* Pinegrow generated Enqueue Scripts Begin */

    wp_deregister_script( 'jquery' );
    wp_enqueue_script( 'jquery', get_template_directory_uri() . '/assets/js/jquery.min.js', false, null, true);

    wp_deregister_script( 'bootstrap' );
    wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/bootstrap/js/bootstrap.min.js', false, null, true);

    wp_deregister_script( 'ieviewportbugworkaround' );
    wp_enqueue_script( 'ieviewportbugworkaround', get_template_directory_uri() . '/docs/assets/js/ie10-viewport-bug-workaround.js', false, null, true);

    /* Pinegrow generated Enqueue Scripts End */

        /* Pinegrow generated Enqueue Styles Begin */

    wp_deregister_style( 'bootstrap' );
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/bootstrap/css/bootstrap.css', false, null, 'all');

    wp_deregister_style( 'docs' );
    wp_enqueue_style( 'docs', get_template_directory_uri() . '/css/docs.css', false, null, 'all');

    wp_deregister_style( 'style-1' );
    wp_enqueue_style( 'style-1', 'http://fonts.googleapis.com/css?family=Lato:300,400,900', false, null, 'all');

    /* Pinegrow generated Enqueue Styles End */

    }
    add_action( 'wp_enqueue_scripts', 'pinegrow_docs_enqueue_scripts' );
endif;


add_action( 'init', 'pinegrow_docs_init' );

/* Pinegrow generated Include Resources Begin */

    /* Pinegrow generated Include Resources End */
?>