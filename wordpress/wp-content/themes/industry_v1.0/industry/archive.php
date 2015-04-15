<?php get_header(); ?>

<div id="content" class="fourcol left">

<?php $gallerycategory = get_option('ct_gallery_category', $single = true); ?>
<?php $i = 0; ?>
<?php if (in_category($gallerycategory) || $parent == $gallerycategory): ?>
    
        <div id="gallery">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); $i++; ?>
        
            <a href="<?php bloginfo('template_directory'); ?>/img_resize/timthumb.php?src=<?php echo get_post_meta($post->ID, "image_value", $single = true); ?>&w=800&zc=1" rel="prettyPhoto[gallery]" title="<?php the_content(); ?>"><img class="gallery left <?php if ($i == 3 || $i == 6 || $i == 9 || $i == 12 || $i == 15 || $i == 18) { echo "last"; } ?>" src="<?php bloginfo('template_directory'); ?>/img_resize/timthumb.php?src=<?php echo get_post_meta($post->ID, "image_value", $single = true); ?>&h=200&w=305&zc=1" alt="<?php echo get_post_meta($post->ID, "imagealt_value", $single = true); ?>" /></a>
            
        <?php endwhile; ?>
        </div>
    
            <div class="clear"></div>
            
            <div id="postnav" class="gallery">
                <div id="prevpost" class="left btn"><?php previous_posts_link('Previous') ?></div>
                <div id="nextpost" class="right btn"><?php next_posts_link('Next'); ?></div>
            </div>
        
        <?php endif; ?>                   
    
<?php else: ?>

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
            <div id="prevpost" class="left btn"><?php previous_posts_link('Previous') ?></div>
            <div id="nextpost" class="right btn"><?php next_posts_link('Next'); ?></div>
        </div>
    <?php endif; ?>
    
    </div>

	<?php get_sidebar(); ?>

<?php endif; ?>

<?php get_footer(); ?>