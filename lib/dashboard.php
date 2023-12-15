<?php
// Remove all default dashboard widgets
function remove_dashboard_widgets() {
    global $wp_meta_boxes;

    // Remove the "At a Glance" widget
    unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_right_now']);

    // Remove the "Activity" widget
    unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_activity']);

    // Remove the "Quick Draft" widget
    unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_quick_press']);

    // Remove the "WordPress News" widget
    unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_primary']);

    // Remove the "Welcome" widget
    remove_action('welcome_panel', 'wp_welcome_panel');
}
add_action('wp_dashboard_setup', 'remove_dashboard_widgets');
/**
 * Add a new dashboard widget.
 */
function wpdocs_add_dashboard_widgets() {
    wp_add_dashboard_widget( 'dashboard_welcome_message', 'Welcome', 'dashboard_widget_function' );
}
add_action( 'wp_dashboard_setup', 'wpdocs_add_dashboard_widgets' );

/**
 * Output the contents of the dashboard widget
 */
function dashboard_widget_function( $post, $callback_args ) {

    get_template_part( 'template-parts/dashboard' );
?>
<?php
?>


<?php
}
