<?php get_header(); ?>

<article> 
    <?php if ( has_post_thumbnail( get_the_ID() ) ) : ?>
        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/#" alt=""><?php echo PG_Image::getPostImage( null, 'large', null, 'both', null ) ?>
    <?php endif; ?> 
    <p><?php _e( 'Error 404', 'esqueleto' ); ?></p> 
</article>                         

<?php get_footer(); ?>