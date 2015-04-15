<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<head profile="http://gmpg.org/xfn/11">
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

	<title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>

    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
    
    <link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php if(get_option("ct_feedburner", $single = true) !="") {  echo get_option("ct_feedburner", $single = true); } else { bloginfo('rss2_url');  } ?>" />
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    
	<?php wp_head(); ?>
   
   
   
   
   <link rel="stylesheet" type="text/css" href="http://suwrumia.com.pl/wp-content/themes/industry_v1.0/industry/cookie/cookiestyle.css" />
<script type="text/javascript"> 
//tresć komunikatu
var komunikat='<b>Informacja:</b> Nasz serwis wykorzystuje pliki cookies. Korzystanie z witryny oznacza zgodę na ich zapis lub odczyt zgodnie z preferencjami Twojej przeglądarki. <br />Możesz zmienić te ustawienia korzystając z opcji przeglądarki.';
//tresć przycisku akceptacji
var ButtonAkceptuj='Akceptuję';
</script>
<script type="text/javascript" src="http://suwrumia.com.pl/wp-content/themes/industry_v1.0/industry/cookie/cookieinfo.js"></script> 
</head>

<body>
	
    <?php industry_abovelogo(); ?>
    
    <div id="container">
    	<?php if(get_option("ct_usetext", $single = true) =="yes") { ?>
        	<div id="textlogo">
                <h1><?php bloginfo('name'); ?></h1>
                <h2><?php bloginfo('description'); ?></h2>
            </div>
		<?php } else { ?>
			<?php if(get_option("ct_custom_logo_url", "ct_custom_logo_alt", $single = true) !="") { ?>
                <a href="<?php bloginfo('url'); ?>"><img id="logo" src="<?php echo get_option("ct_custom_logo_url", $single = true); ?>" alt="<?php echo get_option("ct_custom_logo_alt", $single = true); ?>" /></a>
            <?php } else { ?>
                <a href="<?php bloginfo('url'); ?>"><img id="logo" class="pngfix" src="<?php bloginfo('template_directory'); ?>/images/industry_logo.png" height="129" width="129" alt="Industry" /></a>
            <?php } ?>
		<?php } ?>
		
        <?php industry_belowlogo(); ?>