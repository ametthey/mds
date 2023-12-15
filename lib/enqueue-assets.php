<?php
/**************************************************************************
 * Enqueue Styles and Scripts
 ***********************************************************************/
function _themename_assets() {
    // HOME
    if ( is_front_page() ) {
        wp_enqueue_style( '_themename-stylesheet-home', get_stylesheet_directory_uri() . '/dist/assets/css/home.css', [], filemtime( get_template_directory().'/dist/assets/css/home.css' ) ,  'all' );
        wp_enqueue_style( '_themename-stylesheet-fontawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css', [], '' ,  'all' );
        wp_enqueue_script( '_themename-scripts-home', get_stylesheet_directory_uri() . '/dist/assets/js/home.js',[] , filemtime( get_template_directory().'/dist/assets/js/home.js' ) ,   true );
        // LOCATION
    } else if ( is_page_template('page-location.php') ) {
        wp_enqueue_style( '_themename-stylesheet-fontawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css', [], '' ,  'all' );
        wp_enqueue_style( '_themename-stylesheet-location', get_stylesheet_directory_uri() . '/dist/assets/css/location.css', [], filemtime( get_template_directory().'/dist/assets/css/location.css' ) ,  'all' );
        wp_enqueue_script( '_themename-scripts-location', get_stylesheet_directory_uri() . '/dist/assets/js/location.js',[] , filemtime( get_template_directory().'/dist/assets/js/location.js' ) ,   true );
        // CONTACT
    } else if ( is_page_template('page-contact.php') ) {
        wp_enqueue_style( '_themename-stylesheet-fontawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css', [], '' ,  'all' );
        wp_enqueue_style( '_themename-stylesheet-contact', get_stylesheet_directory_uri() . '/dist/assets/css/contact.css', [], filemtime( get_template_directory().'/dist/assets/css/contact.css' ) ,  'all' );
        wp_enqueue_script( '_themename-scripts-contact', get_stylesheet_directory_uri() . '/dist/assets/js/contact.js',[] , filemtime( get_template_directory().'/dist/assets/js/contact.js' ) ,   true );
        // BENEVOLE
    } else if ( is_page_template('page-benevole.php') ) {
        wp_enqueue_style( '_themename-stylesheet-fontawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css', [], '' ,  'all' );
        wp_enqueue_style( '_themename-stylesheet-benevole', get_stylesheet_directory_uri() . '/dist/assets/css/benevole.css', [], filemtime( get_template_directory().'/dist/assets/css/benevole.css' ) ,  'all' );
        wp_enqueue_script( '_themename-scripts-benevole', get_stylesheet_directory_uri() . '/dist/assets/js/benevole.js',[] , filemtime( get_template_directory().'/dist/assets/js/benevole.js' ) ,   true );
        // BENEVOLE
    } else if ( is_page_template('page-info-pratiques.php') ) {
        wp_enqueue_style( '_themename-stylesheet-fontawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css', [], '' ,  'all' );
        wp_enqueue_style( '_themename-stylesheet-infopratiques', get_stylesheet_directory_uri() . '/dist/assets/css/infopratiques.css', [], filemtime( get_template_directory().'/dist/assets/css/infopratiques.css' ) ,  'all' );
        wp_enqueue_script( '_themename-scripts-infopratiques', get_stylesheet_directory_uri() . '/dist/assets/js/infopratiques.js',[] , filemtime( get_template_directory().'/dist/assets/js/infopratiques.js' ) ,   true );
    } else {
        wp_enqueue_style( '_themename-stylesheet-home', get_stylesheet_directory_uri() . '/dist/assets/css/home.css', [], filemtime( get_template_directory().'/dist/assets/css/home.css' ) ,  'all' );
        wp_enqueue_style( '_themename-stylesheet-fontawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css', [], '' ,  'all' );
        wp_enqueue_script( '_themename-scripts-home', get_stylesheet_directory_uri() . '/dist/assets/js/home.js',[] , filemtime( get_template_directory().'/dist/assets/js/home.js' ) ,   true );
    }

}
add_action( 'wp_enqueue_scripts', '_themename_assets' );

/**************************************************************************
 * Remove Block editor and co
 ***********************************************************************/
function _themename_remove_wp_block_style() {

    wp_dequeue_style('wp-block-library');

    // This also removes some inline CSS variables for colors since 5.9 - global-styles-inline-css
    wp_dequeue_style('global-styles');

    // WooCommerce - you can remove the following if you don't use Woocommerce
    wp_dequeue_style('wc-block-style');
    wp_dequeue_style('wc-blocks-vendors-style');
    wp_dequeue_style('wc-blocks-style');

}
add_action( 'wp_enqueue_scripts', '_themename_remove_wp_block_style', 200 );

function _themename_remove_acf_style() {
    wp_deregister_style('acf-input');
    wp_deregister_style('acf-pro-input');
}
add_action( 'wp_enqueue_scripts', '_themename_remove_acf_style', 9999 );


/**************************************************************************
 * Dequeue classic theme stylesheet
 ***********************************************************************/
add_action( 'wp_enqueue_scripts', 'mywptheme_child_deregister_styles', 20 );
function mywptheme_child_deregister_styles() {
    wp_dequeue_style( 'classic-theme-styles' );

}

function dequeue_plugin_style() {
    // Replace 'plugin-style-handle' with the actual handle used by the plugin to enqueue the style.
    // wp_dequeue_style('plugin-style-handle');
    wp_dequeue_style( 'wpbc-client-pages' );
}
add_action('wp_enqueue_scripts', 'dequeue_plugin_style', 999); // Use a priority of 999 to make sure it's dequeued after the plugin enqueues it.



/**************************************************************************
 * Remove Global Style from Gutenberg
 ***********************************************************************/
function remove_global_styles(){
    wp_dequeue_style( 'global-styles' );
}
add_action( 'wp_enqueue_scripts', 'remove_global_styles' );
