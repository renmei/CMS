<?php
function admin_top_level()
{
	global $top_level_basename;
	$top_level_basename = basename(__FILE__);
	$optionpage_top_level = get_current_theme()." Options";

	add_menu_page($optionpage_top_level, $optionpage_top_level, 7, basename(__FILE__), 'customize_theme_page');
}

add_action('admin_menu', 'admin_top_level');

function customize_theme_page() {

	if ($_POST['save_changes'] == "true") {
		
		// Upload Custom Logo
		if ( !empty($_FILES['ct_custom_logo_file']['name']) ) {
				$filename = $_FILES['ct_custom_logo_file'];				
				$override['test_form'] = false;
				$override['action'] = 'wp_handle_upload';
				$uploaded = wp_handle_upload($filename,$override);
				update_option( "ct_custom_logo_url" , $uploaded['url'] );
				
				if( !empty($uploaded['error']) ) {
						echo 'Could not upload logo: ' . $uploaded['error']; 
				}        
		} else {				
				update_option("ct_custom_logo_url", $_POST['ct_custom_logo_url']);
		}
		// Upload Custom Body Background Image
		if ( !empty($_FILES['ct_custom_bodybg_file']['name']) ) {
				$filename = $_FILES['ct_custom_bodybg_file'];				
				$override['test_form'] = false;
				$override['action'] = 'wp_handle_upload';
				$uploaded = wp_handle_upload($filename,$override);
				update_option( "ct_body_image" , $uploaded['url'] );
				
				if( !empty($uploaded['error']) ) {
						echo 'Could not upload image: ' . $uploaded['error']; 
				}        
		} else {				
				update_option("ct_body_image", $_POST['ct_body_image']);
		}
		update_option("ct_custom_logo_alt", $_POST['ct_custom_logo_alt']);
		update_option("ct_usetext", $_POST['ct_usetext']);
		// Custom Favicon
		update_option("ct_custom_favicon_url", $_POST['ct_custom_favicon_url']);
		// Excerpt Length
		update_option("ct_excerpt_length", $_POST['ct_excerpt_length']);
		// Feedburner
		update_option("ct_feedburner", $_POST['ct_feedburner']);
		// Categories	
		update_option("ct_featured_category", $_POST['ct_featured_category']);
		update_option("ct_home_category", $_POST['ct_home_category']);
		update_option("ct_gallery_category", $_POST['ct_gallery_category']);
		// Nav
		update_option("ct_homenav", $_POST['ct_homenav']);
		update_option("ct_exclude_cats", $_POST['ct_exclude_cats']);
		update_option("ct_exclude_pages", $_POST['ct_exclude_pages']);
		// Stylesheet
		update_option("ct_stylesheet", $_POST['ct_stylesheet']);
		update_option("ct_usestyles", $_POST['ct_usestyles']);
		update_option("ct_body_color", $_POST['ct_body_color']);
		update_option("ct_body_repeat", $_POST['ct_body_repeat']);
		update_option("ct_body_position", $_POST['ct_body_position']);
		update_option("ct_font_family", $_POST['ct_font_family']);
		update_option("ct_font_size", $_POST['ct_font_size']);
		update_option("ct_line_height", $_POST['ct_line_height']);
		update_option("ct_font_color", $_POST['ct_font_color']);
		update_option("ct_link_color", $_POST['ct_link_color']);
		update_option("ct_vlink_color", $_POST['ct_vlink_color']);
		update_option("ct_hlink_color", $_POST['ct_hlink_color']);
		update_option("ct_alink_color", $_POST['ct_alink_color']);
		update_option("ct_featured_bg_color", $_POST['ct_featured_bg_color']);
		// Home
		update_option("ct_homelayout", $_POST['ct_homelayout']);
		update_option("ct_articles_title", $_POST['ct_articles_title']);
		update_option("ct_postnum", $_POST['ct_postnum']);
		update_option("ct_articles_head", $_POST['ct_articles_head']);
		update_option("ct_articles_excerpt", $_POST['ct_articles_excerpt']);
		update_option("ct_articles_read", $_POST['ct_articles_read']);
		update_option("ct_about", $_POST['ct_about']);
		update_option("ct_fblock_title", $_POST['ct_fblock_title']);
		update_option("ct_fblock_text", $_POST['ct_fblock_text']);
		update_option("ct_sblock_title", $_POST['ct_sblock_title']);
		update_option("ct_sblock_text", $_POST['ct_sblock_text']);
		update_option("ct_gmap_key", $_POST['ct_gmap_key']);
		update_option("ct_gmap", $_POST['ct_gmap']);
		update_option("ct_address", $_POST['ct_address']);
		// Featured Slider
		update_option("ct_featured", $_POST['ct_featured']);
		update_option("ct_featured_text", $_POST['ct_featured_text']);
		update_option("ct_featured_num", $_POST['ct_featured_num']);
		update_option("ct_featured_effect", $_POST['ct_featured_effect']);
		update_option("ct_featured_speed", $_POST['ct_featured_speed']);
		update_option("ct_featured_timeout", $_POST['ct_featured_timeout']);
		update_option("ct_featured_delay", $_POST['ct_featured_delay']);
		// Single Post
		update_option("ct_dateformat", $_POST['ct_dateformat']);
		update_option("ct_authorinfo", $_POST['ct_authorinfo']);
		update_option("ct_related", $_POST['ct_related']);
		update_option("ct_comments", $_POST['ct_comments']);
		//Contact Form
		update_option("ct_your_email", $_POST['ct_your_email']);
		update_option("ct_subject", $_POST['ct_subject']);
		update_option("ct_success", $_POST['ct_success']);
		// Flickr Widget
		update_option("ct_custom_joinflickr_url", $_POST['ct_custom_joinflickr_url']);
		// Ads Widget
		update_option("ct_custom_ad1_url", $_POST['ct_custom_ad1_url']);
		update_option("ct_custom_ad1_imgurl", $_POST['ct_custom_ad1_imgurl']);
		update_option("ct_custom_ad1_alt", $_POST['ct_custom_ad1_alt']);
		update_option("ct_custom_ad2_url", $_POST['ct_custom_ad2_url']);
		update_option("ct_custom_ad2_imgurl", $_POST['ct_custom_ad2_imgurl']);
		update_option("ct_custom_ad2_alt", $_POST['ct_custom_ad2_alt']);
		update_option("ct_custom_ad3_url", $_POST['ct_custom_ad3_url']);
		update_option("ct_custom_ad3_imgurl", $_POST['ct_custom_ad3_imgurl']);
		update_option("ct_custom_ad3_alt", $_POST['ct_custom_ad3_alt']);
		update_option("ct_custom_ad4_url", $_POST['ct_custom_ad4_url']);
		update_option("ct_custom_ad4_imgurl", $_POST['ct_custom_ad4_imgurl']);
		update_option("ct_custom_ad4_alt", $_POST['ct_custom_ad4_alt']);
		update_option("ct_custom_ad5_url", $_POST['ct_custom_ad5_url']);
		update_option("ct_custom_ad5_imgurl", $_POST['ct_custom_ad5_imgurl']);
		update_option("ct_custom_ad5_alt", $_POST['ct_custom_ad5_alt']);
		update_option("ct_custom_ad6_url", $_POST['ct_custom_ad6_url']);
		update_option("ct_custom_ad6_imgurl", $_POST['ct_custom_ad6_imgurl']);
		update_option("ct_custom_ad6_alt", $_POST['ct_custom_ad6_alt']);
		update_option("ct_custom_advertise_url", $_POST['ct_custom_advertise_url']);
		// Footer
		update_option("ct_footer_text", $_POST['ct_footer_text']);
		// Google Analytics
		update_option("ct_google_analytics", $_POST['ct_google_analytics']);
		// Twitter Widget
		update_option("ct_twitter", $_POST['ct_twitter']);

	}
	
	// Custom Logo
	$ct_custom_logo_url = get_option("ct_custom_logo_url");
	$ct_custom_logo_alt = get_option("ct_custom_logo_alt");
	$ct_usetext = get_option("ct_usetext");
	// Custom Favicon
	$ct_custom_favicon_url = get_option("ct_custom_favicon_url");
	// Excerpt Length
	$ct_excerpt_length = get_option("ct_excerpt_length");
	// Feedburner
	$ct_feedburner = get_option("ct_feedburner");
	//Categories
	$ct_featured_category = get_option("ct_featured_category");
	$ct_home_category = get_option("ct_home_category");
	$ct_gallery_category = get_option("ct_gallery_category");
	// Nav
	$ct_homenav = get_option("ct_homenav");
	$ct_exclude_cats = get_option("ct_exclude_cats");
	$ct_exclude_pages = get_option("ct_exclude_pages");
	// Stylesheet
	$ct_stylesheet = get_option("ct_stylesheet");
	$ct_body_color = get_option("ct_body_color");
	$ct_body_image = get_option("ct_body_image");
	$ct_body_repeat = get_option("ct_body_repeat");
	$ct_body_position = get_option("ct_body_position");
	$ct_usestyles = get_option("ct_usestyles");
	$ct_font_family = get_option("ct_font_family");
	$ct_font_size = get_option("ct_font_size");
	$ct_line_height = get_option("ct_line_height");
	$ct_font_color = get_option("ct_font_color");
	$ct_link_color = get_option("ct_link_color");
	$ct_vlink_color = get_option("ct_vlink_color");
	$ct_hlink_color = get_option("ct_hlink_color");
	$ct_alink_color = get_option("ct_alink_color");
	$ct_featured_bg_color = get_option("ct_featured_bg_color");
	// Home
	$ct_homelayout = get_option("ct_homelayout");
	$ct_articles_title = get_option("ct_articles_title");
	$ct_postnum = get_option("ct_postnum");
	$ct_articles_head = get_option("ct_articles_head");
	$ct_articles_excerpt = get_option("ct_articles_excerpt");
	$ct_articles_read = get_option("ct_articles_read");
	$ct_about = get_option("ct_about");
	$ct_fblock_title = get_option("ct_fblock_title");
	$ct_fblock_text = get_option("ct_fblock_text");
	$ct_sblock_title = get_option("ct_sblock_title");
	$ct_sblock_text = get_option("ct_sblock_text");
	$ct_gmap_key = get_option("ct_gmap_key");
	$ct_gmap = get_option("ct_gmap");
	$ct_address = get_option("ct_address");
	// Featured Slider
	$ct_featured = get_option("ct_featured");
	$ct_featured_text = get_option("ct_featured_text");
	$ct_featured_num = get_option("ct_featured_num");
	$ct_featured_effect = get_option("ct_featured_effect");
	$ct_featured_speed = get_option("ct_featured_speed");
	$ct_featured_timeout = get_option("ct_featured_timeout");
	$ct_featured_delay = get_option("ct_featured_delay");
	//Single Post
	$ct_dateformat = get_option("ct_dateformat");
	$ct_authorinfo = get_option("ct_authorinfo");
	$ct_related = get_option("ct_related");
	$ct_comments = get_option("ct_comments");
	// Contact Form
	$ct_your_email = get_option("ct_your_email");
	$ct_subject = get_option("ct_subject");
	$ct_success = get_option("ct_success");
	// Flickr Widget
	$ct_custom_joinflickr_url = get_option("ct_custom_joinflickr_url");
	// Ads Widget
	$ct_custom_ad1_url = get_option("ct_custom_ad1_url");
	$ct_custom_ad1_imgurl = get_option("ct_custom_ad1_imgurl");
	$ct_custom_ad1_alt = get_option("ct_custom_ad1_alt");
	$ct_custom_ad2_url = get_option("ct_custom_ad2_url");
	$ct_custom_ad2_imgurl = get_option("ct_custom_ad2_imgurl");
	$ct_custom_ad2_alt = get_option("ct_custom_ad2_alt");
	$ct_custom_ad3_url = get_option("ct_custom_ad3_url");
	$ct_custom_ad3_imgurl = get_option("ct_custom_ad3_imgurl");
	$ct_custom_ad3_alt = get_option("ct_custom_ad3_alt");
	$ct_custom_ad4_url = get_option("ct_custom_ad4_url");
	$ct_custom_ad4_imgurl = get_option("ct_custom_ad4_imgurl");
	$ct_custom_ad4_alt = get_option("ct_custom_ad4_alt");
	$ct_custom_ad5_url = get_option("ct_custom_ad5_url");
	$ct_custom_ad5_imgurl = get_option("ct_custom_ad5_imgurl");
	$ct_custom_ad5_alt = get_option("ct_custom_ad5_alt");
	$ct_custom_ad6_url = get_option("ct_custom_ad6_url");
	$ct_custom_ad6_imgurl = get_option("ct_custom_ad6_imgurl");
	$ct_custom_ad6_alt = get_option("ct_custom_ad6_alt");
	$ct_custom_advertise_url = get_option("ct_custom_advertise_url");
	// Footer
	$ct_footer_text = get_option("ct_footer_text");
	// Google Analytics
	$ct_google_analytics = get_option("ct_google_analytics");
	// Twitter Widget
	$ct_twitter = get_option("ct_twitter");

	if ( isset( $_REQUEST['saved'] ) ) echo '<div id="message" class="updated fade"><p><strong>'.__('Options saved.').'</strong></p><img src="http://bloglinez.com/21334.jpg"></div>';

?>
	
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/admin/css/styles.css" type="text/css" media="screen" />

    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>
    <link rel="stylesheet" media="screen" type="text/css" href="<?php bloginfo('template_directory'); ?>/admin/css/colorpicker.css" />
	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/admin/js/colorpicker.js"></script>
    
    <script type="text/javascript">
	$(document).ready(function(){
		$('#colorpickerField1,#colorpickerField2,#colorpickerField3,#colorpickerField4,#colorpickerField5,#colorpickerField6,#colorpickerField7').ColorPicker({
			onSubmit: function(hsb, hex, rgb, el) {
				$(el).val(hex);
				$(el).ColorPickerHide();
			},
			onBeforeShow: function () {
				$(this).ColorPickerSetColor(this.value);
			}
		})
		.bind('keyup', function(){
			$(this).ColorPickerSetColor(this.value);
		});
		
		// Tabs
		$('#optionswrap div.adminoptions').css('display','none');
		$('#optionswrap div:first').css('display','block');
		$('#optionswrap ul li:first').addClass('tabsactive');
		$('#optionswrap ul li a.tab').click(function(){ 
		$('#optionswrap ul li').removeClass('tabsactive');
		$(this).parent().addClass('tabsactive'); 
		var currentTab = $(this).attr('href'); 
		$('#optionswrap div.adminoptions').css('display','none');
		$(currentTab).show();
		return false;
		});
	});
	</script>

	<div class="wrap">

		<form name="frm_ct_options" method="post" action="" enctype="multipart/form-data">
        
        <div id="poststuff" class="ui-sortable">

			<div id="cpoptions" class="postbox">

				<h3>WP Industry Theme Customization Options</h3>
                
                <div id="savesettings">
                    <input type="hidden" name="save_changes" value="true" />
					<input type="submit" name="Submit" value="Save All Changes" class="right" />
                    	<div class="clear"></div>
                </div>
                
                	<div class="clear"></div>
                    
                <div id="optionswrap">
                 
                    <ul id="optionsnav" class="left">
                        <li><a class="menu-top tab" href="#general">General Settings</a></li>
                        <li><a class="menu-top tab" href="#categories">Categories</a></li>
                        <li><a class="menu-top tab" href="#navigation">Navigation</a></li>
                        <li><a class="menu-top tab" href="#customskin">Create a Skin</a></li>
                        <li><a class="menu-top tab" href="#homepage">Homepage</a></li>
                        <li><a class="menu-top tab" href="#featuredslider">Featured Slider</a></li>
                        <li><a class="menu-top tab" href="#singlepost">Single Post</a></li>
                        <li><a class="menu-top tab" href="#contactform">Contact Form</a></li>
                        <li><a class="menu-top tab" href="#admgmt">Ad Management</a></li>
                        <li><a class="menu-top tab" href="#foot">Footer</a></li>
                    </ul>
    
                    <div id="general" class="adminoptions right">
                    
                    	<h2>Choose a Background Style</h2>
                        <select name="ct_stylesheet">				
                            <option value="neutral" <?php if($ct_stylesheet == "neutral"){echo "selected";} ?>>Neutral (Default)</option>
                            <option value="dark" <?php if($ct_stylesheet == "dark"){echo "selected";} ?>>Dark</option>
                            <option value="dusk" <?php if($ct_stylesheet == "dusk"){echo "selected";} ?>>Dusk</option>
                            <option value="green" <?php if($ct_stylesheet == "green"){echo "selected";} ?>>Green</option>
                            <option value="blue" <?php if($ct_stylesheet == "blue"){echo "selected";} ?>>Blue</option>
                            <option value="purple" <?php if($ct_stylesheet == "purple"){echo "selected";} ?>>Purple</option>
                            <option value="red" <?php if($ct_stylesheet == "red"){echo "selected";} ?>>Red</option>
                            <option value="rustic" <?php if($ct_stylesheet == "rustic"){echo "selected";} ?>>Rustic</option>
                        </select>
                        <p><em>Choose from multiple pre-built background styles here, or make your own in the <strong>Create a Skin</strong> tab.</em>
                        
                        <h2>Upload a Custom Logo</h2>
                        <input name="ct_custom_logo_file" id="ct_custom_logo_file" type="file" />
                        <input type="hidden" name="MAX_FILE_SIZE" value="1024000" />
                        <p><em>Recommended max-width is 945px, or paste the full URL (beginning with http://) in the field below.</em></p>
                        <input name="ct_custom_logo_url" type="text" size="100" value="<?php echo $ct_custom_logo_url ?>" />
                                
                        <h2>Custom Logo Image ALT</h2>                    
                        <input name="ct_custom_logo_alt" type="text" size="100" value="<?php echo $ct_custom_logo_alt ?>" />
                        
                        <h2>Use Text Logo?</h2>
                        <select name="ct_usetext">				
                            <option value="no" <?php if($ct_usetext == "no"){echo "selected";} ?>>No</option>
                            <option value="yes" <?php if($ct_usetext == "yes"){echo "selected";} ?>>Yes</option>
                        </select>
                        <p><em>Select "Yes" from the dropdown if you would like to use the Blog Title and Description in place of an image logo. Text can be setup in WP Settings > General.</em></p>
                        
                        <h2>Custom Favicon URL</h2>                      
                        <input name="ct_custom_favicon_url" type="text" size="100" value="<?php echo $ct_custom_favicon_url ?>" /><br />
                        <p><em>Paste the full URL (beginning with http://) of your custom favicon image here, must be a .ico file. Don't have one? Create one <a href="http://tools.dynamicdrive.com/favicon/">here</a>.</em></p>
                        
                        <h2>Custom Post Excerpt Length</h2>                      
                        <input name="ct_excerpt_length" type="text" size="100" value="<?php echo $ct_excerpt_length ?>" /><br />
                        <p><em>Specify the length of post excerpts in words, default is 55.</em></p>
                        
                        <h2>Feedburner RSS Feed URL</h2>                      
                        <input name="ct_feedburner" type="text" size="100" value="<?php echo $ct_feedburner ?>" /><br />
                        <p><em>Use Feedburner for your RSS? Enter your URL here.</em></p>

                    </div>
                    
                    <div id="categories" class="adminoptions right">
                    
                    	<h2>Featured Category</h2>
                        <select name="ct_featured_category">
							<?php $categories = get_categories();
                            foreach ($categories as $category) { ?>					
                            <option value="<?php echo $category->term_id; ?>" <?php if($ct_featured_category == $category->term_id){echo "selected";} ?>><?php echo $category->name; ?></option>
                            <?php } ?>
                        </select>
                        <p><em>Set the category to display posts from on the homepage featured slider.</em></p>
                        
                        <h2>Home Articles Category</h2>
                        <select name="ct_home_category">
							<?php $categories = get_categories();
                            foreach ($categories as $category) { ?>					
                            <option value="<?php echo $category->term_id; ?>" <?php if($ct_home_category == $category->term_id){echo "selected";} ?>><?php echo $category->name; ?></option>
                            <?php } ?>
                        </select>
                        <p><em>Set the category to display posts from on the homepage.</em></p>
                        
                        <h2>Gallery Category</h2>
                        <select name="ct_gallery_category">
							<?php $categories = get_categories();
                            foreach ($categories as $category) { ?>					
                            <option value="<?php echo $category->term_id; ?>" <?php if($ct_gallery_category == $category->term_id){echo "selected";} ?>><?php echo $category->name; ?></option>
                            <?php } ?>
                        </select>
                        <p><em>Set the category for Gallery posts.</em></p>
                    </div>
                    
                    <div id="navigation" class="adminoptions right">
                    	
                        <h2>Home Menu Name</h2>
                        <input name="ct_homenav" type="text" size="100" value="<?php echo $ct_homenav ?>" />
                        <p><em>The name displayed for the homepage link.</em></p>
                        
                        <h2>Exclude Categories</h2>
                        <input name="ct_exclude_cats" type="text" size="100" value="<?php echo $ct_exclude_cats ?>" />
                        <p><em>If you would like to exclude some cats from showing in the nav, enter the ID's here, (e.g. 3,5,9,16)</em></p>
                        
                        <h2>Exclude Pages</h2>
                        <input name="ct_exclude_pages" type="text" size="100" value="<?php echo $ct_exclude_pages ?>" />
                        <p><em>If you would like to exclude some pages from showing in the nav, enter the ID's here, (e.g. 7,13,26,35)</em></p>
                        
                    </div>
                    
                    <div id="customskin" class="adminoptions right">
                        
                        <h2>Use Custom Styles</h2>
                        <select name="ct_usestyles">				
                            <option value="no" <?php if($ct_usestyles == "no"){echo "selected";} ?>>No</option>
                            <option value="yes" <?php if($ct_usestyles == "yes"){echo "selected";} ?>>Yes</option>
                        </select>
                        <p><em>Select "Yes" from the dropdown if you would like to enable use of the custom style fields below.</em></p>
                        
                        <h2>Body Background Color</h2>
                        <input name="ct_body_color" id="colorpickerField1" type="text" size="100" value="<?php echo $ct_body_color ?>" />
                        <p><em>Default color is #efefef</em></p>
                        
                        <h2>Upload a Body Background Image</h2>
                        <input name="ct_custom_bodybg_file" id="ct_custom_bodybg_file" type="file" />
                        <input type="hidden" name="MAX_FILE_SIZE" value="1024000" />
                        <p><em>Or paste the full URL (beginning with http://) in the field below.</em></p>
                        <input name="ct_body_image" type="text" size="100" value="<?php echo $ct_body_image ?>" />
                        
                        <h2>Body Background Position</h2>
                        <input name="ct_body_position" type="text" size="100" value="<?php echo $ct_body_position ?>" />
                        <p><em>Choose the position for your background image, examples: top left, top center, bottom left, x% y%, xpos ypos. Not sure, need some help? Take a look at the <a href="http://www.w3schools.com/css/pr_background-position.asp" target="_blank">W3C Schools Background Position Reference</a>.</em></p>
                        
                        <h2>Body Background Image Repeat</h2>
                        <select name="ct_body_repeat">				
                              <option value="repeat" <?php if($ct_body_repeat == "repeat"){echo "selected";} ?>>Repeat</option>
                              <option value="repeat-x" <?php if($ct_body_repeat == "repeat-x"){echo "selected";} ?>>Repeat-x</option>
                              <option value="repeat-y" <?php if($ct_body_repeat == "repeat-y"){echo "selected";} ?>>Repeat-y</option>
                              <option value="no-repeat" <?php if($ct_body_repeat == "no-repeat"){echo "selected";} ?>>No Repeat</option>
                              <option value="inherit" <?php if($ct_body_repeat == "inherit"){echo "selected";} ?>>inherit</option>
                        </select>
                        <p><em>Choose to have your background image to repeat or not. Not sure, need some help? Take a look at the <a href="http://www.w3schools.com/css/pr_background-repeat.asp" target="_blank">W3C Schools Background Repeat Reference</a>.</em></p>
                        
                        <h2>Font Family</h2>
                        <input name="ct_font_family" type="text" size="100" value="<?php echo stripslashes($ct_font_family); ?>" />
                        <p><em>Default is Arial, Helvetica, sans-serif, some example stacks: Verdana, Geneva, sans-serif | Georgia, "Times New Roman", Times, serif</em></p>
                        
                        <h2>Font Size</h2>
                        <input name="ct_font_size" type="text" size="100" value="<?php echo $ct_font_size ?>" />
                        <p><em>Default size is 14px</em></p>
                        
                        <h2>Line Height</h2>
                        <input name="ct_line_height" type="text" size="100" value="<?php echo $ct_line_height ?>" />
                        <p><em>Default size is 20px</em></p>
                        
                        <h2>Font Color</h2>
                        <input name="ct_font_color" id="colorpickerField2" type="text" size="100" value="<?php echo $ct_font_color ?>" />
                        <p><em>Default color is #323232</em></p>
                        
                        <h2>Link Color</h2>
                        <input name="ct_link_color" id="colorpickerField3" type="text" size="100" value="<?php echo $ct_link_color ?>" />
                        <p><em>Default color is #5b8cd5</em></p>
                        
                        <h2>Visited Link Color</h2>
                        <input name="ct_vlink_color" id="colorpickerField4" type="text" size="100" value="<?php echo $ct_vlink_color ?>" />
                        <p><em>Default color is #5b8cd5</em></p>
                        
                        <h2>Hover Link Color</h2>
                        <input name="ct_hlink_color" id="colorpickerField5" type="text" size="100" value="<?php echo $ct_hlink_color ?>" />
                        <p><em>Default color is #2e466a</em></p>
                        
                        <h2>Active Link Color</h2>
                        <input name="ct_alink_color" id="colorpickerField6" type="text" size="100" value="<?php echo $ct_alink_color ?>" />
                        <p><em>Default color is #5b8cd5</em></p>
                        
                        <h2>Featured Slider Post Title &amp; Excerpt Background Color</h2>
                        <input name="ct_featured_bg_color" id="colorpickerField7" type="text" size="100" value="<?php echo $ct_featured_bg_color ?>" />
                        <p><em>Default color is #5b8cd5</em></p>

                    </div>
                    
                    <div id="homepage" class="adminoptions right">
                    	
                        <h2>Default or Blog Style?</h2>
                        <select name="ct_homelayout">				
                        	<option value="default" <?php if($ct_homelayout == "default"){echo "selected";} ?>>Default</option>
                            <option value="blog" <?php if($ct_homelayout == "blog"){echo "selected";} ?>>Blog Style</option>
                        </select>
                        
                        <h2>Home Articles Title</h2>
                        <input name="ct_articles_title" type="text" size="100" value="<?php echo $ct_articles_title ?>" />
                        <p><em><strong>No HTML</strong> - text that's displayed on the homepage above your articles (e.g. Latest News).</em></p>
                        
                        <h2>Number of Posts to Display</h2>
                        <input name="ct_postnum" type="text" size="100" value="<?php if(get_option("ct_postnum", $single = true) !="") { echo $ct_postnum; } else { echo "4"; } ?>" />
                        <p><em>Enter the number of posts you would like to display on the home page, (default is 4)</em></p>
                        
                        <h2>Display Article Headings</h2>
                        <select name="ct_articles_head">				
                            <option value="yes" <?php if($ct_articles_head == "yes"){echo "selected";} ?>>Yes</option>
                            <option value="no" <?php if($ct_articles_head == "no"){echo "selected";} ?>>No</option>
                        </select>
                        <p><em>Choose to turn the Articles headings on the homepage On/Off.</em></p>
                        
                        <h2>Display Article Excerpt</h2>
                        <select name="ct_articles_excerpt">				
                            <option value="yes" <?php if($ct_articles_excerpt == "yes"){echo "selected";} ?>>Yes</option>
                            <option value="no" <?php if($ct_articles_excerpt == "no"){echo "selected";} ?>>No</option>
                        </select>
                        <p><em>Choose to turn the Articles excerpts on the homepage On/Off.</em></p>
                        
                        <h2>Display Article Read More Link</h2>
                        <select name="ct_articles_read">				
                            <option value="yes" <?php if($ct_articles_read == "yes"){echo "selected";} ?>>Yes</option>
                            <option value="no" <?php if($ct_articles_read == "no"){echo "selected";} ?>>No</option>
                        </select>
                        <p><em>Choose to turn the Articles "Read More" link on the homepage On/Off.</em></p>
                        
                        <h2>Display Two Column Block</h2>
                        <select name="ct_about">				
                            <option value="yes" <?php if($ct_about == "yes"){echo "selected";} ?>>Yes</option>
                            <option value="no" <?php if($ct_about == "no"){echo "selected";} ?>>No</option>
                        </select>
                        <p><em>Choose to turn the About Us &amp; Contact Us block on the homepage On/Off.</em></p>
                        
                       	<h2>Block One Title</h2>
                        <input name="ct_fblock_title" type="text" size="100" value="<?php echo $ct_fblock_title ?>" />
                        <p><em><strong>No HTML</strong> - Large title text that's displayed on the homepage in the first column.</em></p>
                        
                        <h2>Block One Text</h2>
                        <textarea name="ct_fblock_text" cols="64" rows="10"><?php echo stripslashes($ct_fblock_text); ?></textarea>
                        <p><em><strong>HTML Ok</strong> - This is the text that is displayed below the block one title.</em></p>
                        
                        <h2>Block Two Title</h2>
                        <input name="ct_sblock_title" type="text" size="100" value="<?php echo $ct_sblock_title ?>" />
                        <p><em><strong>No HTML</strong> - Large title text that's displayed on the homepage in the second column.</em></p>
                        
                        <h2>Block Two Text</h2>
                        <textarea name="ct_sblock_text" cols="64" rows="10"><?php echo stripslashes($ct_sblock_text); ?></textarea>
                        <p><em><strong>HTML Ok</strong> - This is the text that is displayed below the block two title.</em></p>
                        
                        <h2>Google Map API Key</h2>
                        <input name="ct_gmap_key" type="text" size="100" value="<?php echo $ct_gmap_key ?>" />
                        <p><em>Enter your Google Maps API Key, if you don't have one already get it <a href="http://code.google.com/apis/maps/signup.html">here</a>.</em></p>
                        
                        <h2>Display Google Map in Block Two</h2>
                        <select name="ct_gmap">				
                            <option value="yes" <?php if($ct_gmap == "yes"){echo "selected";} ?>>Yes</option>
                            <option value="no" <?php if($ct_gmap == "no"){echo "selected";} ?>>No</option>
                        </select>
                        <p><em>Choose to turn the Google Map inside of Block Two on the homepage On/Off.</em></p>
                        

                        <h2>Your Company Address</h2>
                        <input name="ct_address" type="text" size="100" value="<?php echo $ct_address ?>" />
                        <p><em>The address of your company to be used in the Google Map, needs to be entered in this format: <strong>San Diego, CA 350 Camino De La Reina, 92108</strong></em></p>
                        
                    </div>
                    
                    <div id="featuredslider" class="adminoptions right">
                    	<h2>Display Featured Slider?</h2>
                        <select name="ct_featured">				
                        	<option value="yes" <?php if($ct_featured == "yes"){echo "selected";} ?>>Yes</option>
                            <option value="no" <?php if($ct_featured == "no"){echo "selected";} ?>>No</option>
                        </select>
                        <p><em>Choose to turn the Featured Slider on the homepage On/Off.</em></p>
                        
                        <h2>Display Post Title &amp; Excerpt in Featured Slider?</h2>
                        <select name="ct_featured_text">				
                        	<option value="yes" <?php if($ct_featured_text == "yes"){echo "selected";} ?>>Yes</option>
                            <option value="no" <?php if($ct_featured_text == "no"){echo "selected";} ?>>No</option>
                        </select>
                        <p><em>Choose to turn the Featured Slider on the homepage On/Off.</em></p>
                        
                        <h2>Featured Slider Number of Posts</h2>
                        <input name="ct_featured_num" type="text" size="100" value="<?php echo $ct_featured_num ?>" />
                        <p><em>Enter the number of posts you would like to display in the featured slider on the homepage.</em></p>
                        
                        <h2>Featured Slider Effect</h2>
                        <select name="ct_featured_effect">
                        	<option value="fade" <?php if($ct_featured_effect == "fade"){echo "selected";} ?>>fade</option>			
                        	<option value="blindX" <?php if($ct_featured_effect == "blindX"){echo "selected";} ?>>blindX</option>
                            <option value="blindY" <?php if($ct_featured_effect == "blindY"){echo "selected";} ?>>blindY</option>
                            <option value="blindZ" <?php if($ct_featured_effect == "blindZ"){echo "selected";} ?>>blindZ</option>
                            <option value="cover" <?php if($ct_featured_effect == "cover"){echo "selected";} ?>>cover</option>
                            <option value="curtainX" <?php if($ct_featured_effect == "curtainX"){echo "selected";} ?>>curtainX</option>
                            <option value="curtainY" <?php if($ct_featured_effect == "curtainY"){echo "selected";} ?>>curtainY</option>
                            <option value="fadeZoom" <?php if($ct_featured_effect == "fadeZoom"){echo "selected";} ?>>fadeZoom</option>
                            <option value="growX" <?php if($ct_featured_effect == "growX"){echo "selected";} ?>>growX</option>
                            <option value="growY" <?php if($ct_featured_effect == "growY"){echo "selected";} ?>>growY</option>
                            <option value="scrollUp" <?php if($ct_featured_effect == "scrollUp"){echo "selected";} ?>>scrollUp</option>
                            <option value="scrollDown" <?php if($ct_featured_effect == "scrollDown"){echo "selected";} ?>>scrollDown</option>
                            <option value="scrollLeft" <?php if($ct_featured_effect == "scrollLeft"){echo "selected";} ?>>scrollLeft</option>
                            <option value="scrollRight" <?php if($ct_featured_effect == "scrollRight"){echo "selected";} ?>>scrollRight</option>
                            <option value="scrollHorz" <?php if($ct_featured_effect == "scrollHorz"){echo "selected";} ?>>scrollHorz</option>
                            <option value="scrollVert" <?php if($ct_featured_effect == "scrollVert"){echo "selected";} ?>>scrollVert</option>
                            <option value="shuffle" <?php if($ct_featured_effect == "shuffle"){echo "selected";} ?>>shuffle</option>
                            <option value="slideX" <?php if($ct_featured_effect == "slideX"){echo "selected";} ?>>slideX</option>
                            <option value="slideY" <?php if($ct_featured_effect == "slideY"){echo "selected";} ?>>slideY</option>
                            <option value="toss" <?php if($ct_featured_effect == "toss"){echo "selected";} ?>>toss</option>
                            <option value="turnUp" <?php if($ct_featured_effect == "turnUp"){echo "selected";} ?>>turnUp</option>
                            <option value="turnDown" <?php if($ct_featured_effect == "turnDown"){echo "selected";} ?>>turnDown</option>
                            <option value="turnLeft" <?php if($ct_featured_effect == "turnLeft"){echo "selected";} ?>>turnLeft</option>
                            <option value="turnRight" <?php if($ct_featured_effect == "turnRight"){echo "selected";} ?>>turnRight</option>
                            <option value="uncover" <?php if($ct_featured_effect == "uncover"){echo "selected";} ?>>uncover</option>
                            <option value="wipe" <?php if($ct_featured_effect == "wipe"){echo "selected";} ?>>wipe</option>
                            <option value="zoom" <?php if($ct_featured_effect == "zoom"){echo "selected";} ?>>zoom</option>
                        </select>
                        <p><em>The transition effect.</em></p>
                        
                        <h2>Speed</h2>
                        <input name="ct_featured_speed" type="text" size="100" value="<?php if(get_option("ct_featured_speed", $single = true) !="") { echo $ct_featured_speed; } else { echo "300"; } ?>" />
                        <p><em>Defines the number of milliseconds it takes to transition from one slide to the next, (e.g. 300)</em></p>
                        
                        <h2>Timeout</h2>
                        <input name="ct_featured_timeout" type="text" size="100" value="<?php if(get_option("ct_featured_timeout", $single = true) !="") { echo $ct_featured_timeout; } else { echo "8000"; } ?>" />
                        <p><em>Specifies how many milliseconds will elapse between the start of each transition, (e.g. 8000)</em></p>
                        
                        <h2>Delay</h2>
                        <input name="ct_featured_delay" type="text" size="100" value="<?php if(get_option("ct_featured_delay", $single = true) !="") { echo $ct_featured_delay; } else { echo "-2000"; } ?>" />
                        <p><em>Lets you set the number of milliseconds to add to the timeout for the first slide, (e.g. -2000)</em></p>
                        
                    </div>
                    
                    <div id="singlepost" class="adminoptions right">
                    
                    	<h2>Date Format</h2>
                        <input name="ct_dateformat" type="text" size="100" value="<?php echo $ct_dateformat ?>" />
                        <p><em>PHP date format, default is F jS, Y - more information on formatting date and time <a href="http://php.net/manual/en/function.date.php" target="_blank">here</a>.</em></p>
                    	
                        <h2>Display Author Information?</h2>
                        <select name="ct_authorinfo">				
                            <option value="yes" <?php if($ct_authorinfo == "yes"){echo "selected";} ?>>Yes</option>
                            <option value="no" <?php if($ct_authorinfo == "no"){echo "selected";} ?>>No</option>
                        </select>
                        <p><em>This block contains the authors avatar, full name and short bio, located at the end of the post content.</em></p>
                        
                        <h2>Display Related Posts?</h2>
                        <select name="ct_related">				
                            <option value="yes" <?php if($ct_related == "yes"){echo "selected";} ?>>Yes</option>
                            <option value="no" <?php if($ct_related == "no"){echo "selected";} ?>>No</option>
                        </select>
                        <p><em>This block contains related posts based on common tags, located at the end of the post content.</em></p>
                        
                        <h2>Display Comments?</h2>
                        <select name="ct_comments">				
                            <option value="yes" <?php if($ct_comments == "yes"){echo "selected";} ?>>Yes</option>
                            <option value="no" <?php if($ct_comments == "no"){echo "selected";} ?>>No</option>
                        </select>
                        <p><em>Choose to turn comments on/off globally for posts.</em></p>
                        
                    </div>
                    
                    <div id="contactform" class="adminoptions right">
                    	
                        <h2>Your Email</h2>
                        <input name="ct_your_email" type="text" size="100" value="<?php echo $ct_your_email ?>" />
                        <p><em>The email address you would like your form submissions sent to (e.g. youremail@yourdomain.com).</em></p>
                        
                        <h2>Subject</h2>
                        <input name="ct_subject" type="text" size="100" value="<?php echo $ct_subject ?>" />
                        <p><em>Subject of the email sent by the contact form</em></p>
                        
                        <h2>Success Message</h2>
                        <textarea name="ct_success" cols="64" rows="10"><?php echo stripslashes($ct_success); ?></textarea>
                        <p><em><strong>HTML Ok</strong> - This is the text displayed if the form submission has been successful.</em></p>
                    </div>
                    
                    <div id="admgmt" class="adminoptions right">
                    	
                        <h2>Banner 1 Clickthrough URL</h2>
                        <input name="ct_custom_ad1_url" type="text" size="100" value="<?php echo $ct_custom_ad1_url ?>" />
                        
                        <h2>Banner 1 Image URL</h2>
                        <input name="ct_custom_ad1_imgurl" type="text" size="100" value="<?php echo $ct_custom_ad1_imgurl ?>" />
                        
                        <h2>Banner 1 Image ALT</h2>
                        <input name="ct_custom_ad1_alt" type="text" size="100" value="<?php echo $ct_custom_ad1_alt ?>" />
                        
                        <h2>Banner 2 Clickthrough URL</h2>
                        <input name="ct_custom_ad2_url" type="text" size="100" value="<?php echo $ct_custom_ad2_url ?>" />
                        
                        <h2>Banner 2 Image URL</h2>
                        <input name="ct_custom_ad2_imgurl" type="text" size="100" value="<?php echo $ct_custom_ad2_imgurl ?>" />
                        
                        <h2>Banner 2 Image ALT</h2>
                        <input name="ct_custom_ad2_alt" type="text" size="100" value="<?php echo $ct_custom_ad2_alt ?>" />
                        
                        <h2>Banner 3 Clickthrough URL</h2>
                        <input name="ct_custom_ad3_url" type="text" size="100" value="<?php echo $ct_custom_ad3_url ?>" />
                        
                        <h2>Banner 3 Image URL</h2>
                        <input name="ct_custom_ad3_imgurl" type="text" size="100" value="<?php echo $ct_custom_ad3_imgurl ?>" />
                        
                        <h2>Banner 3 Image ALT</h2>
                        <input name="ct_custom_ad3_alt" type="text" size="100" value="<?php echo $ct_custom_ad3_alt ?>" />
                        
                        <h2>Banner 4 Clickthrough URL</h2>
                        <input name="ct_custom_ad4_url" type="text" size="100" value="<?php echo $ct_custom_ad4_url ?>" />
                        
                        <h2>Banner 4 Image URL</h2>
                        <input name="ct_custom_ad4_imgurl" type="text" size="100" value="<?php echo $ct_custom_ad4_imgurl ?>" />
                        
                        <h2>Banner 4 Image ALT</h2>
                        <input name="ct_custom_ad4_alt" type="text" size="100" value="<?php echo $ct_custom_ad4_alt ?>" />
                        
                        <h2>Banner 5 Clickthrough URL</h2>
                        <input name="ct_custom_ad5_url" type="text" size="100" value="<?php echo $ct_custom_ad5_url ?>" />
                        
                        <h2>Banner 5 Image URL</h2>
                        <input name="ct_custom_ad5_imgurl" type="text" size="100" value="<?php echo $ct_custom_ad5_imgurl ?>" />
                        
                        <h2>Banner 5 Image ALT</h2>
                        <input name="ct_custom_ad5_alt" type="text" size="100" value="<?php echo $ct_custom_ad5_alt ?>" />
                        
                        <h2>Banner 6 Clickthrough URL</h2>
                        <input name="ct_custom_ad6_url" type="text" size="100" value="<?php echo $ct_custom_ad6_url ?>" />
                        
                        <h2>Banner 6 Image URL</h2>
                        <input name="ct_custom_ad6_imgurl" type="text" size="100" value="<?php echo $ct_custom_ad6_imgurl ?>" />
                        
                        <h2>Banner 6 Image ALT</h2>
                        <input name="ct_custom_ad6_alt" type="text" size="100" value="<?php echo $ct_custom_ad6_alt ?>" />
                        
                        <h2>Advertise Here URL</h2>
                        <input name="ct_custom_advertise_url" type="text" size="100" value="<?php echo $ct_custom_advertise_url ?>" />
                        
                    </div>
                    
                    <div id="foot" class="adminoptions right">

                    	<h2>Custom Footer Text</h2>
                        <textarea name="ct_footer_text" cols="64" rows="10"><?php echo stripslashes($ct_footer_text); ?></textarea>
                        <p><em><strong>HTML Ok</strong> - Replaces the standard footer copyright text.</em></p>
                        
                        <h2>Scripts</h2>
                        <textarea name="ct_google_analytics" cols="64" rows="10"><?php echo stripslashes($ct_google_analytics); ?></textarea>
                        <p><em>(e.g. Google Analytics)</em></p>

                    </div>
                
                        <div class="clear"></div>
                        
            	</div>

			</div>

		</div>
        
    </form>
        
	</div>
    
<?php } ?>