<?php
if ( ! function_exists( 'esqueleto_setup' ) ) :

function esqueleto_setup() {

    /*
     * Make theme available for translation.
     * Translations can be filed in the /languages/ directory.
     */
    load_theme_textdomain( 'esqueleto', get_template_directory() . '/languages' );

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

    // Add menus.
 //   register_nav_menus( array(
 //       'primary' => __( 'Primary Menu', 'esqueleto' ),
  //      'social'  => __( 'Social Links Menu', 'esqueleto' ),
  //  ) );


     /* Switch default core markup for search form, comment form, and comments
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

    /*
     * Enable support for Page excerpts.
     */
     add_post_type_support( 'page', 'excerpt' );
}
endif; // esqueleto_setup

add_action( 'after_setup_theme', 'esqueleto_setup' );






if ( ! function_exists( 'esqueleto_enqueue_scripts' ) ) :
    function esqueleto_enqueue_scripts() {


    wp_deregister_style( 'style' );
    wp_enqueue_style( 'style', get_bloginfo('stylesheet_url'), false, null, 'all');


    }
    add_action( 'wp_enqueue_scripts', 'esqueleto_enqueue_scripts' );
endif;
