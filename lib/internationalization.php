<?php
function _themename_load_theme_text_domain() {
    load_theme_textdomain( '_themename', get_template_directory() . '/languages' );
}
add_action( 'after_setup_theme', '_themename_load_theme_text_domain' );
