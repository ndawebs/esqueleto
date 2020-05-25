<?php get_header(); ?>

<article> 
    <?php if ( has_post_thumbnail( get_the_ID() ) ) : ?>
        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/#" alt="">
    <?php endif; ?> 
    
</article>                         

<?php get_footer(); ?>