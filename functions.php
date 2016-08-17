<?php

add_action( 'wp_enqueue_scripts', 'my_enqueue_assets' );

function my_enqueue_assets() {

    wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );

}

// add editor the privilege to edit theme

// get the the role object
$role_object = get_role( 'editor' );

// add $cap capability to this role object
$role_object->add_cap( 'edit_theme_options' );

//------------------------------------------------------//
//-----------------Give Editors Gravity Forms Access - JSS
//------------------------------------------------------//
//run remove_cap before deleting this code to remove access

$role = get_role( 'editor' );

$role->add_cap( 'gravityforms_edit_forms' );
$role->add_cap( 'gravityforms_delete_forms' );
$role->add_cap( 'gravityforms_create_form' );
$role->add_cap( 'gravityforms_view_entries' );
$role->add_cap( 'gravityforms_edit_entries' );
$role->add_cap( 'gravityforms_delete_entries' );
$role->add_cap( 'gravityforms_view_settings' );
$role->add_cap( 'gravityforms_edit_settings' );
$role->add_cap( 'gravityforms_export_entries' );
$role->add_cap( 'gravityforms_view_entry_notes' );
$role->add_cap( 'gravityforms_edit_entry_notes' );
