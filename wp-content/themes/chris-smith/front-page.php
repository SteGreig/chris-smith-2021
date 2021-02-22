<?php

$context = Timber::context();
$context['post'] = new Timber\Post();

$context['is_front_page'] = true;

Timber::render( [ 'front-page.twig' ], $context );
