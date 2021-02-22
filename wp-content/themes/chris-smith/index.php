<?php

$context = Timber::context();
$context['posts'] = new Timber\PostQuery();

$context['archives'] = wp_get_archives( array('type=>monthly', 'echo'=>0 ));
$context['categories'] = wp_list_categories(array('title_li' => '', 'echo'=>0));

if(is_home()) {
  $context['is_blog'] = true;
  Timber::render( [ 'index.twig' ], $context );
} else if (is_archive('private-pages')) {
  $context['is_private_gals'] = true;
  Timber::render( [ 'private-galleries.twig' ], $context );
}