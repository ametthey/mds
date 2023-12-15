<?php
// CRÉATION TAXONOMIE CATEGORIE POUR STEADICAM
function _themename_create_taxonomy_categorie_steadicam() {

	$labels = array(
		'name'                       => _x( 'categories', 'Taxonomy General Name', '_themename' ),
		'singular_name'              => _x( 'categorie', 'Taxonomy Singular Name', '_themename' ),
		'menu_name'                  => __( 'Catégorie', '_themename' ),
		'all_items'                  => __( 'Toutes les categories', '_themename' ),
		'parent_item'                => __( 'La categorie aprent', '_themename' ),
		'parent_item_colon'          => __( 'Parent Item:', '_themename' ),
		'new_item_name'              => __( 'Ajouter un nouveau nom de categorie', '_themename' ),
		'add_new_item'               => __( 'Ajouter une nouvelle categorie', '_themename' ),
		'edit_item'                  => __( 'Modifier une categorie', '_themename' ),
		'uptypologie_item'                => __( 'Mettre à jour une categorie', '_themename' ),
		'view_item'                  => __( 'Voir la categorie', '_themename' ),
		'separate_items_with_commas' => __( 'Séparer les categories par des virgules', '_themename' ),
		'add_or_remove_items'        => __( 'Ajouter ou Supprimer des categories', '_themename' ),
		'choose_from_most_used'      => __( 'Choisir parmi les plus utilisées', '_themename' ),
		'popular_items'              => __( 'categories populaires', '_themename' ),
		'search_items'               => __( 'Chercher les categories', '_themename' ),
		'not_found'                  => __( 'Not Found', '_themename' ),
		'no_terms'                   => __( 'No items', '_themename' ),
		'items_list'                 => __( 'Items list', '_themename' ),
		'items_list_navigation'      => __( 'Items list navigation', '_themename' ),
	);
	$capabilities = array(
        'manage_terms'               => 'manage_options',
        'edit_terms'                 => 'manage_options',
        'delete_terms'               => 'manage_options',
        'assign_terms'               => 'edit_posts',
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => false,
		'public'                     => false,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => false,
		'show_tagcloud'              => false,
		'capabilities'               => $capabilities,
		'show_in_rest'               => true,
        'default_term'               =>  'fiction' ,
	);
	register_taxonomy( 'categorie-steadicam', array( 'operator-steadicam' ), $args );

}
add_action( 'init', '_themename_create_taxonomy_categorie_steadicam', 0 );

// CRÉATION TAXONOMIE CATEGORIE POUR CINEMATOGRAPHER
function _themename_create_taxonomy_categorie_cinematographer() {

	$labels = array(
		'name'                       => _x( 'categories', 'Taxonomy General Name', '_themename' ),
		'singular_name'              => _x( 'categorie', 'Taxonomy Singular Name', '_themename' ),
		'menu_name'                  => __( 'Catégorie', '_themename' ),
		'all_items'                  => __( 'Toutes les categories', '_themename' ),
		'parent_item'                => __( 'La categorie aprent', '_themename' ),
		'parent_item_colon'          => __( 'Parent Item:', '_themename' ),
		'new_item_name'              => __( 'Ajouter un nouveau nom de categorie', '_themename' ),
		'add_new_item'               => __( 'Ajouter une nouvelle categorie', '_themename' ),
		'edit_item'                  => __( 'Modifier une categorie', '_themename' ),
		'uptypologie_item'                => __( 'Mettre à jour une categorie', '_themename' ),
		'view_item'                  => __( 'Voir la categorie', '_themename' ),
		'separate_items_with_commas' => __( 'Séparer les categories par des virgules', '_themename' ),
		'add_or_remove_items'        => __( 'Ajouter ou Supprimer des categories', '_themename' ),
		'choose_from_most_used'      => __( 'Choisir parmi les plus utilisées', '_themename' ),
		'popular_items'              => __( 'categories populaires', '_themename' ),
		'search_items'               => __( 'Chercher les categories', '_themename' ),
		'not_found'                  => __( 'Not Found', '_themename' ),
		'no_terms'                   => __( 'No items', '_themename' ),
		'items_list'                 => __( 'Items list', '_themename' ),
		'items_list_navigation'      => __( 'Items list navigation', '_themename' ),
	);
	$capabilities = array(
        'manage_terms'               => 'manage_options',
        'edit_terms'                 => 'manage_options',
        'delete_terms'               => 'manage_options',
        'assign_terms'               => 'edit_posts',
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => false,
		'public'                     => false,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => false,
		'show_tagcloud'              => false,
		'capabilities'               => $capabilities,
		'show_in_rest'               => true,
        'default_term'               =>  'fiction' ,
	);
	register_taxonomy( 'categorie-c', array( 'ex-dop' ), $args );

}
add_action( 'init', '_themename_create_taxonomy_categorie_cinematographer', 0 );


// Edit, Delete, Manage Terms for Admin only
function restrict_term_capabilities() {
    $role = get_role( 'administrator' );
    $role->add_cap( 'manage_terms' );
    $role->add_cap( 'edit_terms' );
    $role->add_cap( 'delete_terms' );
}
add_action( 'admin_init', 'restrict_term_capabilities' );
