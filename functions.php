
<?php 

// Register Custom Post Type
function product() {

 $labels = array(
     'name'                  => 'Product',
     'singular_name'         => 'Product',
     'menu_name'             => 'Product',
     'name_admin_bar'        => 'Product',
     'archives'              => 'Product Archives',
     'attributes'            => 'Product Attributes',
     'parent_item_colon'     => 'Parent Product:',
     'all_items'             => 'All Product',
     'add_new_item'          => 'Add Product',
     'add_new'               => 'Add',
     'new_item'              => 'Add Product',
     'edit_item'             => 'Edit Product',
     'update_item'           => 'Update Product',
     'view_item'             => 'View Product',
     'view_items'            => 'View Product',
     'search_items'          => 'Search Product',
     'not_found'             => 'Not found',
     'not_found_in_trash'    => 'Not found in Trash',
     'featured_image'        => 'Image Product',
     'set_featured_image'    => 'Add image',
     'remove_featured_image' => 'Remove featured image',
     'use_featured_image'    => 'Use as featured image',
     'insert_into_item'      => 'Insert into Product',
     'uploaded_to_this_item' => 'Uploaded to this Product',
     'items_list'            => 'Product List',
     'items_list_navigation' => 'Product List',
     'filter_items_list'     => 'Filter Product List',
 );
 $args = array(
     'label'                 => 'Product List',
     'description'           => 'Product List',
     'labels'                => $labels,
     'supports'              => array('title', 'editor','thumbnail'),
     'hierarchical'          => true,
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
     'menu_icon'             => 'dashicons-cart',
     'capability_type'       => 'page',
 );
 register_post_type( 'product', $args );

}
add_action( 'init', 'product', 0 );


// Register Custom Taxonomy
function create_taxonomy_product() {

 $labels = array(
     'name'                       => 'Product Category',
     'singular_name'              => 'Product Category',
     'menu_name'                  => 'Product Category',
     'all_items'                  => 'All Product Category',
     'parent_item'                => 'Product Category Parent',
     'parent_item_colon'          => 'Product Category Parent:',
     'new_item_name'              => 'New Product',
     'add_new_item'               => 'Add Product Category',
     'edit_item'                  => 'Edit Product Category',
     'update_item'                => 'Update Product Category',
     'view_item'                  => 'View Product Category',
     'separate_items_with_commas' => 'Separate Products Category with commas',
     'add_or_remove_items'        => 'Add or remove Products Category',
     'choose_from_most_used'      => 'Choose from the most used',
     'popular_items'              => 'Popular Product Category',
     'search_items'               => 'Search Product Category',
     'not_found'                  => 'Not Found',
     'no_terms'                   => 'Not Found',
     'items_list'                 => 'Product Category',
     'items_list_navigation'      => 'Product Category navigation',
 );
 $args = array(
     'labels'                     => $labels,
     'hierarchical'               => true,
     'public'                     => true,
     'show_ui'                    => true,
     'show_admin_column'          => true,
     'show_in_nav_menus'          => true,
     'show_tagcloud'              => true,
 );
 register_taxonomy( 'product_cat', 'product', $args );

}
add_action( 'init', 'create_taxonomy_product', 0 );



?>
