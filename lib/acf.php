<?php

/***********************************************************************
 * Integrate ACF directy in Theme
 *  https://support.advancedcustomfields.com/forums/topic/include-acf-to-my-plugin/
 ***********************************************************************/
if( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

if ( !class_exists('acf') ) {
    add_filter('acf/settings/path', 'cysp_acf_settings_path');
    function cysp_acf_settings_path( $path ) {
        $path = get_stylesheet_directory_uri() . '/includes/acf/' ;
        return $path;
    }
    add_filter('acf/settings/dir', 'cysp_acf_settings_dir');
    function cysp_acf_settings_dir( $path ) {
        $dir = get_stylesheet_directory_uri() . '/includes/acf/' ;
        return $dir;
    }
    add_filter('acf/settings/show_admin', '__return_true');
    // include_once( get_stylesheet_directory() . '/includes/acf/acf.php' );
    get_template_part( 'includes/acf/acf' );
    add_filter('acf/settings/save_json', 'cysp_acf_json_save_point');
    function cysp_acf_json_save_point( $path ) {
        $path = get_stylesheet_directory() . '/acf-json' ;
        return $path;
    }
    add_filter('acf/settings/load_json', 'cysp_acf_json_load_point');
    add_filter( 'site_transient_update_plugins', 'cysp_stop_acf_update_notifications', 11 );
    function cysp_stop_acf_update_notifications( $value ) {
        unset( $value->response[ get_stylesheet_directory_uri() . '/includes/acf/acf.php' ] );
        return $value;
    }
} else {
    add_filter('acf/settings/load_json', 'cysp_acf_json_load_point');
}

function cysp_acf_json_load_point( $paths ) {
    $paths[] = get_stylesheet_directory_uri() . 'acf-json-load';
    return $paths;
}

/***********************************************************************
 * Options Page
 ***********************************************************************/
if ( function_exists( 'acf_add_options_page' ) ) {

    acf_add_options_page( array(
        'page_title'	=> 'Page d\'accueil',
        'menu_title'	=> 'Page d\'accueil',
        'menu_slug' 	=> 'acf-page-home',
        'capability'	=> 'edit_posts',
        'icon_url'      => 'dashicons-admin-home',
        'redirect'		=> false,
        'position'      => 'menu-top', // Set this to 'menu-top' for top position
    ));

    acf_add_options_page( array(
        'page_title'	=> 'Page About',
        'menu_title'	=> 'Page About',
        'menu_slug' 	=> 'acf-page-about',
        'capability'	=> 'edit_posts',
        'icon_url'      => 'dashicons-admin-users',
        'redirect'		=> false,
    ));

    acf_add_options_page( array(
        'page_title'	=> 'Configuration Ex Jr DoP',
        'menu_title'	=> 'Configuration Ex Jr DoP',
        'menu_slug' 	=> 'acf-options-ex-dop',
        'capability'	=> 'edit_posts',
        'icon_url'      => 'dashicons-video-alt',
        'redirect'		=> false,
    ));

    acf_add_options_page( array(
        'page_title'	=> 'Configuration Operator and Steadicam',
        'menu_title'	=> 'Configuration Operator and Steadicam',
        'menu_slug' 	=> 'acf-options-operator-stedicam',
        'capability'	=> 'edit_posts',
        'icon_url'      => 'dashicons-video-alt2',
        'redirect'		=> false,
    ));

    acf_add_options_page( array(
        'page_title'	=> 'Configuration Photo exploration',
        'menu_title'	=> 'Configuration Photo exploration',
        'menu_slug' 	=> 'acf-options-photo-exploration',
        'capability'	=> 'edit_posts',
        'icon_url'      => 'dashicons-camera-alt',
        'redirect'		=> false,
    ));

    acf_add_options_page( array(
        'page_title'	=> 'Réseaux Sociaux',
        'menu_title'	=> 'Réseaux Sociaux',
        'menu_slug' 	=> 'acf-options-socials',
        'capability'	=> 'edit_posts',
        'icon_url'      => 'dashicons-networking',
        'redirect'		=> false,
    ));

    acf_add_options_page( array(
        'page_title'	=> 'Mise en forme',
        'menu_title'	=> 'Mise en forme',
        'menu_slug' 	=> 'acf-options-design',
        'capability'	=> 'edit_posts',
        'icon_url'      => 'dashicons-columns',
        'redirect'		=> false,
    ));


    acf_add_options_page( array(
        'page_title'	=> 'Dashboard',
        'menu_title'	=> 'Dashboard',
        'menu_slug' 	=> 'acf-dashboard',
        'capability'    => 'manage_options',
        'redirect'		=> false,
    ));

}
