<?php

/**
 * Custom login logo and title
 */
// Url
add_filter( 'login_headerurl', 'namespace_login_headerurl' );
function namespace_login_headerurl( $url ) {
    $url = home_url( '/' );
    return $url;
}
// Title
add_filter( 'login_headertitle', 'namespace_login_headertitle' );
function namespace_login_headertitle( $title ) {
    $title = get_bloginfo( 'name' );
    return $title;
}
// Logo
add_action( 'login_head', 'namespace_login_style' );
function namespace_login_style() {
    echo '<style>.login h1 a { background-image: url( ' . get_template_directory_uri() . '/dist/images/login-logo.png ) !important; }</style>';
}

?>