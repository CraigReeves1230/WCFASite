<?php

add_action('init', function(){

    // Results post type
    register_post_type('result', [
        'public' => true, 'labels' => ['name' => 'Results', 'add_new_item' => 'Add New Result', 'edit_item' => 'Edit 
        Result', 'all_items' => 'All Results', 'singular_name' => 'Result'], 'menu_icon' => 'dashicons-megaphone',
        'has_archive' => true,
        'rewrite' => ['slug' => 'results'], 'supports' => ['title', 'editor', 'excerpt']
    ]);

    // Features post type
    register_post_type('feature', [
        'public' => true, 'labels' => ['name' => 'Features', 'add_new_item' => 'Add New Feature', 'edit_item' => 'Edit 
        Feature', 'all_items' => 'All Features', 'singular_name' => 'Feature'], 'menu_icon' => 'dashicons-lightbulb',
        'has_archive' => true,
        'rewrite' => ['slug' => 'features'], 'supports' => ['title', 'editor', 'excerpt']
    ]);

    // Championship post type
    register_post_type('championship', [
        'public' => true, 'labels' => ['name' => 'Championships', 'add_new_item' => 'Add New Championship', 'edit_item' => 'Edit 
        Championship', 'all_items' => 'All Championships', 'singular_name' => 'Championship'], 'menu_icon' => 'dashicons-awards',
        'has_archive' => true,
        'rewrite' => ['slug' => 'championships'], 'supports' => ['title', 'editor']
    ]);

    // Superstar post type
    register_post_type('superstar', [
        'public' => true, 'labels' => ['name' => 'Superstars', 'add_new_item' => 'Add New Superstar', 'edit_item' => 'Edit 
        Superstar', 'all_items' => 'All Superstars', 'singular_name' => 'Superstar'], 'menu_icon' => 'dashicons-universal-access',
        'has_archive' => true,
        'rewrite' => ['slug' => 'superstars'], 'supports' => ['title']
    ]);

    // YouTube post type
    register_post_type('youtube', [
        'public' => true, 'labels' => ['name' => 'YouTube Videos', 'add_new_item' => 'Add New YouTube Video', 'edit_item' =>
            'Edit YouTube Video', 'all_items' => 'All YouTube Videos', 'singular_name' => 'YouTube Video'], 'menu_icon' => 'dashicons-video-alt3',
        'has_archive' => true, 'supports' => ['title']
    ]);

});