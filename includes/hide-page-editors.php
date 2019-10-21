<?php

/**
 * Hide the default editor on these pages
 */

function hide_editor()
{
    global $pagenow;
    if (!('post.php' == $pagenow)) {
        return;
    }
    global $post;
    // Get the Post ID.
    $post_id = $_GET['post'] ? $_GET['post'] : $_POST['post_ID'] ;
    if (!isset($post_id)) {
        return;
    }
    // Hide the editor on the page titled 'Homepage'
    $homepgname = get_the_title($post_id);
    if ($homepgname == 'Hjem') {
        remove_post_type_support('page', 'editor');
    }
}
add_action('admin_head', 'hide_editor');

?>