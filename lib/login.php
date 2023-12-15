<?php

function smallenvelop_login_message( $message ) {
    if ( empty($message) ){
        return '<div class="header-title">Stefano Forlini</div>';
    } else {
        return $message;
    }
}
add_filter( 'login_message', 'smallenvelop_login_message' );

// Remove the language switcher from the login form
add_filter( 'login_display_language_dropdown', '__return_false' );

