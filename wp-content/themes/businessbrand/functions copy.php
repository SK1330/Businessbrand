<?php

function businessbrand_setup() {
    // Enable support for navigation menus
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'businessbrand'),
         'footer' => __('Footer Menu', 'businessbrand'),
    ));
}
add_action('after_setup_theme', 'businessbrand_setup');


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

// function enqueue_masonry_script() {
//     wp_enqueue_script('masonry', 'https://cdnjs.cloudflare.com/ajax/libs/masonry/4.2.2/masonry.pkgd.min.js', array('jquery'), '4.2.2', true);
// }
// add_action('wp_enqueue_scripts', 'enqueue_masonry_script');


// Custom gallery shortcode
// function custom_gallery_shortcode($output, $attr) {
//     global $post;

//     if (isset($attr['orderby'])) {
//         $attr['orderby'] = sanitize_sql_orderby($attr['orderby']);
//         if (!$attr['orderby'])
//             unset($attr['orderby']);
//     }

//     extract(shortcode_atts(array(
//         'order' => 'ASC',
//         'orderby' => 'menu_order ID',
//         'id' => $post ? $post->ID : 0,
//         'itemtag' => 'div',
//         'icontag' => 'div',
//         'captiontag' => 'div',
//         'columns' => 3,
//         'size' => 'thumbnail',
//         'include' => '',
//         'exclude' => ''
//     ), $attr));

//     $id = intval($id);
//     if ('RAND' == $order) $orderby = 'none';

//     if (!empty($include)) {
//         $include = preg_replace('/[^0-9,]+/', '', $include);
//         $_attachments = get_posts(array('include' => $include, 'post_status' => 'inherit', 'post_type' => 'attachment', 'post_mime_type' => 'image', 'order' => $order, 'orderby' => $orderby));
//         $attachments = array();
//         foreach ($_attachments as $key => $val) {
//             $attachments[$val->ID] = $_attachments[$key];
//         }
//     }

//     if (empty($attachments))
//         return '';

//     // Output gallery
//     $output = "<div class='masonry-grid gallery'>";

//     foreach ($attachments as $id => $attachment) {
//         $img = wp_get_attachment_image($id, $size);
//         $output .= "<{$itemtag} class='gallery-item'>$img</{$itemtag}>";
//     }

//     $output .= "</div>";

//     return $output;
// }
// add_filter('post_gallery', 'custom_gallery_shortcode', 10, 2);

// Override default gallery output
add_filter('post_gallery', 'custom_gallery_output', 10, 3);
function custom_gallery_output($output, $attr, $instance) {
    // Get the current post
    global $post;

    // Check if the post has a gallery
    if (isset($attr['ids'])) {
        // Extract the IDs of the gallery images
        $ids = explode(',', $attr['ids']);

        // Start the output
        $output = '<div class="gallery-grid">';

        // Loop through each image ID
        foreach ($ids as $id) {
            // Get the image attachment
            $attachment = wp_get_attachment_image_src($id, 'large');
            $image_url = $attachment[0];

            // Output the image wrapped in a div
            $output .= '<div class="gallery-item">';
            $output .= '<img src="' . $image_url . '" alt="' . get_the_title($id) . '">';
            $output .= '</div>';
        }

        // Close the grid container
        $output .= '</div>';
    }

    return $output;
}



// Custom function to retrieve gallery image IDs
function get_gallery_image_ids() {
    global $post;

    // Initialize an empty array to store image IDs
    $gallery_image_ids = array();

    // Check if the post has a gallery
    $gallery = get_post_gallery($post, false);

    if ($gallery) {
        // Get the IDs of the gallery images
        $ids = explode(',', $gallery['ids']);
        $gallery_image_ids = array_map('trim', $ids);
    }

    return $gallery_image_ids;
}


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
