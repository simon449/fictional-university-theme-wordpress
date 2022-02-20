<?php

add_action("after_setup_theme", "university_features");

function university_post_types() {
	//Campus post type
	register_post_type('campus', array(
		'show_in_rest' => true,
		'supports' => array('title', 'editor', 'excerpt'),
		'rewrite' => array ('slug' => 'campuses'),
		'has_archive' => true,
		'public' => true,
		'labels' => array(
		'name' => 'Campuses',
		'add_new_item' => 'Add new campus',
		'edit_item' => 'Edit campus',
		'all_items' => 'All campuses',
		'singular_name' => 'Campus'
		),
		'menu_icon' => 'dashicons-location-alt'
	));

	//Event post type
	register_post_type('event', array(
		'show_in_rest' => true,
		'supports' => array('title', 'editor', 'excerpt'),
		'rewrite' => array ('slug' => 'events'),
		'has_archive' => true,
		'public' => true,
		'labels' => array(
		'name' => 'Events',
		'add_new_item' => 'Add new event',
		'edit_item' => 'Edit event',
		'all_items' => 'All events',
		'singular_name' => 'Event'
		),
		'menu_icon' => 'dashicons-calendar-alt'
	));

	//Program post type
	register_post_type('program', array(
		'show_in_rest' => true,
		'supports' => array('title'),
		'rewrite' => array ('slug' => 'programs'),
		'has_archive' => true,
		'public' => true,
		'labels' => array(
		'name' => 'Programs',
		'add_new_item' => 'Add new program',
		'edit_item' => 'Edit event',
		'all_items' => 'All programs',
		'singular_name' => 'Program'
		),
		'menu_icon' => 'dashicons-awards'
	));

	//Professor post type
	register_post_type('professor', array(
		'show_in_rest' => true,
		'supports' => array('title', 'editor', 'thumbnail'),
		'public' => true,
		'labels' => array(
		'name' => 'Professors',
		'add_new_item' => 'Add new professor',
		'edit_item' => 'Edit event',
		'all_items' => 'All professor',
		'singular_name' => 'Professor'
		),
		'menu_icon' => 'dashicons-welcome-learn-more'
	));

	//Note post type
	register_post_type('note', array(
		'show_in_rest' => true,
		'supports' => array('title'),
		'public' => false,
		'show_ui' => true,
		'labels' => array(
		'name' => 'Notes',
		'add_new_item' => 'Add new note',
		'edit_item' => 'Edit event',
		'all_items' => 'All note',
		'singular_name' => 'note'
		),
		'menu_icon' => 'dashicons-welcome-write-blog'
	));

	//Like post type
	register_post_type('like', array(
		'supports' => array('title', 'editor'),
		'public' => false,
		'show_ui' => true,
		'labels' => array(
		'name' => 'Likes',
		'add_new_item' => 'Add new like',
		'edit_item' => 'Edit like',
		'all_items' => 'All like',
		'singular_name' => 'like'
		),
		'menu_icon' => 'dashicons-heart'
	));


}

add_action('init', 'university_post_types');

?>