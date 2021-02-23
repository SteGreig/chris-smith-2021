<?php
/**
 * Fetch all files from the functions folder with ext of .php
 * Then loop over and include them
 */
$files = ( defined( 'WP_DEBUG' ) AND WP_DEBUG ) ? glob( __DIR__ . '/_functions/*.php', GLOB_ERR ) : glob( __DIR__ . '/_functions/*.php' );
foreach ( $files as $file ) : include $file; endforeach;

/**
 * Register our sidebars and widgetized areas.
 *
 */
function arphabet_widgets_init() {

	register_sidebar( array(
		'name'          => 'Reviews Page',
		'id'            => 'reviews_page',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="rounded">',
		'after_title'   => '</h2>',
	) );

}
add_action( 'widgets_init', 'arphabet_widgets_init' );