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


   function register_my_menus() {
   register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' ),
      'extra-menu' => __( 'Extra Menu' )
  	  )
 	 );
	}
    add_action( 'init', 'register_my_menus' );

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

     add_theme_support( 'woocommerce' );
    // Enabling WooCommerce product gallery features (are off by default since WC 3.0.0).
    // zoom.
    add_theme_support( 'wc-product-gallery-zoom' );
    // lightbox.
    add_theme_support( 'wc-product-gallery-lightbox' );
    // swipe.
    add_theme_support( 'wc-product-gallery-slider' );
}
endif; // esqueleto_setup

add_action( 'after_setup_theme', 'esqueleto_setup' );


// Add css


wp_enqueue_style( 'slider', get_template_directory_uri() . '/style.css',false,'1.1','all');


function theme_prefix_register_elementor_locations( $elementor_theme_manager ) {

	$elementor_theme_manager->register_all_core_location();

}
add_action( '../elementor/theme/register_locations', 'theme_prefix_register_elementor_locations' );
