<?php
/*
Plugin Name: Think2make Functions
Plugin URI: https://github.com/think2make/think2make-functions
Description: Cette extension ajoute des fonctionnalités custom.
Version: 0.1
Author: Manuel Schmalstieg
Author URI: https://ms-studio.net
GitHub Plugin URI: https://github.com/think2make/think2make-functions
*/
 
// Use Gutenberg with Portfolio

include_once (plugin_dir_path(__FILE__).'t2m-portfolio-cpt.php');


/*
 * File Upload Sanitization
 
 * Sources: 
 * http://www.geekpress.fr/wordpress/astuce/suppression-accents-media-1903/
 * https://gist.github.com/herewithme/7704370
 
 * See also Ticket #22363
 * https://core.trac.wordpress.org/ticket/22363
 * and #24661 - remove_accents is not removing combining accents
 * https://core.trac.wordpress.org/ticket/24661
*/ 
add_filter( 'sanitize_file_name', 'remove_accents', 10, 1 );
add_filter( 'sanitize_file_name_chars', 'sanitize_file_name_chars', 10, 1 );
 
function sanitize_file_name_chars( $special_chars = array() ) {
	$special_chars = array_merge( array( '’', '‘', '“', '”', '«', '»', '‹', '›', '—', 'æ', 'œ', '€','é','à','â','ç','ä','ö','ü','ï','û','ô','è' ), $special_chars );
	return $special_chars;
}