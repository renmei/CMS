<?php
/*
Template Name: Full Width
*/
?>

<?php get_header(); ?>

<div id="content" class="fourcol left">
    
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    
        <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
        <?php the_content(); ?>
        
    <?php endwhile; endif; ?>

<?php get_footer(); ?>