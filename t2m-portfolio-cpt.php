<?php

add_filter('register_post_type_args', 't2m_porfolio_gutenberg', 10, 2);

function t2m_porfolio_gutenberg($args, $post_type){
 
  if ($post_type == 'portfolio'){
    $args['show_in_rest'] = 'true';
  }

  return $args;
}


add_action( 'init', 't2m_portfolio_custom_slug', 5 );
/**
 * Rename slug in Genesis Portfolio Plugin.
 *
 * @author Anita Carter
 * @link   https://cre8tivediva.com/rename-genesis-portfolio-slug
 */
function t2m_portfolio_custom_slug() {
	$args                  = get_post_type_object( 'portfolio' );
	$args->rewrite['slug'] = 'case-studies';
	register_post_type( $args->name, $args );
}