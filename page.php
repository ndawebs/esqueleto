<?php get_header(); ?>

<?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>
        <article> 
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/#" alt=""> 
            <?php the_content(); ?> 
        </article>
    <?php endwhile; ?>
<?php else : ?>
    
<?php endif; ?>             

<?php get_footer(); ?>