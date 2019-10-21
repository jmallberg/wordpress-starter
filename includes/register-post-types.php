<?php

// Add custom post types
function wordpress_starter_post_types() {
	/* 
	Takes two arguments, first the name of the post type you want to create.
	Then an array of different options that describe your custom post type.
    */ 
    // Set name of post-type here
	register_post_type('eksempel', array(
		'public' => true,
		'labels' => array(
            // Set labels here
            // for more labels see: https://codex.wordpress.org/Function_Reference/register_post_type
            'name' => 'Eksempler',
            'add_new_item' => 'Legg til nytt eksempel',
            'edit_item' => 'Rediger eksempel',
            'all_items' => 'Alle eksempler',
            'singular_name' => 'Eksempel'
		),
		// Set dashicon, find appropriate icons at https://developer.wordpress.org/resource/dashicons/
        'menu_icon' => 'dashicons-calendar',
        // Does the post-type have an archive page?
        'has_archive' => true,
        // Set your own slug for this post type archive page
        'rewrite' => array('slug' => 'eksempler'),
	));
}
add_action('init', 'wordpress_starter_post_types');

?>