<?php
/**
 * Header and navigation file.
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://fonts.googleapis.com/css?family=Libre+Baskerville:400,700&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600&display=swap" rel="stylesheet">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">

	<header id="masthead" class="site-header">
		<!-- Desktop navigation -->
		<nav class="navigation__desktop">
			<div class="navigation__desktop-logo">
				<?php if ( has_custom_logo() ) : ?>
					<?php the_custom_logo(); ?>
				<?php else : ?> 
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
					<h1 class="no--logo"> Wordpress </h1>
				</a>
				<?php endif;?>
			</div>
			<div class="navigation__desktop-menu">
				<?php
					wp_nav_menu( array(
						'theme_location' => 'primary',
						'menu_id'        => 'primary-menu',
					) );
				?>
			</div>
		</nav>
		<!-- Mobile navigation -->
		<nav class="navigation__mobile">
			<div class="navigation__mobile-logo">
				<?php if ( has_custom_logo() ) : ?>
					<?php the_custom_logo(); ?>
				<?php else : ?> 
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
						<h1 class="no--logo-mobile">Wordpress</h1>
					</a>
				<?php endif;?>
			</div>
			<!-- Hamburger -->
			<div class="navigation__nav-toggle">
				<span></span>
				<span></span>
				<span></span>
			</div>
			<!-- Drop-down items -->
			<div class="navigation__mobile-items">
				<?php
					wp_nav_menu( array(
						'theme_location' => 'primary',
						'menu_id'        => 'primary-menu',
					) );
				?>
			</div>
		</nav>
	</header>

	<div id="content" class="site-content">





