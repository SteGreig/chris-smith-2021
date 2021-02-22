<?php
/* ========================================================================================================================
	Remove shortcodes if we are on a single blog post
======================================================================================================================== */
/**
 * @param string $content Post content.
 * @return string (Maybe) modified post content.
 */
function remove_shortcode_from_single_post( $content ) {
    if ( is_singular('post') ) {
        $content = strip_shortcodes( $content );
    }
    return $content;
}
add_filter( 'the_content', 'remove_shortcode_from_single_post' );