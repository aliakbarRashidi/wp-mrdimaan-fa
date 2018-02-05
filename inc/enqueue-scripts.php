<?php

function dimaan_enqueue_scripts() {
    // Registering stylesheets
    wp_register_style( 'materialize_style', get_template_directory_uri() . '/css/materialize.min.css', array(), '2.0.0', 'all');
    wp_register_style( 'mrdimaan_style', get_template_directory_uri() . '/css/mrdimaan.css', array(), '2.0.0', 'all' );

    // Registering scripts
    wp_deregister_script( 'jquery' );
    wp_register_script( 'jquery', get_template_directory_uri() . '/js/jquery-3.2.1.min.js', array(), '2.0.0', true);
    wp_register_script( 'materialize_script', get_template_directory_uri() . '/js/materialize.min.js', array(), '2.0.0', true);
    wp_register_script( 'mrdimaan_script', get_template_directory_uri() . '/js/mrdimaan.js', array(), '2.0.0', true);

    // Enqueue all
    wp_enqueue_style( 'materialize_style' );
    wp_enqueue_style( 'mrdimaan_style' );
    wp_enqueue_script( 'jquery' );
    wp_enqueue_script( 'materialize_script' );
    wp_enqueue_script( 'mrdimaan_script' );
}
add_action( 'wp_enqueue_scripts', 'dimaan_enqueue_scripts');

function dimaan_enqueue_admin_scripts( $hook ) {
    // Registering script
    if ( $hook == "toplevel_page_dimaan_options") {
        wp_register_style( 'mrdimaan_admin_style', get_template_directory_uri() . '/css/mrdimaan.admin.css', array(), '2.0.0', 'all' );
        wp_enqueue_style( 'mrdimaan_admin_style' );

        wp_enqueue_media();
        
        wp_register_script( 'dimaan_admin_script', get_template_directory_uri() . '/js/mrdimaan.admin.js', array('jquery') , '2.0.0', true );
        wp_enqueue_script( 'dimaan_admin_script' );
    }
}
add_action( 'admin_enqueue_scripts', 'dimaan_enqueue_admin_scripts' );