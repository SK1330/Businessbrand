<?php

function businessbrand_setup() {
    // Enable support for navigation menus
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'businessbrand'),
         'footer' => __('Footer Menu', 'businessbrand'),
    ));
}
add_action('after_setup_theme', 'businessbrand_setup');

function register_my_menus() {
    register_nav_menus(
        array(
            'homepage_menu' => __( 'Homepage Menu' )
        )
    );
}
add_action( 'init', 'register_my_menus' );


// Fucntion to get excerpt trimmed
function get_trimmed_excerpt($char_limit) {
    $excerpt = get_the_excerpt();
    if (strlen($excerpt) > $char_limit) {
        $excerpt = substr($excerpt, 0, $char_limit) . '...';
    }
    return $excerpt;
}


// Register Custom Post Type
function custom_our_work_post_type() {

    $labels = array(
        'name'                  => _x( 'Our Work', 'Post Type General Name', 'text_domain' ),
        'singular_name'         => _x( 'Our Work', 'Post Type Singular Name', 'text_domain' ),
        'menu_name'             => __( 'Our Work', 'text_domain' ),
        'name_admin_bar'        => __( 'Our Work', 'text_domain' ),
        'archives'              => __( 'Our Work Archives', 'text_domain' ),
        'attributes'            => __( 'Our Work Attributes', 'text_domain' ),
        'parent_item_colon'     => __( 'Parent Our Work:', 'text_domain' ),
        'all_items'             => __( 'All Our Work', 'text_domain' ),
        'add_new_item'          => __( 'Add New Our Work', 'text_domain' ),
        'add_new'               => __( 'Add New', 'text_domain' ),
        'new_item'              => __( 'New Our Work', 'text_domain' ),
        'edit_item'             => __( 'Edit Our Work', 'text_domain' ),
        'update_item'           => __( 'Update Our Work', 'text_domain' ),
        'view_item'             => __( 'View Our Work', 'text_domain' ),
        'view_items'            => __( 'View Our Work', 'text_domain' ),
        'search_items'          => __( 'Search Our Work', 'text_domain' ),
        'not_found'             => __( 'Not found', 'text_domain' ),
        'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
        'featured_image'        => __( 'Featured Image', 'text_domain' ),
        'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
        'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
        'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
        'insert_into_item'      => __( 'Insert into Our Work', 'text_domain' ),
        'uploaded_to_this_item' => __( 'Uploaded to this Our Work', 'text_domain' ),
        'items_list'            => __( 'Our Work list', 'text_domain' ),
        'items_list_navigation' => __( 'Our Work list navigation', 'text_domain' ),
        'filter_items_list'     => __( 'Filter Our Work list', 'text_domain' ),
    );
    $args = array(
        'label'                 => __( 'Our Work', 'text_domain' ),
        'description'           => __( 'Post Type Description', 'text_domain' ),
        'labels'                => $labels,
        'supports'              => array( 'title', 'editor', 'thumbnail', 'excerpt', 'custom-fields', 'page-attributes', 'comments', 'revisions', 'author' ),
        'taxonomies'            => array( 'our_work_category', 'our_work_tag' ), // Separate taxonomies for categories and tags
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'post',
        'show_in_rest'          => true,
    );
    register_post_type( 'our_work', $args );

}
add_action( 'init', 'custom_our_work_post_type', 0 );


// Register Custom Taxonomies
function custom_our_work_taxonomies() {

    // Add new taxonomy, hierarchical (like categories)
    $labels = array(
        'name'              => _x( 'Work Categories', 'taxonomy general name', 'text_domain' ),
        'singular_name'     => _x( 'Work Category', 'taxonomy singular name', 'text_domain' ),
        'search_items'      => __( 'Search Work Categories', 'text_domain' ),
        'all_items'         => __( 'All Work Categories', 'text_domain' ),
        'parent_item'       => __( 'Parent Work Category', 'text_domain' ),
        'parent_item_colon' => __( 'Parent Work Category:', 'text_domain' ),
        'edit_item'         => __( 'Edit Work Category', 'text_domain' ),
        'update_item'       => __( 'Update Work Category', 'text_domain' ),
        'add_new_item'      => __( 'Add New Work Category', 'text_domain' ),
        'new_item_name'     => __( 'New Work Category Name', 'text_domain' ),
        'menu_name'         => __( 'Work Categories', 'text_domain' ),
    );
    $args = array(
        'hierarchical'      => true,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array( 'slug' => 'our-work-category' ),
    );
    register_taxonomy( 'our_work_category', array( 'our_work' ), $args );

    // Add new taxonomy, NOT hierarchical (like tags)
    $labels = array(
        'name'                       => _x( 'Work Tags', 'taxonomy general name', 'text_domain' ),
        'singular_name'              => _x( 'Work Tag', 'taxonomy singular name', 'text_domain' ),
        'search_items'               => __( 'Search Work Tags', 'text_domain' ),
        'popular_items'              => __( 'Popular Work Tags', 'text_domain' ),
        'all_items'                  => __( 'All Work Tags', 'text_domain' ),
        'parent_item'                => null,
        'parent_item_colon'          => null,
        'edit_item'                  => __( 'Edit Work Tag', 'text_domain' ),
        'update_item'                => __( 'Update Work Tag', 'text_domain' ),
        'add_new_item'               => __( 'Add New Work Tag', 'text_domain' ),
        'new_item_name'              => __( 'New Work Tag Name', 'text_domain' ),
        'separate_items_with_commas' => __( 'Separate work tags with commas', 'text_domain' ),
        'add_or_remove_items'        => __( 'Add or remove work tags', 'text_domain' ),
        'choose_from_most_used'      => __( 'Choose from the most used work tags', 'text_domain' ),
        'not_found'                  => __( 'No work tags found.', 'text_domain' ),
        'menu_name'                  => __( 'Work Tags', 'text_domain' ),
    );
    $args = array(
        'hierarchical'          => false,
        'labels'                => $labels,
        'show_ui'               => true,
        'show_admin_column'     => true,
        'update_count_callback' => '_update_post_term_count',
        'query_var'             => true,
        'rewrite'               => array( 'slug' => 'our-work-tag' ),
    );
    register_taxonomy( 'our_work_tag', 'our_work', $args );

}
add_action( 'init', 'custom_our_work_taxonomies', 0 );

// To show the Featured image in post -type
add_theme_support( 'post-thumbnails' ); 
// Add support for the gallery
add_post_type_support( 'our_work', 'gallery' );



// Register Custom Post Type

function custom_case_study_post_type() {

    $labels = array(
        'name'                  => _x( 'Case Studies', 'Post Type General Name', 'text_domain' ),
        'singular_name'         => _x( 'Case Study', 'Post Type Singular Name', 'text_domain' ),
        'menu_name'             => __( 'Case Studies', 'text_domain' ),
        'name_admin_bar'        => __( 'Case Study', 'text_domain' ),
        'archives'              => __( 'Case Study Archives', 'text_domain' ),
        'attributes'            => __( 'Case Study Attributes', 'text_domain' ),
        'parent_item_colon'     => __( 'Parent Case Study:', 'text_domain' ),
        'all_items'             => __( 'All Case Studies', 'text_domain' ),
        'add_new_item'          => __( 'Add New Case Study', 'text_domain' ),
        'add_new'               => __( 'Add New', 'text_domain' ),
        'new_item'              => __( 'New Case Study', 'text_domain' ),
        'edit_item'             => __( 'Edit Case Study', 'text_domain' ),
        'update_item'           => __( 'Update Case Study', 'text_domain' ),
        'view_item'             => __( 'View Case Study', 'text_domain' ),
        'view_items'            => __( 'View Case Studies', 'text_domain' ),
        'search_items'          => __( 'Search Case Study', 'text_domain' ),
        'not_found'             => __( 'Not found', 'text_domain' ),
        'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
        'featured_image'        => __( 'Featured Image', 'text_domain' ),
        'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
        'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
        'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
        'insert_into_item'      => __( 'Insert into Case Study', 'text_domain' ),
        'uploaded_to_this_item' => __( 'Uploaded to this Case Study', 'text_domain' ),
        'items_list'            => __( 'Case Studies list', 'text_domain' ),
        'items_list_navigation' => __( 'Case Studies list navigation', 'text_domain' ),
        'filter_items_list'     => __( 'Filter Case Studies list', 'text_domain' ),
    );
    $args = array(
        'label'                 => __( 'Case Study', 'text_domain' ),
        'description'           => __( 'Post Type Description', 'text_domain' ),
        'labels'                => $labels,
        'supports'              => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'trackbacks', 'custom-fields', 'comments', 'revisions', 'post-formats' ),
        'taxonomies'            => array( 'case_study_category', 'case_study_tag' ),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'post',
        'show_in_rest'          => true,
    );
    register_post_type( 'case_study', $args );

}
add_action( 'init', 'custom_case_study_post_type', 0 );


// Register Custom Taxonomies
function custom_case_study_taxonomy() {

    // Custom taxonomy like Categories
    $labels = array(
        'name'                       => _x( 'Case Study Categories', 'taxonomy general name', 'text_domain' ),
        'singular_name'              => _x( 'Case Study Category', 'taxonomy singular name', 'text_domain' ),
        'search_items'               => __( 'Search Case Study Categories', 'text_domain' ),
        'popular_items'              => __( 'Popular Case Study Categories', 'text_domain' ),
        'all_items'                  => __( 'All Case Study Categories', 'text_domain' ),
        'parent_item'                => null,
        'parent_item_colon'          => null,
        'edit_item'                  => __( 'Edit Case Study Category', 'text_domain' ),
        'update_item'                => __( 'Update Case Study Category', 'text_domain' ),
        'add_new_item'               => __( 'Add New Case Study Category', 'text_domain' ),
        'new_item_name'              => __( 'New Case Study Category Name', 'text_domain' ),
        'separate_items_with_commas' => __( 'Separate case study categories with commas', 'text_domain' ),
        'add_or_remove_items'        => __( 'Add or remove case study categories', 'text_domain' ),
        'choose_from_most_used'      => __( 'Choose from the most used case study categories', 'text_domain' ),
        'not_found'                  => __( 'No case study categories found.', 'text_domain' ),
        'menu_name'                  => __( 'Categories', 'text_domain' ),
    );
    $args = array(
        'labels'                     => $labels,
        'hierarchical'               => true,
        'public'                     => true,
        'show_ui'                    => true,
        'show_admin_column'          => true,
        'show_in_nav_menus'          => true,
        'show_tagcloud'              => true,
        'show_in_rest'               => true,
    );
    register_taxonomy( 'case_study_category', array( 'case_study' ), $args );

}
add_action( 'init', 'custom_case_study_taxonomy', 0 );

// Add new taxonomy, NOT hierarchical (like tags)
function custom_case_study_tags_taxonomy() {

    $labels = array(
        'name'                       => _x( 'Case Study Tags', 'taxonomy general name', 'text_domain' ),
        'singular_name'              => _x( 'Case Study Tag', 'taxonomy singular name', 'text_domain' ),
        'search_items'               => __( 'Search Case Study Tags', 'text_domain' ),
        'popular_items'              => __( 'Popular Case Study Tags', 'text_domain' ),
        'all_items'                  => __( 'All Case Study Tags', 'text_domain' ),
        'parent_item'                => null,
        'parent_item_colon'          => null,
        'edit_item'                  => __( 'Edit Case Study Tag', 'text_domain' ),
        'update_item'                => __( 'Update Case Study Tag', 'text_domain' ),
        'add_new_item'               => __( 'Add New Case Study Tag', 'text_domain' ),
        'new_item_name'              => __( 'New Case Study Tag Name', 'text_domain' ),
        'separate_items_with_commas' => __( 'Separate case study tags with commas', 'text_domain' ),
        'add_or_remove_items'        => __( 'Add or remove case study tags', 'text_domain' ),
        'choose_from_most_used'      => __( 'Choose from the most used case study tags', 'text_domain' ),
        'not_found'                  => __( 'No case study tags found.', 'text_domain' ),
        'menu_name'                  => __( 'Tags', 'text_domain' ),
    );
    $args = array(
        'labels'                     => $labels,
        'hierarchical'               => false,
        'public'                     => true,
        'show_ui'                    => true,
        'show_admin_column'          => true,
        'show_in_nav_menus'          => true,
        'show_tagcloud'              => true,
        'show_in_rest'               => true,
    );
    register_taxonomy( 'case_study_tag', array( 'case_study' ), $args );

}
add_action( 'init', 'custom_case_study_tags_taxonomy', 0 );



?>
