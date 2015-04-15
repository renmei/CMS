<?php if(get_option("ct_articles_title", $single = true) !="") { ?>
    <h2><?php echo get_option("ct_articles_title", $single = true); ?></h2>
<?php } else { ?>
    <h2>Latest Articles</h2>
<?php } ?>

<?php
    $homecategory = get_option('ct_home_category');
    $postnum = get_option('ct_postnum');
    $i = 0;
    query_posts(array(
    'cat' => $homecategory, 
    'showposts'=> $postnum,  
    'order'=>'DSC',
    ));

if ( have_posts() ) : while ( have_posts() ) : the_post(); $i++; ?>

<div class="singlecol article left <?php if ($i == 4 || $i == 8 || $i == 12 || $i == 16 || $i == 20 || $i == 24) { echo "last"; } ?>">
    <a href="<?php the_permalink(); ?>"><img src="<?php bloginfo('template_directory'); ?>/img_resize/timthumb.php?src=<?php echo get_post_meta($post->ID, "image_value", $single = true); ?>&h=96&w=223&zc=1" alt="<?php echo get_post_meta($post->ID, "imagealt_value", $single = true); ?>" /></a>
    <?php if(get_option("ct_articles_head", $single = true) =="yes") { ?>
    <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
    <?php } ?>
    <?php if(get_option("ct_articles_excerpt", $single = true) =="yes") { ?>
    <?php the_excerpt(); ?>
    <?php } ?>
    <?php if(get_option("ct_articles_read", $single = true) =="yes") { ?>
    <p class="readmore right pngfix"><a href="<?php the_permalink(); ?>"><span>Więcej</span></a></p>
    <?php } ?>
        <?php if ($i == 4 || $i == 8 || $i == 12 || $i == 16 || $i == 20 || $i == 24) { echo "<div class=\"clear\"></div>"; } ?>
</div>

<?php endwhile; endif; ?>
<?php wp_reset_query(); ?>