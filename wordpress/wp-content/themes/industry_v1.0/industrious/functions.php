<?php
function childtheme_subnav() { ?>
	<div id="subnav">
		<?php wp_nav_menu( 'menu_class=left&fallback_cb=ct_nav_fallback' ); ?>      
        
	</div>
<?php }
add_action('industry_belowlogo','childtheme_subnav');

function unhook_industry_functions() {
    remove_action('industry_abovelogo','industry_nav',1);
}
add_action('init','unhook_industry_functions');

?>