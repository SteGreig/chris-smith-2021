<?php

$context = Timber::context();
$timber_post = new Timber\Post();
$context['post'] = $timber_post;

if(is_page('reviews')) {
  $context['dynamic_sidebar'] = Timber::get_widgets('reviews_page');
}

Timber::render( [ 'page-'.$timber_post->slug.'.twig', 'page.twig' ], $context );
