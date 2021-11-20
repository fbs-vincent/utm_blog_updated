<?php 

add_action('init', 'utmblog_cpt');

function utmblog_cpt() {
    // Banner Slider
    
    $labelslider  = array (
		'name'          => __('Banner Sliders', 'textdomain'), 
		'singular_name' => __('Banner Slider', 'textdomain'),
		'add_new'       => __('Add New Banner Slider', 'textdomain'),
		'add_new_item'  => __('Add New Banner Slider', 'textdomain'),
		'edit_item'     => __('Edit Banner Slider', 'textdomain'),
		'all_items'     => __('All Banner Sliders', 'textdomain')
		);

    $argslider = array(
        
        'labels' => $labelslider,
        'hierarchical' => true,
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-slides', 
        'supports' => array('title', 'editor', 'thumbnail'),
        'rewrite' => array('slug' => 'announcements'),
        'show_in_menu'=> true,
        'capability_type'  => 'post',
        'taxonomies'=> array( 'category' ), 
    );
    register_post_type('banner', $argslider);

    // Spiritual Custom Post Type
    $labelsSpiritual  = array (
        
    'name'          => __('Spirituals', 'textdomain'), 
    'singular_name' => __('Spiritual', 'textdomain'),
    'add_new'       => __('Add Spiritual', 'textdomain'),
    'add_new_item'  => __('Add Spiritual', 'textdomain'),
    'edit_item'     => __('Edit Spiritual', 'textdomain'),
    'all_items'     => __('All Spiritual', 'textdomain')
    );

    $argsSpiritual = array( 
    'labels' => $labelsSpiritual,
    'public'  => true,
    'show_in_menu'=> true,
    'capability_type'  => 'post',
    'taxonomies'=> array( 'category'), 
    'supports' => array( 'title', 'editor', 'thumbnail'), 
    'rewrite' => array( 'slug' => 'spiritual' ), 
        );
    register_post_type( 'spirituals', $argsSpiritual );

    // Grow-Up ABC Book Custom Post Type
    $labelsGrowup  = array (
        
        'name'          => __('Grow-Up ABC Books', 'textdomain'), 
        'singular_name' => __('Grow-Up ABC Book', 'textdomain'),
        'add_new'       => __('Add Grow-Up ABC Book', 'textdomain'),
        'add_new_item'  => __('Add Grow-Up ABC Book', 'textdomain'),
        'edit_item'     => __('Edit Grow-Up ABC Book', 'textdomain'),
        'all_items'     => __('All Grow-Up ABC Books', 'textdomain')
        );

    $argsGrowup = array( 
    'labels' => $labelsGrowup,
    'public'  => true,
    'show_in_menu'=> true,
    'capability_type'  => 'post',
    'taxonomies'=> array( 'category'), 
    'supports' => array( 'title', 'editor', 'thumbnail'), 
    'rewrite' => array( 'slug' => 'grow-up-abc-books' ), 
        );
    register_post_type( 'grow-up-abc-books', $argsGrowup );

    // Social Enterprise Custom Post Type
    $labelsSocial  = array (
        
    'name'          => __('Social Enterprises', 'textdomain'), 
    'singular_name' => __('Social Enterprise', 'textdomain'),
    'add_new'       => __('Add Social Enterprise', 'textdomain'),
    'add_new_item'  => __('Add Social Enterprise', 'textdomain'),
    'edit_item'     => __('Edit Social Enterprise', 'textdomain'),
    'all_items'     => __('All Social Enterprises', 'textdomain')
    );

    $argsSocial = array( 
        'labels' => $labelsSocial,
        'public'  => true,
        'show_in_menu'=> true,
        'capability_type'  => 'post',
        'taxonomies'=> array( 'category'), 
        'supports' => array( 'title', 'editor', 'thumbnail'), 
        'rewrite' => array( 'slug' => 'social-enterprises' ), 
            );
        register_post_type( 'social-enterprises', $argsSocial );

    // Movie Custom Post Type
    $labelsMovie  = array (
        
        'name'          => __('Movies', 'textdomain'), 
        'singular_name' => __('Movie', 'textdomain'),
        'add_new'       => __('Add Movie', 'textdomain'),
        'add_new_item'  => __('Add Movie', 'textdomain'),
        'edit_item'     => __('Edit Movie', 'textdomain'),
        'all_items'     => __('All Movies', 'textdomain')
        );

    $argsMovie = array( 
        'labels' => $labelsMovie,
        'public'  => true,
        'show_in_menu'=> true,
        'capability_type'  => 'post',
        'taxonomies'=> array( 'category'), 
        'supports' => array( 'title', 'editor', 'thumbnail'), 
        'rewrite' => array( 'slug' => 'movies' ), 
            );
        register_post_type( 'movies', $argsMovie );

    // Book/Speaker/Conference Custom Post Type
    $labelsBook  = array (
        
        'name'          => __('Books', 'textdomain'), 
        'singular_name' => __('Book', 'textdomain'),
        'add_new'       => __('Add Book', 'textdomain'),
        'add_new_item'  => __('Add Book', 'textdomain'),
        'edit_item'     => __('Edit Book', 'textdomain'),
        'all_items'     => __('All Books', 'textdomain')
        );

        $argsBook = array( 
        'labels' => $labelsBook,
        'public'  => true,
        'show_in_menu'=> true,
        'capability_type'  => 'post',
        'taxonomies'=> array( 'category'), 
        'supports' => array( 'title', 'editor', 'thumbnail'), 
        'rewrite' => array( 'slug' => 'books' ), 
            );
         register_post_type( 'books', $argsBook );

    // Character Custom Post Type
    $labelsCharacter  = array (
        
        'name'          => __('Characters', 'textdomain'), 
        'singular_name' => __('Character', 'textdomain'),
        'add_new'       => __('Add Character', 'textdomain'),
        'add_new_item'  => __('Add Character', 'textdomain'),
        'edit_item'     => __('Edit Character', 'textdomain'),
        'all_items'     => __('All Characters', 'textdomain')
        );

    $argsCharacter = array( 
        'labels' => $labelsCharacter,
        'public'  => true,
        'show_in_menu'=> true,
        'capability_type'  => 'post',
        'taxonomies'=> array( 'category'), 
        'supports' => array( 'title', 'editor', 'thumbnail'), 
        'rewrite' => array( 'slug' => 'characters' ), 
            );
            register_post_type( 'characters', $argsCharacter );
}