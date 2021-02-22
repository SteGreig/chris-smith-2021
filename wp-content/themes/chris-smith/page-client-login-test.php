<?php

$context = Timber::context();
$timber_post = new Timber\Post();
$context['post'] = $timber_post;

$args = array( 'post_type' => 'private-pages', 'posts_per_page' => -1 );
$privateGals = Timber::get_posts( $args );

$context['private_gals'] = $privateGals;


Timber::render( [ 'page-'.$timber_post->slug.'.twig', 'page.twig' ], $context );
