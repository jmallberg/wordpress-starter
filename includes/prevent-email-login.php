<?php

/**
 * Prevent users to log inn by e-mail
 */
remove_filter( 'authenticate', 'wp_authenticate_email_password', 20 );


?>