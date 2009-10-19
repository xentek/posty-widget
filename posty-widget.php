<?php
/*
	Plugin Name: Posty Widget
	Plugin URI: http://xentek.net/code/wordpress/plugins/
	Description: A custom widget that will display dynamic text from the values you enter in special custom fields on a post inside of a WordPress Widget.
	Add any text you want as the value of the 'posty' custom field and it will show up in this widget. Title the widget with the 'posty-title' custom field. It only works on single posts.
	Version: 0.5
	Author: Eric Marden
	Author URI: http://xentek.net/
*/
/*	Copyright 2008	Eric Marden	 (email : wp@xentek.net)

	This program is free software; you can redistribute it and/or modify
	it under the terms of the GNU General Public License as published by
	the Free Software Foundation; either version 3 of the License, or
	(at your option) any later version.

	This program is distributed in the hope that it will be useful,
	but WITHOUT ANY WARRANTY; without even the implied warranty of
	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
	GNU General Public License for more details.

	You should have received a copy of the GNU General Public License
	along with this program; if not, write to the Free Software
	Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

add_action('plugins_loaded', 'posty_widget_register');
/**
 *	We put them all in one big function so that they are run at plugin_loaded hook
 */
function posty_widget_register()
{

	function posty_widget($args=array())
	{

		extract($args);
		$posty = '';
		$posty_title = '';

		global $wp_query;
		$post_id = $wp_query->post->ID;
				
		if ( is_single() || is_page() )
		{
			$posty = get_post_meta($post_id, 'posty', true);
			$posty_title = get_post_meta($post_id, 'posty-title', true);
		}

		if ($posty != '')
		{
			echo $before_widget;
			echo $before_title;
			echo $posty_title;
			echo $after_title;
			echo $posty;
			echo $after_widget;
		}
	}
	
	register_sidebar_widget('Posty Widget','posty_widget');
}

?>