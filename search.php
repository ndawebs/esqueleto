<?php get_header(); ?>

<?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>
        <article> 
            <?php if ( has_post_thumbnail( get_the_ID() ) ) : ?>
                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/#" alt="">
            <?php endif; ?> 
            <p><?php the_excerpt( ); ?></p> 
        </article>
    <?php endwhile; ?>
<?php else : ?>
    
<?php endif; ?>             

<?php get_footer(); ?>