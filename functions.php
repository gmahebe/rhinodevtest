<?php

// Required site constants
require_once( 'includes/constants.php' );

// Site setup and misc helpers
require_once( 'includes/theme-setup.php' );

// Navigation helpers
require_once( 'includes/navigation.php' );

// Pagination helpers
require_once( 'includes/pagination.php' );

// Required ACF support
require_once( 'includes/acf-support.php' );

// Required scripts and stylesheet enqueue support
require_once( 'includes/enqueue-scripts.php' );


function find_posts() {
   
    $postType = 'post';
    $catSlug = $_GET['category'];
  
    $ajaxposts = new WP_Query([
      'post_type' => $postType,
      'posts_per_page' => -1,
      'category_name' => $catSlug,
      'order_by'		 => 'date',
      'order'		 	 => 'desc',
    ]);
    $response = '';

    if($ajaxposts->have_posts()) {
      while($ajaxposts->have_posts()) : $ajaxposts->the_post();
        $response .= get_template_part('template-parts/post-tile');
      endwhile;
    } else {
      $response = 'empty';
    }
  
    echo $response;
    exit;
}
add_action('wp_ajax_find_posts', 'find_posts');
add_action('wp_ajax_nopriv_find_posts', 'find_posts');