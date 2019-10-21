<?php 
/**
*
* Prevent Wordpress from wrapping images and iframes in p tags
* http://css-tricks.com/snippets/wordpress/remove-paragraph-tags-from-around-images/
* ( <p> and <iframe> and ACF support - http://wordpress.stackexchange.com/questions/136840/how-to-remove-p-tags-around-img-and-iframe-tags-in-the-acf-wysiwyg-field
*/
// Default Wordpress WYSIWYG
function filter_ptags_on_images_iframes($content)
{
    $content = preg_replace('/<p>\s*(<a .*>)?\s*(<img .* \/>)\s*(<\/a>)?\s*<\/p>/iU', '\1\2\3', $content);
    return preg_replace('/<p>\s*(<iframe .*>*.<\/iframe>)\s*<\/p>/iU', '\1', $content);
}
add_filter('the_content', 'filter_ptags_on_images_iframes');

// ACF WYSIWYG Plugin
function filter_ptags_on_images_iframes_acf($content)
{
    $content = preg_replace('/<p>\s*(<a .*>)?\s*(<img .* \/>)\s*(<\/a>)?\s*<\/p>/iU', '\1\2\3', $content);
    return preg_replace('/<p>\s*(<iframe .*>*.<\/iframe>)\s*<\/p>/iU', '\1', $content);
}
add_filter('acf_the_content', 'filter_ptags_on_images_iframes_acf');

?>