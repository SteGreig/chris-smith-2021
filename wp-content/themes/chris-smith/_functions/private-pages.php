<?php

// Change posts per page for Private Pages (client galleries)

function set_posts_per_page_for_private_pages_cpt( $query ) {
  if ( !is_admin() && $query->is_main_query() && is_post_type_archive( 'private-pages' ) ) {
    $query->set( 'posts_per_page', '60' );
  }
}
add_action( 'pre_get_posts', 'set_posts_per_page_for_private_pages_cpt' );