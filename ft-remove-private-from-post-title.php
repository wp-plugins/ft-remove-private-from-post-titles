<?php
/*
Plugin Name: Remove "Private:" From Post Titles
Plugin URI: http://fullthrottledevelopment.com/remove-private-from-post-titles/
Description: This plugin removes "Private: " from your private post titles.
Version: 0.1
Author: FullThrottle Development
Author URI: http://fullthrottledevelopment.com/
*/

//Primary Developer : Glenn Ansley (http://glennansley.com)
//Copyright 2009 Glenn Ansley

 /* Release History
    0.1 - Initial Release
 */

define( 'FT_RPFPT_Version' , '0.1' );


function ft_rpfpt_remove_private( $title ){ 
global $post;
	if ( isset($post->post_status) && 'private' == $post->post_status ){
		if ( substr($title,0,9) == 'Private: ' ){
			$title = substr($title,9);
		}
	}
	return $title;
}

if ( !is_admin() ){
	add_action('the_title','ft_rpfpt_remove_private');
}
?>