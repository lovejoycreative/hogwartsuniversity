<?php
   function university_post_types() {

    // Location Post Type
register_post_type('location', array(
    'supports' => array('title', 'editor', 'thumbnail'),
    'rewrite' => array('slug' => 'location'),
    'has_archive' => true,
    'public' => true,
    'labels' => array(
        'name' => 'Locations',
        'add_new_item' => 'Add New Location',
        'edit_item' => 'Edit Location',
        'all_items' => 'All Locations',
        'singular_name' => 'Location'
    ),
    'menu_icon' => 'dashicons-location-alt'
));

    //Event Post Type
    register_post_type('event', array(
        'supports' => array('title', 'editor', 'excerpt', 'thumbnail', 'headway-seo'),
        'rewrite' => array('slug' => 'events'),
        'has_archive' => true,
        'public' => true,
        'labels' => array(
            'name' => 'Events',
            'add_new_item' => 'Add New Hogwarts Event',
            'edit_item' => 'Edit Event',
            'all_items' => 'All Events',
            'singular_name' => 'Event'
        ),
        'menu_icon' => 'dashicons-calendar-alt'
    ));

// Program Post Type
register_post_type('program', array(
    'supports' => array('title', 'editor', 'thumbnail'),
    'rewrite' => array('slug' => 'programs'),
    'has_archive' => true,
    'public' => true,
    'labels' => array(
        'name' => 'Programs',
        'add_new_item' => 'Add New Hogwarts Program',
        'edit_item' => 'Edit Program',
        'all_items' => 'All Programs',
        'singular_name' => 'Program'
    ),
    'menu_icon' => 'dashicons-feedback'
));

// Professor Post Type
register_post_type('professor', array(
    'supports' => array('title', 'editor', 'thumbnail'),
    'public' => true,
    'labels' => array(
        'name' => 'Professors',
        'add_new_item' => 'Add New Hogwarts Professor',
        'edit_item' => 'Edit Professor',
        'all_items' => 'All Professors',
        'singular_name' => 'Professor'
    ),
    'menu_icon' => 'dashicons-businessman'
));


}

add_action('init', 'university_post_types'); 
