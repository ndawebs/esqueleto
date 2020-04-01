<?php
if ( ! function_exists( 'esqueleto_setup' ) ) :

function esqueleto_setup() {

    /*
     * Make theme available for translation.
     * Translations can be filed in the /languages/ directory.
     */
    /* Esqueleto 1.0 generated Load Text Domain Begin */
    load_theme_textdomain( 'esqueleto', get_template_directory() . '/languages' );
    /* Esqueleto 1.0 generated Load Text Domain End */

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
    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'esqueleto' ),
        'social'  => __( 'Social Links Menu', 'esqueleto' ),
    ) );

/*
     * Register custom menu locations
     */
    /* Esqueleto 1.0 generated Register Menus Begin */

    /* Esqueleto 1.0 generated Register Menus End */
    
/*
    * Set image sizes
     */
    /* Esqueleto 1.0 generated Image sizes Begin */

    /* Esqueleto 1.0 generated Image sizes End */
    
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

    /*
     * Enable support for Page excerpts.
     */
     add_post_type_support( 'page', 'excerpt' );
}
endif; // esqueleto_setup

add_action( 'after_setup_theme', 'esqueleto_setup' );


if ( ! function_exists( 'esqueleto_init' ) ) :

function esqueleto_init() {

    
    // Use categories and tags with attachments
    register_taxonomy_for_object_type( 'category', 'attachment' );
    register_taxonomy_for_object_type( 'post_tag', 'attachment' );

    /*
     * Register custom post types. You can also move this code to a plugin.
     */
    /* Esqueleto 1.0 generated Custom Post Types Begin */

    /* Esqueleto 1.0 generated Custom Post Types End */
    
    /*
     * Register custom taxonomies. You can also move this code to a plugin.
     */
    /* Esqueleto 1.0 generated Taxonomies Begin */

    /* Esqueleto 1.0 generated Taxonomies End */

}
endif; // esqueleto_setup

add_action( 'init', 'esqueleto_init' );


if ( ! function_exists( 'esqueleto_custom_image_sizes_names' ) ) :

function esqueleto_custom_image_sizes_names( $sizes ) {

    /*
     * Add names of custom image sizes.
     */
    /* Esqueleto 1.0 generated Image Sizes Names Begin*/
    /* This code will be replaced by returning names of custom image sizes. */
    /* Esqueleto 1.0 generated Image Sizes Names End */
    return $sizes;
}
add_action( 'image_size_names_choose', 'esqueleto_custom_image_sizes_names' );
endif;// esqueleto_custom_image_sizes_names



if ( ! function_exists( 'esqueleto_widgets_init' ) ) :

function esqueleto_widgets_init() {

    /*
     * Register widget areas.
     */
    /* Esqueleto 1.0 generated Register Sidebars Begin */

    /* Esqueleto 1.0 generated Register Sidebars End */
}
add_action( 'widgets_init', 'esqueleto_widgets_init' );
endif;// esqueleto_widgets_init



if ( ! function_exists( 'esqueleto_customize_register' ) ) :

function esqueleto_customize_register( $wp_customize ) {
    // Do stuff with $wp_customize, the WP_Customize_Manager object.

    /* Esqueleto 1.0 generated Customizer Controls Begin */

    /* Esqueleto 1.0 generated Customizer Controls End */

}
add_action( 'customize_register', 'esqueleto_customize_register' );
endif;// esqueleto_customize_register


if ( ! function_exists( 'esqueleto_enqueue_scripts' ) ) :
    function esqueleto_enqueue_scripts() {

        /* Esqueleto 1.0 generated Enqueue Scripts Begin */

    /* Esqueleto 1.0 generated Enqueue Scripts End */

        /* Esqueleto 1.0 generated Enqueue Styles Begin */

    wp_deregister_style( 'style' );
    wp_enqueue_style( 'style', get_bloginfo('stylesheet_url'), false, null, 'all');

    /* Esqueleto 1.0 generated Enqueue Styles End */

    }
    add_action( 'wp_enqueue_scripts', 'esqueleto_enqueue_scripts' );
endif;

function pgwp_sanitize_placeholder($input) { return $input; }
/*
 * Resource files included by Esqueleto 1.0.
 */
/* Esqueleto 1.0 generated Include Resources Begin */
require_once "inc/wp_pg_helpers.php";

    /* Esqueleto 1.0 generated Include Resources End */
?>