<div id="leftcol" class="left">

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    
    <div class="articlewide">
    	<?php if(get_post_meta($post->ID, "video_value", $single = true)) { ?>
                <div class="video">
                    <?php echo stripslashes(get_post_meta($post->ID, "video_value", $single = true)); ?>
                </div>
            <?php } else { ?>
                <a href="<?php the_permalink(); ?>"><img src="<?php bloginfo('template_directory'); ?>/img_resize/timthumb.php?src=<?php echo get_post_meta($post->ID, "image_value", $single = true); ?>&h=266&w=622&zc=1" alt="<?php echo get_post_meta($post->ID, "imagealt_value", $single = true); ?>" /></a>
            <?php } ?>
            
            <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
            <p class="meta"></p>
            <?php the_excerpt(); ?>
            <p class="readmore right pngfix"><a href="<?php the_permalink(); ?>"><span>Więcej</span></a></p>
                <div class="clear"></div>
    </div>
    
<?php endwhile; ?>
    <div id="postnav">
        <div class="left"><?php previous_posts_link('Previous') ?></div>
        <div class="right"><?php next_posts_link('Next'); ?></div>
        	<div class="clear"></div>
    </div>
<?php endif; ?>

</div>

<?php get_sidebar(); ?>