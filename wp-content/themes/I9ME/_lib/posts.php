<?php
/**
* Custom Post Types
* Desenvolvedor: Bruno Lima
* Email: brunolimadevelopment@gmail.com
*/


//=========================================================================================
// POST TYPE SLIDES
//=========================================================================================

function post_type_slide_register() {
    $labels = array(
        'name' => 'Slides',
        'singular_name' => 'Slide',
        'menu_name' => 'Slides',
        'add_new' => _x('Adicionar Slide', 'item'),
        'add_new_item' => __('Adicionar Novo Slide'),
        'edit_item' => __('Editar Slide'),
        'new_item' => __('Novo Slide')
    );

    $args = array(
        'labels' => $labels,
        'public' => false,
        'publicly_queryable' => false,
        'show_ui' => true,
        'show_in_menu' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'slides'),
        'capability_type' => 'post',
        'has_archive' => true,
        'hierarchical' => true,
        'menu_position' => 5,
        'menu_icon' => 'dashicons-images-alt2',
        'supports' => array('title', 'thumbnail')
    );
    register_post_type('slides', $args);
}
add_action('init', 'post_type_slide_register');

// //=========================================================================================
// // POST TYPE HEADER
// //=========================================================================================

// function post_type_header_register() {
//     $labels = array(
//         'name' => 'Capas',
//         'singular_name' => 'Capa',
//         'menu_name' => 'Capas',
//         'add_new' => _x('Adicionar Capa', 'item'),
//         'add_new_item' => __('Adicionar Nova Capa'),
//         'edit_item' => __('Editar Capa'),
//         'new_item' => __('Nova Capa')
//     );

//     $args = array(
//         'labels' => $labels,
//         'public' => false,
//         'publicly_queryable' => false,
//         'show_ui' => true,
//         'show_in_menu' => true,
//         'query_var' => true,
//         'rewrite' => array('slug' => 'header'),
//         'capability_type' => 'post',
//         'has_archive' => false,
//         'hierarchical' => true,
//         'menu_position' => 5,
//         'menu_icon' => 'dashicons-images-alt',
//         'supports' => array('title', 'editor', 'thumbnail')
//     );
//     register_post_type('header', $args);
// }
// add_action('init', 'post_type_header_register');