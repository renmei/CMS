<?php get_header(); ?>
	<div id="content" class="fourcol left">
        
        <?php if(get_option("ct_featured", $single = true) =="yes") { ?>
        	<div id="featured" class="fourcol left">
                <div id="slides">
                <?php
                    $featuredcategory = get_option('ct_featured_category');
                    $featured_num = get_option('ct_featured_num');
                    query_posts(array(
                    'cat' => $featuredcategory, 
                    'showposts'=> $featured_num,  
                    'order'=>'DSC',
                    ));
                
                if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                
                    <?php if(get_post_meta($post->ID, "image_value", "imagealt_value", $single = true) !="") : ?>
                    	<div class="slide">
                            <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><img src="<?php bloginfo('template_directory'); ?>/img_resize/timthumb.php?src=<?php echo get_post_meta($post->ID, "image_value", $single = true); ?>&h=300&w=945&zc=1" alt="<?php echo get_post_meta($post->ID, "imagealt_value", $single = true); ?>" /></a>
                            <?php if(get_option("ct_featured_text", $single = true) =="yes") { ?>
                            <div class="featured-text">
                                <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
                                <p><?php the_excerpt(); ?></p>
                                <?php if(get_option("ct_articles_read", $single = true) =="yes") { ?>
                                <p class="readmore right pngfix"><a href="<?php the_permalink(); ?>"><span>Więcej</span></a></p>
                                <?php } ?>
                            </div>
                                <div class="clear"></div>
                            <?php } ?>
                        </div>
                    <?php endif; ?>
                    
                <?php endwhile; endif; ?>
                <?php wp_reset_query(); ?>
                </div>
                <a id="prevarrow" class="pngfix" href="#"><span>Prev</span></a>
                <a id="nextarrow" class="pngfix" href="#"><span>Next</span></a>
            </div>
        <?php } ?>
        
        <?php if(get_option("ct_homelayout", $single = true) =="blog") { ?>
			<?php include(TEMPLATEPATH . '/layouts/blog.php');?>
        <?php } else { ?>
        	<?php include(TEMPLATEPATH . '/layouts/default.php');?>
        <?php } ?>
        
        <?php if(get_option("ct_about", $single = true) =="yes") { ?>
            <div id="info" class="fourcol left">
                
                <div class="twocol left">
                    <?php if(get_option("ct_fblock_title", $single = true) !="") { ?>
                        <h2><?php echo get_option("ct_fblock_title", $single = true); ?></h2>
                    <?php } else { ?>
                        <h2></h2>
                    <?php } ?>
                    
                    <?php if(get_option("ct_fblock_text", $single = true) !="") { ?>
                        <?php echo stripslashes(get_option("ct_fblock_text", $single = true)); ?>
                    <?php } else { ?>
                        <p> </p>
                    
                    	<p> </p>
                    <?php } ?>
                   
                </div>
                
                <div class="twocol right">
                    <?php if(get_option("ct_gmap", $single = true) =="yes") { ?>
                        <div id="location">
                            <div id="mapsearch" class="singlecol right">Loading...</div>
                        </div>
                    <?php } ?>
                    
                    <?php if(get_option("ct_sblock_title", $single = true) !="") { ?>
                        <h2><?php echo get_option("ct_sblock_title", $single = true); ?></h2>
                    <?php } else { ?>
                        <h2>Contact Us</h2>
                    <?php } ?>
                    
                    <?php if(get_option("ct_sblock_text", $single = true) !="") { ?>
                        <?php echo stripslashes(get_option("ct_sblock_text", $single = true)); ?>
                    <?php } else { ?>
                        <p></p>
                    <?php } ?>
        
                </div>
                
            </div>
        <?php } ?>
            
		<?php get_footer(); ?>