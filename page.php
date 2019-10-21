<?php
/**
 * Page tamplate:
 * Add specific pages by copying this template and adding page-[name] to the file and adding the Template name to the top comment.
 */

get_header();
?>

	<main>
		<div class="main-container">
			<h1><?php the_title(); ?></h1>
			<?php
				while (have_posts() ) : the_post(); 
					the_content();
				endwhile;	
			?>
		</div>
	</main>

<?php

get_footer();
