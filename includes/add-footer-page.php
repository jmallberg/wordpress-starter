<?php

if( function_exists('acf_add_options_page') ) {

	acf_add_options_page(array(
        'page_title' => 'Footer',
        'menu_title' => 'Footer info',
        'menu_slug' => 'footer-info',
        'icon_url' => 'dashicons-phone',
    ));
	
}

?>