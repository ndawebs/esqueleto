<!DOCTYPE html> 
<html <?php language_attributes(); ?>> 
    <head> 
        <meta charset="<?php bloginfo( 'charset' ); ?>"> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0">                   
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
        <?php wp_head(); ?>
    </head>     
    <body>
        <?php if( function_exists( 'wp_body_open' ) ) wp_body_open(); ?> 
        <header></header>         
        <div>