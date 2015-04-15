<?php

// with activate install option
if ( is_admin() && isset($_GET['activated'] ) && $pagenow == 'themes.php' ) {
	// Upload Custom Logo
		if ( !empty($_FILES['ct_custom_logo_file']['name']) ) {
				$filename = $_FILES['ct_custom_logo_file'];				
				$override['test_form'] = false;
				$override['action'] = 'wp_handle_upload';
				$uploaded = wp_handle_upload($filename,$override);
				add_option( "ct_custom_logo_url" , $uploaded['url'] );
				
				if( !empty($uploaded['error']) ) {
						echo 'Could not upload logo: ' . $uploaded['error']; 
				}        
		} else {				
				add_option("ct_custom_logo_url", $_POST['ct_custom_logo_url']);
		}
		// Upload Custom Body Background Image
		if ( !empty($_FILES['ct_custom_bodybg_file']['name']) ) {
				$filename = $_FILES['ct_custom_bodybg_file'];				
				$override['test_form'] = false;
				$override['action'] = 'wp_handle_upload';
				$uploaded = wp_handle_upload($filename,$override);
				add_option( "ct_body_image" , $uploaded['url'] );
				
				if( !empty($uploaded['error']) ) {
						echo 'Could not upload image: ' . $uploaded['error']; 
				}        
		} else {				
				add_option("ct_body_image", $_POST['ct_body_image']);
		}
		add_option("ct_custom_logo_alt", $_POST['ct_custom_logo_alt']);
		add_option("ct_usetext", $_POST['ct_usetext']);
		// Custom Favicon
		add_option("ct_custom_favicon_url", $_POST['ct_custom_favicon_url']);
		// Excerpt Length
		add_option("ct_excerpt_length", $_POST['ct_excerpt_length']);
		// Feedburner
		add_option("ct_feedburner", $_POST['ct_feedburner']);
		// Categories	
		add_option("ct_featured_category", $_POST['ct_featured_category']);
		add_option("ct_home_category", $_POST['ct_home_category']);
		add_option("ct_gallery_category", $_POST['ct_gallery_category']);
		// Nav
		add_option("ct_homenav", $_POST['ct_homenav']);
		add_option("ct_exclude_cats", $_POST['ct_exclude_cats']);
		add_option("ct_exclude_pages", $_POST['ct_exclude_pages']);
		// Stylesheet
		add_option("ct_stylesheet", $_POST['ct_stylesheet']);
		add_option("ct_usestyles", $_POST['ct_usestyles']);
		add_option("ct_body_color", $_POST['ct_body_color']);
		add_option("ct_body_repeat", $_POST['ct_body_repeat']);
		add_option("ct_body_position", $_POST['ct_body_position']);
		add_option("ct_font_family", $_POST['ct_font_family']);
		add_option("ct_font_size", $_POST['ct_font_size']);
		add_option("ct_line_height", $_POST['ct_line_height']);
		add_option("ct_font_color", $_POST['ct_font_color']);
		add_option("ct_link_color", $_POST['ct_link_color']);
		add_option("ct_vlink_color", $_POST['ct_vlink_color']);
		add_option("ct_hlink_color", $_POST['ct_hlink_color']);
		add_option("ct_alink_color", $_POST['ct_alink_color']);
		add_option("ct_featured_bg_color", $_POST['ct_featured_bg_color']);
		// Home
		add_option("ct_homelayout", $_POST['ct_homelayout']);
		add_option("ct_articles_title", $_POST['ct_articles_title']);
		add_option("ct_postnum", $_POST['ct_postnum']);
		add_option("ct_articles_head", $_POST['ct_articles_head']);
		add_option("ct_articles_excerpt", $_POST['ct_articles_excerpt']);
		add_option("ct_articles_read", $_POST['ct_articles_read']);
		add_option("ct_about", $_POST['ct_about']);
		add_option("ct_fblock_title", $_POST['ct_fblock_title']);
		add_option("ct_fblock_text", $_POST['ct_fblock_text']);
		add_option("ct_sblock_title", $_POST['ct_sblock_title']);
		add_option("ct_sblock_text", $_POST['ct_sblock_text']);
		add_option("ct_gmap_key", $_POST['ct_gmap_key']);
		add_option("ct_gmap", $_POST['ct_gmap']);
		add_option("ct_address", $_POST['ct_address']);
		// Featured Slider
		add_option("ct_featured", $_POST['ct_featured']);
		add_option("ct_featured_text", $_POST['ct_featured_text']);
		add_option("ct_featured_num", $_POST['ct_featured_num']);
		add_option("ct_featured_effect", $_POST['ct_featured_effect']);
		add_option("ct_featured_speed", $_POST['ct_featured_speed']);
		add_option("ct_featured_timeout", $_POST['ct_featured_timeout']);
		add_option("ct_featured_delay", $_POST['ct_featured_delay']);
		// Single Post
		add_option("ct_dateformat", $_POST['ct_dateformat']);
		add_option("ct_authorinfo", $_POST['ct_authorinfo']);
		add_option("ct_related", $_POST['ct_related']);
		add_option("ct_comments", $_POST['ct_comments']);
		//Contact Form
		add_option("ct_your_email", $_POST['ct_your_email']);
		add_option("ct_subject", $_POST['ct_subject']);
		add_option("ct_success", $_POST['ct_success']);
		// Flickr Widget
		add_option("ct_custom_joinflickr_url", $_POST['ct_custom_joinflickr_url']);
		// Ads Widget
		add_option("ct_custom_ad1_url", $_POST['ct_custom_ad1_url']);
		add_option("ct_custom_ad1_imgurl", $_POST['ct_custom_ad1_imgurl']);
		add_option("ct_custom_ad1_alt", $_POST['ct_custom_ad1_alt']);
		add_option("ct_custom_ad2_url", $_POST['ct_custom_ad2_url']);
		add_option("ct_custom_ad2_imgurl", $_POST['ct_custom_ad2_imgurl']);
		add_option("ct_custom_ad2_alt", $_POST['ct_custom_ad2_alt']);
		add_option("ct_custom_ad3_url", $_POST['ct_custom_ad3_url']);
		add_option("ct_custom_ad3_imgurl", $_POST['ct_custom_ad3_imgurl']);
		add_option("ct_custom_ad3_alt", $_POST['ct_custom_ad3_alt']);
		add_option("ct_custom_ad4_url", $_POST['ct_custom_ad4_url']);
		add_option("ct_custom_ad4_imgurl", $_POST['ct_custom_ad4_imgurl']);
		add_option("ct_custom_ad4_alt", $_POST['ct_custom_ad4_alt']);
		add_option("ct_custom_ad5_url", $_POST['ct_custom_ad5_url']);
		add_option("ct_custom_ad5_imgurl", $_POST['ct_custom_ad5_imgurl']);
		add_option("ct_custom_ad5_alt", $_POST['ct_custom_ad5_alt']);
		add_option("ct_custom_ad6_url", $_POST['ct_custom_ad6_url']);
		add_option("ct_custom_ad6_imgurl", $_POST['ct_custom_ad6_imgurl']);
		add_option("ct_custom_ad6_alt", $_POST['ct_custom_ad6_alt']);
		add_option("ct_custom_advertise_url", $_POST['ct_custom_advertise_url']);
		// Footer
		add_option("ct_footer_text", $_POST['ct_footer_text']);
		// Google Analytics
		add_option("ct_google_analytics", $_POST['ct_google_analytics']);
		// Twitter Widget
		add_option("ct_twitter", $_POST['ct_twitter']);
}

if (is_admin() && isset($_GET['activated'] ) && $pagenow == "themes.php" ) {
	//Call action that sets
	add_action('admin_head','ct_option_setup');
	//Do redirect
	header( 'Location: '.admin_url().'admin.php?page=options_panel.php' ) ;
}

function contempo_admin_head() {
	?>
    <script type="text/javascript">
		jQuery(function(){
			var message = '<p>This theme comes with a <a href="<?php echo admin_url('admin.php?page=options_panel.php'); ?>">comprehensive options panel</a>. This theme also supports widgets, please visit the <a href="<?php echo admin_url('widgets.php'); ?>">widgets settings page</a> to configure them.</p>';
			jQuery('.themes-php #message2').html(message);
		});
    </script>
	<?php
}

function contempo_wp_head() {
	
	if(get_option("ct_custom_favicon_url", $single = true) !="") { ?>
    <link rel="shortcut icon" href="<?php echo get_option("ct_custom_favicon_url", $single = true); ?>" />
    <?php } ?>
    
    <!-- jQuery -->
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>
    
    <!-- jCycle -->
    <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.cycle.all.min.js"></script>
    <script type="text/javascript">
    $(document).ready(function() {	
		$('#slides').cycle({ 
			fx:     '<?php echo get_option("ct_featured_effect", $single = true); ?>',
			speed:  '<?php echo get_option("ct_featured_speed", $single = true); ?>',
			timeout: <?php echo get_option("ct_featured_timeout", $single = true); ?>,
			delay:  <?php echo get_option("ct_featured_delay", $single = true); ?>, // lets you set the number of milliseconds to add to the timeout value for the first slide
			next:   '#nextarrow', // used to identify the element which should be the trigger next transition
			prev:   '#prevarrow' // used to identify the element which should be the trigger previous transition
		});
	});
	</script>
    
    <!-- PrettyPhoto -->
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/prettyPhoto.css" type="text/css" media="screen" charset="utf-8" />
    <script src="<?php bloginfo('template_directory'); ?>/js/jquery.prettyPhoto.js" type="text/javascript" charset="utf-8"></script>
    
	<!-- Contact Form Validation and Ajax Submit -->
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/validationEngine.jquery.css" type="text/css" media="screen" charset="utf-8" /> 
	<script src="<?php bloginfo('template_directory'); ?>/js/jquery.validationEngine.js" type="text/javascript"></script>
    <script type="text/javascript">
    // Ajax Submit
    // Full documentation on this can be found at http://www.position-absolute.com/articles/jquery-form-validator-because-form-validation-is-a-mess/
    $(document).ready(function() {
        $("#contactform").validationEngine({
            ajaxSubmit: true,
                ajaxSubmitFile: "<?php bloginfo('template_directory'); ?>/includes/ajaxSubmit.php",
                ajaxSubmitMessage: "<?php echo stripslashes(get_option("ct_success", $single = true)); ?>",
            success :  false,
            failure : function() {}
        })
    });
	</script>
    
    <!-- Twitter -->
    <script src="<?php bloginfo('template_directory'); ?>/js/jquery.tweet.js" type="text/javascript"></script>
    <script type="text/javascript">
	$(document).ready(function(){
		$("#twitter").tweet({
			join_text: "auto",
			username: "<?php $tweetid = get_option("widget_twitterwidget", $single = true); echo $tweetid['tweetid']; ?>",
			count: <?php $tweetnum = get_option("widget_twitterwidget", $single = true); echo $tweetnum['tweetnum']; ?>, //amount of tweets to display
			loading_text: "loading tweets..."
		});
	});
	</script>
    
	<!-- Core Javascript -->
    <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/core.js"></script>
    
    <!--[if IE 6]>
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/ie6.css" type="text/css" />
    <script src="<?php bloginfo('template_directory'); ?>/js/DD_belatedPNG_0.0.8a-min.js"></script>
    <script>DD_belatedPNG.fix('.pngfix');</script>
    <![endif]-->
	
	<?php if(get_option("ct_gmap", $single = true) =="yes") { ?>
    <!-- Google Maps -->
    <script type="text/javascript" src="http://www.google.com/jsapi"></script>
    <script src="http://maps.google.com/maps?file=api&v=2&key=<?php echo get_option("ct_gmap_key", $single = true); ?>" type="text/javascript"></script>
    <script src="http://www.google.com/uds/api?file=uds.js&v=1.0&source=uds-msw&key=<?php echo get_option("ct_gmap_key", $single = true); ?>" type="text/javascript"></script>
    <style type="text/css">@import url("http://www.google.com/uds/css/gsearch.css");</style>
    <script type="text/javascript">window._uds_msw_donotrepair = true;</script>
    <script src="http://www.google.com/uds/solutions/mapsearch/gsmapsearch.js?mode=new" type="text/javascript"></script>
    <style type="text/css">@import url("http://www.google.com/uds/solutions/mapsearch/gsmapsearch.css");</style>
    <script type="text/javascript">
      function LoadMapSearchControl() {
        var options = {
              zoomControl : GSmapSearchControl.ZOOM_CONTROL_ENABLE_ALL,
              idleMapZoom : GSmapSearchControl.ACTIVE_MAP_ZOOM,
              activeMapZoom : GSmapSearchControl.ACTIVE_MAP_ZOOM
              }
        new GSmapSearchControl(
              document.getElementById("mapsearch"),
              "<?php echo get_option("ct_address", $single = true); ?>",
              options
              );
      }
      GSearch.setOnLoadCallback(LoadMapSearchControl);
    </script>
    <?php }

	if(get_option("ct_stylesheet", $single = true) =="neutral") { ?>
    <?php } elseif(get_option("ct_stylesheet", $single = true) =="dark") { ?>
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/skins/dark.css" type="text/css" media="screen" />
    <?php } elseif(get_option("ct_stylesheet", $single = true) =="dusk") { ?>
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/skins/dusk.css" type="text/css" media="screen" />
    <?php } elseif(get_option("ct_stylesheet", $single = true) =="green") { ?>
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/skins/green.css" type="text/css" media="screen" />
    <?php } elseif(get_option("ct_stylesheet", $single = true) =="blue") { ?>
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/skins/blue.css" type="text/css" media="screen" />
    <?php } elseif(get_option("ct_stylesheet", $single = true) =="purple") { ?>
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/skins/purple.css" type="text/css" media="screen" />
    <?php } elseif(get_option("ct_stylesheet", $single = true) =="red") { ?>
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/skins/red.css" type="text/css" media="screen" />
    <?php } else { ?>
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/skins/rustic.css" type="text/css" media="screen" />
    <?php }
    
    if(get_option("ct_usestyles", $single = true) =="yes") { ?>
	<?php include(TEMPLATEPATH . '/includes/custom_stylesheet.php'); ?>
    <?php }
	
	// Date format
	$GLOBALS['ctdate'] = get_option('ct_dateformat');	
	if ( $GLOBALS['ctdate'] == "" )
		$GLOBALS['ctdate'] = "F jS, Y";	

}

//Add WordPress 3.0 Menu Support
add_theme_support( 'menus' );

function industry_abovelogo() {
    do_action('industry_abovelogo');
}

	function industry_nav() { ?>
			<div id="navwrap" class="pngfix">
            	<div id="nav">
                	<?php wp_nav_menu( 'container_id=nav&menu_class=left' ); ?>
            	
                	<form method="get" id="searchform" action="<?php bloginfo('url'); ?>/">
                        <input type="text" value="Search..." name="s" id="s" class="right" onfocus="if(this.value=='Search...')this.value = '';" onblur="if(this.value=='')this.value = 'Search...';" />
                    </form>
                </div>
            </div>
	<?php }
	add_action('industry_abovelogo','industry_nav',1);

function industry_belowlogo() {
    do_action('industry_belowlogo');
}

function new_excerpt_length($length) {
	$exlength = get_option("ct_excerpt_length", $single = true); 
	return $exlength;
}
add_filter('excerpt_length', 'new_excerpt_length');
?>