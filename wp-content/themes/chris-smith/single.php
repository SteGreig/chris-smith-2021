<?php 

$context = Timber::context();
$timber_post = new Timber\Post();
$context['post'] = $timber_post;

if ( post_password_required() ) {
  $context['password_required'] = true;
}

if(is_singular('private-pages')) {
  $context['is_private_gal'] = true;
}


if(is_singular('post')) {
  /* ========================================================================================================================
    Next Gen Gallery shortcode is extracted from post content (in functions.php) and included separately here
  ======================================================================================================================== */

  // This code gets the gallery id from the shortcode in the content, and then outputs the shortcode manually using do_shortcode()

  $result = array();
  //get shortcode regex pattern wordpress function
  $pattern = get_shortcode_regex();


  if (   preg_match_all( '/'. $pattern .'/s', $post->post_content, $matches ) )
  {
    $keys = array();
    $result = array();
    foreach( $matches[0] as $key => $value) {
      // $matches[3] return the shortcode attribute as string
      // replace space with '&' for parse_str() function
      $get = str_replace(" ", "&" , $matches[3][$key] );
      parse_str($get, $output);

      //get all shortcode attribute keys
      $keys = array_unique( array_merge(  $keys, array_keys($output)) );
      $result[] = $output;

    }
    //var_dump($result);
    if( $keys && $result ) {
      // Loop the result array and add the missing shortcode attribute key
      foreach ($result as $key => $value) {
        // Loop the shortcode attribute key
        foreach ($keys as $attr_key) {
          $result[$key][$attr_key] = isset( $result[$key][$attr_key] ) ? $result[$key][$attr_key] : NULL;
        }
        //sort the array key
        ksort( $result[$key]);              
      }
    }

    //display the result
    //print_r($result);
    //echo $result[0][id];
  }

  $context['nggid'] = $result[0][id];
}


Timber::render( [ 'single.twig' ], $context );