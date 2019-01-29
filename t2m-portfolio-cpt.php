<?php

add_filter('register_post_type_args', 'porfolio_gutenberg', 10, 2);

function porfolio_gutenberg($args, $post_type){
 
  if ($post_type == 'portfolio'){
    $args['show_in_rest'] = 'true';
  }

  return $args;
}