<?php

/**
 * Custom admin footer
 */
function remove_footer_admin () {
echo 'Created to ease your mind.';
}
add_filter('admin_footer_text', 'remove_footer_admin'); 

?>