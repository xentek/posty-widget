=== Posty Widget ===
Contributors: xenlab
Donate link: http://xentek.net/code/wordpress/plugins/posty-widget/
Tags: widgets, posts
Requires at least: 2.5
Tested up to: 2.9
Stable tag: trunk

A custom widget that will display dynamic text from the values you enter in special custom fields on a post inside of a WordPress Widget. 

== Description ==

A custom widget that will display dynamic text from the values you enter in special custom fields on a post inside of a WordPress Widget.

Add any text you want as the value of the 'posty' custom field and it will show up in this widget. Title the widget with the 'posty-title' custom field. It only works on single posts.

== Installation ==

1. Download the posty-widget.zip file, unzip and upload the whole directory to the `/wp-content/plugins/` directory
1. Activate the plugin through the 'Plugins' menu in WordPress.
1. Drag the widget to your theme using WP-Admin.
1. Create a custom field on a post with the name of 'posty-title' and a value of your choosing (text only). This will be the Widget's title.
1. Create a custom field on a post or page with the name of 'posty' and a value of your choosing (can include HTML if you want). This will be the body of the Widget.
1. Visit the page and regal in your posty-widget gloriousness.

== Frequently Asked Questions ==

= Why Would I Want This? =

If you would like to create a widget from custom field text, this plugin is probably about the simplest way to do just that.

= Does it support multiple instances of the Widget? =

Not yet. However, it was designed to place the widget in the same place on different pages, and then use the custom field values to 

= Which Custom Field values does the plugin respond to? =

Only 'posty' and 'posty-title'. The value of 'posty-title' will be used to title the widget, and the value of 'posty' will be used as the body. The custom field names should not include the single quotes (obviously).

= I want to help with development of this Plugin! =

The project is now hosted on [github.com](http://github.com/xentek/posty-widget). Just fork the project and send me a pull request.

[New to git?](http://delicious.com/ericmarden/git)

== Screenshots ==

== Changelog ==

= 0.5 =
* Initial Version of the Plugin released to the public.

== License ==

The Posty Widget plugin was developed by Eric Marden, and is provided with out warranty under the GPLv2 License. More info and other plugins at: http://xentek.net

Copyright 2008  Eric Marden  (email : wp@xentek.net)

This program is free software; you can redistribute it and/or modify it under the terms of the GNU General Public License as published by the Free Software Foundation; either version 2 of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU General Public License for more details.

You should have received a copy of the GNU General Public License along with this program; if not, write to the Free Software Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA