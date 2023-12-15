<?php
/**
 * Remove the content editor from ALL pages
 */
function remove_content_editor() {
    remove_post_type_support('page', 'editor');
}
add_action('admin_head', 'remove_content_editor');
