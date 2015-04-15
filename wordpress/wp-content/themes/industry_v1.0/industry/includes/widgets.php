<?php

// Flickr Widget
function twitterWidget()
{
	$settings = get_option("widget_twitterwidget");

	$tweetid = $settings['tweetid'];
	$tweetnum = $settings['tweetnum'];

?>
	<div class="widget left">
        <h2>Latest From Twitter</h2>
        <div id="twitter"></div>
    </div>
    
        <div class="clear"></div>

<?php
}

function twitterWidgetAdmin() {

	$settings = get_option("widget_twitterwidget");

	// check if anything's been sent
	if (isset($_POST['update_twitter'])) {
		$settings['tweetid'] = strip_tags(stripslashes($_POST['twitter_id']));
		$settings['tweetnum'] = strip_tags(stripslashes($_POST['twitter_num']));

		update_option("widget_twitterwidget",$settings);
	}

	echo '<p>
			<label for="twitter_id">Twitter ID:
			<input id="twitter_id" name="twitter_id" type="text" class="widefat" value="'.$settings['tweetid'].'" /></label></p>';
	echo '<p>
			<label for="twitter_num">Number of Tweets to Display:
			<input id="twitter_num" name="twitter_num" type="text" class="widefat" value="'.$settings['tweetnum'].'" /></label></p>';
	echo '<input type="hidden" id="update_twitter" name="update_twitter" value="1" />';

}

register_sidebar_widget('Twitter', 'twitterWidget');
register_widget_control('Twitter', 'twitterWidgetAdmin', 400, 200);

// Flickr Widget
function flickrWidget()
{
	$settings = get_option("widget_flickrwidget");

	$id = $settings['id'];
	$number = $settings['number'];

?>
	<div id="flickr" class="widget left">
        <h2>Latest On Flickr</h2>
        <script type="text/javascript" src="http://www.flickr.com/badge_code_v2.gne?count=<?php echo $number; ?>&amp;display=latest&amp;size=s&amp;layout=x&amp;source=user&amp;user=<?php echo $id; ?>"></script> 
        <div class="clear"></div>
    </div>
    
        <div class="clear"></div>

<?php
}

function flickrWidgetAdmin() {

	$settings = get_option("widget_flickrwidget");

	// check if anything's been sent
	if (isset($_POST['update_flickr'])) {
		$settings['id'] = strip_tags(stripslashes($_POST['flickr_id']));
		$settings['number'] = strip_tags(stripslashes($_POST['flickr_number']));

		update_option("widget_flickrwidget",$settings);
	}

	echo '<p>
			<label for="flickr_id">Flickr ID (<a href="http://www.idgettr.com">idGettr</a>):
			<input id="flickr_id" name="flickr_id" type="text" class="widefat" value="'.$settings['id'].'" /></label></p>';
	echo '<p>
			<label for="flickr_number">Number of photos:
			<input id="flickr_number" name="flickr_number" type="text" class="widefat" value="'.$settings['number'].'" /></label></p>';
	echo '<input type="hidden" id="update_flickr" name="update_flickr" value="1" />';

}

register_sidebar_widget('Flickr', 'flickrWidget');
register_widget_control('Flickr', 'flickrWidgetAdmin', 400, 200);

// Ad widget
function adsWidget()
{	
?>
<div class="widgethead left"></div>
    <div class="widget left">
        <div class="widgetinner left">
			<?php if(get_option("ct_custom_ad1_url", "ct_custom_ad1_imgurl", "ct_custom_ad1_alt", $single = true) !="") { ?>
                <a href="<?php echo get_option("ct_custom_ad1_url", $single = true); ?>"><img class="smsqad left" src="<?php echo get_option("ct_custom_ad1_imgurl", $single = true); ?>" height="125" width="125" alt="<?php echo get_option("ct_custom_ad1_alt", $single = true); ?>" /></a>
            <?php } else { ?>
                <a href="#"><img class="smsqad left" src="<?php bloginfo('template_directory'); ?>/images/ads/tf_125x125_v5.gif" height="125" width="125" alt="125x125 ad" /></a>
            <?php } ?>
            <?php if(get_option("ct_custom_ad2_url", "ct_custom_ad2_imgurl", "ct_custom_ad2_alt", $single = true) !="") { ?>
                <a href="<?php echo get_option("ct_custom_ad2_url", $single = true); ?>"><img class="smsqad left last" src="<?php echo get_option("ct_custom_ad2_imgurl", $single = true); ?>" height="125" width="125" alt="<?php echo get_option("ct_custom_ad2_alt", $single = true); ?>" /></a>
            <?php } else { ?>
                <a href="#"><img class="smsqad left last" src="<?php bloginfo('template_directory'); ?>/images/ads/gr_125x125_v4.gif" height="125" width="125" alt="125x125 ad" /></a>
            <?php } ?>
            <?php if(get_option("ct_custom_ad3_url", "ct_custom_ad3_imgurl", "ct_custom_ad3_alt", $single = true) !="") { ?>
                <a href="<?php echo get_option("ct_custom_ad3_url", $single = true); ?>"><img class="smsqad left" src="<?php echo get_option("ct_custom_ad3_imgurl", $single = true); ?>" height="125" width="125" alt="<?php echo get_option("ct_custom_ad3_alt", $single = true); ?>" /></a>
            <?php } else { ?>
                <a href="#"><img class="smsqad left" src="<?php bloginfo('template_directory'); ?>/images/ads/ad_125x125_v4.gif" height="125" width="125" alt="125x125 ad" /></a>
            <?php } ?>
            <?php if(get_option("ct_custom_ad4_url", "ct_custom_ad4_imgurl", "ct_custom_ad4_alt", $single = true) !="") { ?>
                <a href="<?php echo get_option("ct_custom_ad4_url", $single = true); ?>"><img class="smsqad left last" src="<?php echo get_option("ct_custom_ad4_imgurl", $single = true); ?>" height="125" width="125" alt="<?php echo get_option("ct_custom_ad4_alt", $single = true); ?>" /></a>
            <?php } else { ?>
                <a href="#"><img class="smsqad left last" src="<?php bloginfo('template_directory'); ?>/images/ads/vh_125x125_2.gif" height="125" width="125" alt="125x125 ad" /></a>
            <?php } ?>
            <?php if(get_option("ct_custom_ad5_url", "ct_custom_ad5_imgurl", "ct_custom_ad5_alt", $single = true) !="") { ?>
                <a href="<?php echo get_option("ct_custom_ad5_url", $single = true); ?>"><img class="smsqad left" src="<?php echo get_option("ct_custom_ad5_imgurl", $single = true); ?>" height="125" width="125" alt="<?php echo get_option("ct_custom_ad5_alt", $single = true); ?>" /></a>
            <?php } else { ?>
                <!--  do nothing -->
            <?php } ?>
            <?php if(get_option("ct_custom_ad6_url", "ct_custom_ad6_imgurl", "ct_custom_ad6_alt", $single = true) !="") { ?>
                <a href="<?php echo get_option("ct_custom_ad6_url", $single = true); ?>"><img class="smsqad left last" src="<?php echo get_option("ct_custom_ad6_imgurl", $single = true); ?>" height="125" width="125" alt="<?php echo get_option("ct_custom_ad6_alt", $single = true); ?>" /></a>
            <?php } else { ?>
                <!--  do nothing -->
            <?php } ?>
        
            <div class="clear"></div>
        
			<?php if(get_option("ct_custom_advertise_url", $single = true) !="") { ?>
                <p id="advertise"><a href="<?php echo get_option("ct_custom_advertise_url", $single = true); ?>">Advertise Here</a></p>
            <?php } else { ?>
                <p id="advertise"><a href="#">Advertise Here</a></p>
            <?php } ?>
    	</div>
    </div>
    
        <div class="clear"></div>
<?php
}
register_sidebar_widget('Ads', 'adsWidget');
?>