<?php
/*
Plugin Name: Spam IP Blocker
Plugin URI: http://wordpress.org/extend/plugins/spam-ip-blocker/
Description: Free spam IP blocker according to public DNSBL bases. Based on public DNSBL class.
Author: Alexey Znayev
Version: 0.9.2
Author URI: http://xbsoft.org
License: GPLv2 or later
*/

/*
This program is free software; you can redistribute it and/or
modify it under the terms of the GNU General Public License
as published by the Free Software Foundation; either version 2
of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.
*/

require_once 'DNSBL.php'; 	// see http://xbsoft.org/php/

function spam_ip_blocker_block( $comment_id, $comment_status ) {
	global $wpdb;
	$comment_id = (int) $comment_id;
	$comment = $wpdb->get_row("SELECT * FROM $wpdb->comments WHERE comment_ID = '$comment_id'");
	if(!$comment) return;
	$ip = $comment->comment_author_IP;
	$dnsbl = new DNSBL();
	if($dnsbl->CheckSpamIP($ip, 'all')) wp_set_comment_status($comment_id, 'spam');	// seek ip in group available DNSBL checkers
}

add_action('comment_post', 'spam_ip_blocker_block', 10, 2);
?>
