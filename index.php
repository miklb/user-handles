<?php
/**
 * Plugin Name: User Handle Links
 * Description: Link User @ Handles in Posts
 * Author: Michael Bishop
 * Author URI: https://miklb.com
 * Version: 0.1
 */
function uhl_twithandle( $content ) {
	$twithandle = preg_replace( '/([^a-zA-Z0-9-_&])@([0-9a-zA-Z_]+)/','$1<a href="https://twitter.com/$2" rel="nofollow">@$2</a>',$content );
	return $twithandle;
}

add_filter( 'the_content', 'uhl_twithandle' );

add_filter( 'comment_text', 'uhl_twithandle' );