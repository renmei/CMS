<?php
	$tags = wp_get_post_tags($post->ID);
	if ($tags) {
	echo '';
	$first_tag = $tags[0]->term_id;
	$args=array(
	'tag__in' => array($first_tag),
	'post__not_in' => array($post->ID),
	'showposts'=>6,
	'caller_get_posts'=>1
	);
	$my_query = new WP_Query($args);
	if( $my_query->have_posts() ) {
		echo '<ul>';
		while ($my_query->have_posts()) : $my_query->the_post(); ?>
		<a href="<?php the_permalink(); ?>"><img class="relatedtn left" src="<?php bloginfo('template_directory'); ?>/img_resize/timthumb.php?src=<?php echo get_post_meta($post->ID, "image_value", $single = true); ?>&h=86&w=86&zc=1" alt="<?php echo get_post_meta($post->ID, "imagealt_value", $single = true); ?>" /></a>
		<?php
		endwhile;
		echo '<ul>';
		}
	}
?>