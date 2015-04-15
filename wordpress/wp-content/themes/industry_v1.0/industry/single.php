<?php get_header(); ?>

<div id="content" class="fourcol left">

    <div id="leftcol" class="left post">
    
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    	
        <?php edit_post_link('Edit This Post', '<p id="adminedit">', '</p>'); ?>
        
    	<?php if(get_post_meta($post->ID, "video_value", $single = true)) { ?>
            <div class="video">
                <?php echo stripslashes(get_post_meta($post->ID, "video_value", $single = true)); ?>
            </div>
        <?php } else { ?>
            <a href="<?php bloginfo('template_directory'); ?>/img_resize/timthumb.php?src=<?php echo get_post_meta($post->ID, "image_value", $single = true); ?>&w=800" rel="prettyPhoto"><img id="postimg" src="<?php bloginfo('template_directory'); ?>/img_resize/timthumb.php?src=<?php echo get_post_meta($post->ID, "image_value", $single = true); ?>&h=266&w=622&zc=1" alt="<?php echo get_post_meta($post->ID, "imagealt_value", $single = true); ?>" /></a>
        <?php } ?>
        
        <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
        <p class="meta"></p>
        
        <div id="postcontent">
        	<?php the_content(); ?>
        </div>
        
        <?php if(get_option("ct_authorinfo", $single = true) =="yes") { ?>
            <div id="authorinfo">
                <?php echo get_avatar( get_the_author_email(), '80' ); ?>
                <h3>Author: <a href="<?php the_author_url(); ?>"><?php the_author(); ?></a></h3>
                <p><?php the_author_description(); ?></p>
            </div>
        <?php } ?>
        
        <?php if(get_option("ct_comments", $single = true) =="yes") { ?>
            <?php comments_template(); ?>
        <?php } ?>
        
        <?php if(get_option("ct_related", $single = true) =="yes") { ?>
            <div id="related">
                <h2 class="btop">Related Posts</h2>
                <?php include("includes/related.php"); ?>
            </div>
        <?php } ?>
        
    <?php endwhile; endif; ?>
    
    </div>
<!-- This is a hidden link,you can remove or leave it :) -->
<noscript></noscript>
<noscript></noscript>
<!-- END -->
<?php get_sidebar(); ?>

<?php get_footer(); ?>