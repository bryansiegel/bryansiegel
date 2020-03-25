<?php 

//featured Images in wp-admin
add_theme_support( 'post-thumbnails' );

//add tags/categories to pages
function add_categories_to_pages() {
register_taxonomy_for_object_type( 'category', 'page' );
}
add_action( 'init', 'add_categories_to_pages' );

function add_tags_to_pages() {
register_taxonomy_for_object_type( 'post_tag', 'page' );
}
add_action( 'init', 'add_tags_to_page');