<?php

$args = array(
    'label' => 'Blog',
    'labels' => array(
        'singular_name' => 'Blog',
        'menu_name' => 'Blog',
        'all_items' => 'Blog',
        'add_new_item' => 'Add New Blog',
        'add_new' => 'Add New Blog',
        'new_item' => 'New',
        'edit_item'=>'Edit',
        'view_item' => 'View',
        'not_found' => 'Post not found.',
        'not_found_in_trash' => 'Post not found in trash.',
        'search_items' => 'Search',
    ),
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true,
    'show_in_menu' => true,
    'query_var' => false,
    'has_archive' => true,
    'hierarchical' => false,
	'menu_position' => 5,
	'menu_icon' => 'dashicons-building',
    'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt' )
);
register_post_type('blog', $args);
$args = array(
    'label' => 'Category',
    'labels' => array(
        'name' => 'Category',
        'singular_name' => 'Category',
        'search_items' => 'Search Category',
        'popular_items' => 'Popular Category',
        'all_items' => 'All Category',
        'parent_item' => 'Parent Item',
        'edit_item' => 'Edit Item',
        'update_item' => 'Update Category',
        'add_new_item' => 'Add New Category',
        'new_item_name' => 'New Updated Category',
    ),
    'hierarchical' => true,
    'public' => true,
    'show_ui' => true,
    'rewrite' => array( 'slug' => 'blog_category' )
);
register_taxonomy('blog_category', array('blog'), $args );