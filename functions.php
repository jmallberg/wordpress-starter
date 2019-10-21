<?php
/**********************************************************************************
SETUP
- adds theme support for post formats, post thumbnails, HTML5, automatic feed links
and document title.
- registers a translation file
- registers navigation menus
**********************************************************************************/
if ( ! function_exists( 'wordpress_wp_theme_setup' ) ) :
	function wordpress_wp_theme_setup() {
		
		/* post formats */
  		add_theme_support( 'post-formats', array( 'aside', 'quote' ) );
		  
		/* post thumbnails */
		add_theme_support( 'post-thumbnails' );
		/* Add custom image sizes:
		name, width, height,   */
		// add_image_size('bookImage', 300, 440, true);
		
		/* HTML5 */
		add_theme_support( 'html5' );

		/* Document title */
		add_theme_support( 'title-tag' );

		/* Add support for core custom logo. */	
		add_theme_support( 'custom-logo', array(
			'height'      => 80,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );

		/* Registers translation file */
		load_theme_textdomain( 'wordpress-wp-theme', get_template_directory() . '/languages' );

		/* Register new menu here. This theme comes with an primary and a footer menu registered. */
		register_nav_menus( array(
			'primary' => esc_html__( 'Primary', 'wordpress-wp-theme' ),
			'footer-menu' => esc_html__( 'Footer', 'wordpress-wp-theme' ),
		) );
	}
endif;
add_action( 'after_setup_theme', 'wordpress_wp_theme_setup' );

/**********************************************************************************
Enqueue scripts and styles.
- Enqueues minified css
- Enqueues minified js
**********************************************************************************/
function wordpress_wp_theme_scripts() {
	wp_enqueue_style( 'wordpress-wp-theme-style', get_stylesheet_uri() );
	// Enque minified CSS styles
	wp_enqueue_style( 'wordpress-wp-theme-style-min', get_theme_file_uri() . '/sass/style.min.css' );
	// Enque minified JS
	wp_enqueue_script( 'wordpress-wp-theme-js', get_theme_file_uri( '/dist/js/wordpress-starter.js' ), array('jquery'), '1.0.6', true );
}
add_action( 'wp_enqueue_scripts', 'wordpress_wp_theme_scripts' );

/**********************************************************************************
INCLUDES:
- Puts all extended functionality in separate files in the includes folder.
- Do this to keep this file nice and tight.
**********************************************************************************/
// Register post types
include( get_stylesheet_directory() . '/includes/register-post-types.php' );
// Whitelist logo
include( get_stylesheet_directory() . '/includes/whitelist.php' );
// Custom admin footer
include( get_stylesheet_directory() . '/includes/custom-admin-footer.php' );
// Dynamic copyright symbol and year
include( get_stylesheet_directory() . '/includes/copyright.php' );
// Change exerpt link text
include( get_stylesheet_directory() . '/includes/change-exerpt-link-text.php' );
// Custom login logo
include( get_stylesheet_directory() . '/includes/custom-login-logo.php' );
// Prevent email as username to log in
include( get_stylesheet_directory() . '/includes/prevent-email-login.php' );
// Remove admin menu items
include( get_stylesheet_directory() . '/includes/remove-admin-menu-items.php' );
// Remove irritating welcome panel
include( get_stylesheet_directory() . '/includes/remove-welcome-panel.php' );
// Hide page editors
include( get_stylesheet_directory() . '/includes/hide-page-editors.php' );
// Allow SVG's
include( get_stylesheet_directory() . '/includes/add-svg-support.php' );
// Create Footer options
include( get_stylesheet_directory() . '/includes/add-footer-page.php' );
// Prevent Wordpress wrapping images and iframes in p-tags
include( get_stylesheet_directory() . '/includes/prevent-wp-image-wrapping.php' );
// Register widget areas
// include( get_stylesheet_directory() . '/includes/register-widget-area.php' );
// Set content width
// include( get_stylesheet_directory() . '/includes/set-content-width.php' );