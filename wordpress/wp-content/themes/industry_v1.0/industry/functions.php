<?php
	
if ( function_exists('register_sidebar') )
    register_sidebar(array(
		'name' => 'Sidebar',
		'description' => 'Widgets in this area will be shown in the sidebar area.',
        'before_widget' => '<div class="widget left">',
        'after_widget' => '</div><div class="clear"></div>',
        'before_title' => '<h2>',
        'after_title' => '</h2>',
    ));

if ( function_exists('register_sidebar') )
    register_sidebar(array(
		'name' => 'Footer',
		'description' => 'Widgets in this area will be shown in the footer area, max of four widgets can be added.',
        'before_widget' => '<div class="singlecol article left">',
        'after_widget' => '</div>',
        'before_title' => '<h2>',
        'after_title' => '</h2>',
    ));

$functions_path = TEMPLATEPATH . '/admin/';
$includes_path = TEMPLATEPATH . '/includes/';

// Custom Write Post Panel Fields
require_once ($functions_path . 'custom_fields.php');

// Admin Options Panel
require_once ($functions_path . 'options_panel.php');

// Theme Functions
require_once ($functions_path . 'theme_functions.php');

// Widgets
require_once ($includes_path . '/widgets.php');

add_action('wp_head', 'contempo_wp_head');
add_action('admin_head', 'contempo_admin_head'); 

?>