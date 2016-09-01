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

    if ( ! function_exists( 'mytheme_customize_register' ) ) :
    function mytheme_customize_register( $wp_customize ) {

        /* Pinegrow generated Customizer Controls Begin */

    $wp_customize->add_section( 'home_custo', array(
        'title' => __( 'Homepage', 'pinegrow_docs' ),
        'description' => __( 'Homepage Settings', 'pinegrow_docs' )
    ));

    $wp_customize->add_setting( 'home_intro', array(
        'type' => 'theme_mod',
        'default' => 'Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus pulvinar faucibus neque, nec rhoncus nunc ultrices sit amet.'
    ));

    $wp_customize->add_control( 'home_intro', array(
        'label' => __( 'Home Intro Text', 'pinegrow_docs' ),
        'type' => 'textarea',
        'section' => 'home_custo'
    ));

    /* Pinegrow generated Customizer Controls End */

    }
    add_action( 'customize_register', 'mytheme_customize_register' );
endif;

    /* Pinegrow generated Register Sidebars Begin */

    register_sidebar( array(
        'name' => __( 'Home QA', 'pinegrow_docs' ),
        'id' => 'pgdocs_home',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="questions-title">',
        'after_title' => '</h3>'
    ) );

    register_sidebar( array(
        'name' => __( 'Sidebar', 'pinegrow_docs' ),
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
    wp_enqueue_style( 'docs', get_template_directory_uri() . '/css/docs.css?version=3.4', false, null, 'all');

    wp_deregister_style( 'style-1' );
    wp_enqueue_style( 'style-1', 'http://fonts.googleapis.com/css?family=Lato:300,400,900', false, null, 'all');

    wp_deregister_style( 'fontawesome' );
    wp_enqueue_style( 'fontawesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css', false, null, 'all');

    /* Pinegrow generated Enqueue Styles End */

    }
    add_action( 'wp_enqueue_scripts', 'pinegrow_docs_enqueue_scripts' );
endif;


add_action( 'init', 'pinegrow_docs_init' );

/* Pinegrow generated Include Resources Begin */
require_once "inc/bootstrap/wp_bootstrap_navwalker.php";
require_once "inc/bootstrap/wp_bootstrap_pagination.php";

    /* Pinegrow generated Include Resources End */

/* Emmanuel ARNOUD Resources Begin */

// Replacing the default WordPress search form with an HTML5 version
// http://bavotasan.com/2011/html5-search-form-in-wordpress/*/

function html5_search_form( $form ) {
   $form = '<form role="search" method="get" id="searchform" action="' . home_url( '/' ) . '" >
   <input class="search-field" type="search" placeholder="'.__("Enter your search term here...").'" value="' . get_search_query() . '" name="s" id="s" />
   <input class="search-submit" type="submit" id="searchsubmit" value="Search" />
   </form>';

   return $form;
}
add_filter( 'get_search_form', 'html5_search_form' );

// Disable Lost/Changed Password Emails

if ( !function_exists( 'wp_password_change_notification' ) ) {
    function wp_password_change_notification() {}
}

/* Set Theme Content Width http://codex.wordpress.org/Content_Width */
    if ( ! isset( $content_width ) )
    $content_width = 848;

/* Allow Shortcodes in Widgets */
    if ( !is_admin() ) {
    add_filter('widget_text', 'do_shortcode', 11);
}

/* Remove SABAI PLUGIN FONT AWESOME VERSION */
// add_action('wp_print_styles', 'my_sabai_dequeue_font_awesome', 100);
// function my_sabai_dequeue_font_awesome()  {
// wp_dequeue_style('sabai-font-awesome');
// }

// Remove Admin bar

// add_action('after_setup_theme', 'remove_admin_bar');
//
// function remove_admin_bar() {
// if (!current_user_can('administrator') && !is_admin()) {
//   show_admin_bar(false);
// }
// }

/* Emmanuel ARNOUD Resources End */
?>
