<?php get_header(); ?>

<div id="content" class="fourcol left">

    <div id="leftcol" class="left page">
    
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        
        <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
        <?php the_content(); ?>
        
    <?php endwhile; endif; ?>
    
    </div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>