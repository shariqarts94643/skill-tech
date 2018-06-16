<?php
/**
 * Template Name: Students Page
 */
?>

<?php define( 'WP_USE_THEMES', false ); get_header(); ?>

<div class="main-content">

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<?php the_content(); ?>

<?php endwhile; else : ?>
<p>
    <?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?>
</p>
<?php endif; ?>

</div>

<?php get_footer(); ?>