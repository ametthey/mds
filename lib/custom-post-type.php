<?php
#################################################
#                EX DOP                #
#################################################
function _themename_creation_cpt_cinematographer() {

    $labels = array(
        'name' => _x( 'Ex Jr DoP', 'Post Type General Name', '_themename' ),
        'singular_name' => _x( 'Ex Jr DoP', 'Post Type Singular Name', '_themename' ),
        'menu_name' => _x( 'Ex Jr DoP', 'Admin Menu text', '_themename' ),
        'name_admin_bar' => _x( 'Ex Jr DoP', 'Add New on Toolbar', '_themename' ),
        'archives' => __( 'Archives Ex Jr DoP', '_themename' ),
        'attributes' => __( 'Attributs Ex Jr DoP', '_themename' ),
        'parent_item_colon' => __( 'Parents Ex Jr DoP:', '_themename' ),
        'all_items' => __( 'Tous les Ex Jr DoP', '_themename' ),
        'add_new_item' => __( 'Ajouter un nouvel Ex Jr DoP', '_themename' ),
        'add_new' => __( 'Ajouter', '_themename' ),
        'new_item' => __( 'Nouvel Ex Jr DoP', '_themename' ),
        'edit_item' => __( 'Modifier la Ex Jr DoP', '_themename' ),
        'update_item' => __( 'Mettre à jour l\'Ex Jr DoP', '_themename' ),
        'view_item' => __( 'Voir le projet Ex Jr DoP', '_themename' ),
        'view_items' => __( 'Voir les Ex Jr DoP', '_themename' ),
        'search_items' => __( 'Rechercher dans les Ex Jr DoP', '_themename' ),
        'not_found' => __( 'Aucune Ex Jr DoP trouvé.', '_themename' ),
        'not_found_in_trash' => __( 'Aucun Ex Jr DoP trouvé dans la corbeille.', '_themename' ),
        'featured_image' => __( 'Image mise en avant', '_themename' ),
        'set_featured_image' => __( 'Définir l’image mise en avant', '_themename' ),
        'remove_featured_image' => __( 'Supprimer l’image mise en avant', '_themename' ),
        'use_featured_image' => __( 'Utiliser comme image mise en avant', '_themename' ),
        'insert_into_item' => __( 'Insérer dans Ex Jr DoP', '_themename' ),
        'uploaded_to_this_item' => __( 'Téléversé sur cet Ex Jr DoP', '_themename' ),
        'items_list' => __( 'Liste Ex Jr DoP', '_themename' ),
        'items_list_navigation' => __( 'Navigation de la liste Ex Jr DoP', '_themename' ),
        'filter_items_list' => __( 'Filtrer la liste Ex Jr DoP', '_themename' ),
    );
    $args = array(
        'label' => __( 'Ex Jr DoP', '_themename' ),
        'description' => __( 'Les Ex Jr DoP', '_themename' ),
        'labels' => $labels,
        'menu_icon' => 'dashicons-video-alt',
        'supports' => array('title'),
        'taxonomies' => array('categorie'),
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 5,
        'show_in_admin_bar' => true,
        'show_in_nav_menus' => true,
        'can_export' => true,
        'has_archive' => true,
        'hierarchical' => false,
        'exclude_from_search' => false,
        'show_in_rest' => false,
        'publicly_queryable' => true,
        'capability_type' => 'page',
    );
    register_post_type( 'ex-dop', $args );

}
add_action( 'init', '_themename_creation_cpt_cinematographer', 0 );

#################################################
#                operator-steadicam                #
#################################################
function _themename_creation_cpt_steadicam() {

    $labels = array(
        'name' => _x( 'Operator & Steadicam', 'Post Type General Name', '_themename' ),
        'singular_name' => _x( 'Operator & Steadicam', 'Post Type Singular Name', '_themename' ),
        'menu_name' => _x( 'Operator & Steadicam', 'Admin Menu text', '_themename' ),
        'name_admin_bar' => _x( 'Operator & Steadicam', 'Add New on Toolbar', '_themename' ),
        'archives' => __( 'Archives Operator & Steadicam', '_themename' ),
        'attributes' => __( 'Attributs Operator & Steadicam', '_themename' ),
        'parent_item_colon' => __( 'Parents Operator & Steadicam:', '_themename' ),
        'all_items' => __( 'Tous les steadicams', '_themename' ),
        'add_new_item' => __( 'Ajouter un nouvel Operator & Steadicam', '_themename' ),
        'add_new' => __( 'Ajouter', '_themename' ),
        'new_item' => __( 'Nouvel Operator & Steadicam', '_themename' ),
        'edit_item' => __( 'Modifier la Operator & Steadicam', '_themename' ),
        'update_item' => __( 'Mettre à jour l\'Operator & Steadicam', '_themename' ),
        'view_item' => __( 'Voir le projet Operator & Steadicam', '_themename' ),
        'view_items' => __( 'Voir les steadicams', '_themename' ),
        'search_items' => __( 'Rechercher dans les steadicams', '_themename' ),
        'not_found' => __( 'Aucune Operator & Steadicam trouvé.', '_themename' ),
        'not_found_in_trash' => __( 'Aucun Operator & Steadicam trouvé dans la corbeille.', '_themename' ),
        'featured_image' => __( 'Image mise en avant', '_themename' ),
        'set_featured_image' => __( 'Définir l’image mise en avant', '_themename' ),
        'remove_featured_image' => __( 'Supprimer l’image mise en avant', '_themename' ),
        'use_featured_image' => __( 'Utiliser comme image mise en avant', '_themename' ),
        'insert_into_item' => __( 'Insérer dans Operator & Steadicam', '_themename' ),
        'uploaded_to_this_item' => __( 'Téléversé sur cet Operator & Steadicam', '_themename' ),
        'items_list' => __( 'Liste steadicams', '_themename' ),
        'items_list_navigation' => __( 'Navigation de la liste steadicams', '_themename' ),
        'filter_items_list' => __( 'Filtrer la liste steadicams', '_themename' ),
    );
    $args = array(
        'label' => __( 'operator-steadicam', '_themename' ),
        'description' => __( 'Les operator-steadicam', '_themename' ),
        'labels' => $labels,
        'menu_icon' => 'dashicons-video-alt2',
        'supports' => array('title'),
        'taxonomies' => array( 'categorie' ),
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 5,
        'show_in_admin_bar' => true,
        'show_in_nav_menus' => true,
        'can_export' => true,
        'has_archive' => true,
        'hierarchical' => false,
        'exclude_from_search' => false,
        'show_in_rest' => false,
        'publicly_queryable' => true,
        'capability_type' => 'page',
    );
    register_post_type( 'operator-steadicam', $args );

}
add_action( 'init', '_themename_creation_cpt_steadicam', 0 );

#################################################
#                photographer                #
#################################################
function _themename_creation_cpt_photographer() {

    $labels = array(
        'name' => _x( 'Photo Explorations', 'Post Type General Name', '_themename' ),
        'singular_name' => _x( 'Photo Exploration', 'Post Type Singular Name', '_themename' ),
        'menu_name' => _x( 'Photo Exploration', 'Admin Menu text', '_themename' ),
        'name_admin_bar' => _x( 'Photo Exploration', 'Add New on Toolbar', '_themename' ),
        'archives' => __( 'Archives Photo Exploration', '_themename' ),
        'attributes' => __( 'Attributs Photo Exploration', '_themename' ),
        'parent_item_colon' => __( 'Parents Photo Exploration:', '_themename' ),
        'all_items' => __( 'Tous les Photo Explorations', '_themename' ),
        'add_new_item' => __( 'Ajouter un nouvel Photo Exploration', '_themename' ),
        'add_new' => __( 'Ajouter', '_themename' ),
        'new_item' => __( 'Nouvel Photo Exploration', '_themename' ),
        'edit_item' => __( 'Modifier la Photo Exploration', '_themename' ),
        'update_item' => __( 'Mettre à jour l\'Photo Exploration', '_themename' ),
        'view_item' => __( 'Voir le projet Photo Exploration', '_themename' ),
        'view_items' => __( 'Voir les Photo Explorations', '_themename' ),
        'search_items' => __( 'Rechercher dans les Photo Explorations', '_themename' ),
        'not_found' => __( 'Aucune Photo Exploration trouvé.', '_themename' ),
        'not_found_in_trash' => __( 'Aucun Photo Exploration trouvé dans la corbeille.', '_themename' ),
        'featured_image' => __( 'Image mise en avant', '_themename' ),
        'set_featured_image' => __( 'Définir l’image mise en avant', '_themename' ),
        'remove_featured_image' => __( 'Supprimer l’image mise en avant', '_themename' ),
        'use_featured_image' => __( 'Utiliser comme image mise en avant', '_themename' ),
        'insert_into_item' => __( 'Insérer dans Photo Exploration', '_themename' ),
        'uploaded_to_this_item' => __( 'Téléversé sur cet Photo Exploration', '_themename' ),
        'items_list' => __( 'Liste Photo Explorations', '_themename' ),
        'items_list_navigation' => __( 'Navigation de la liste Photo Explorations', '_themename' ),
        'filter_items_list' => __( 'Filtrer la liste Photo Explorations', '_themename' ),
    );
    $args = array(
        'label' => __( 'photo-exploration', '_themename' ),
        'description' => __( 'Les photo-exploration', '_themename' ),
        'labels' => $labels,
        'menu_icon' => 'dashicons-camera-alt',
        'supports' => array('title'),
        'taxonomies' => array( 'categorie-p' ),
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 5,
        'show_in_admin_bar' => true,
        'show_in_nav_menus' => true,
        'can_export' => true,
        'has_archive' => true,
        'hierarchical' => false,
        'exclude_from_search' => false,
        'show_in_rest' => false,
        'publicly_queryable' => true,
        'capability_type' => 'page',
    );
    register_post_type( 'photo-exploration', $args ); }
add_action( 'init', '_themename_creation_cpt_photographer', 0 );
