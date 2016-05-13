=== Primary Categories ===
Contributors: jacobmc
Donate Link: 
Tags: categories, shortcodes
Requires at least: 3.4
Tested up to: 4.5
Stable tag: 1.0.0
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Adds ability to select a primary category for posts and custom post-types and display posts by primary category.

== Description ==

Adds ability to select a primary category for posts and custom post-types and display posts by primary category. 

A post's primary category is available as post meta by referencing the 'primary-category' key.

A shortcode is available to display posts by primary category: 
- [primary-category name=""]


*Note: Name should reference the primary category that is to be displayed, if no name is specified, the name parameter defaults to 'uncategorized'.
*Note: Users must update a post after adding a new category before that category will be available as a primary category.

== Installation ==

This section describes how to install the plugin and get it working.

1. Upload the 'primary-categories' directory to your '/wp-content/plugins/' directory, or install the plugin through the WordPress plugins screen directly
2. Activate the plugin through the 'Plugins' screen in WordPress
3. Select the primary category for each post via the post edit screen
4. Place shortcode to the content of any post type or access the data via the post meta key 'primary-category'

== Frequently Asked Questions == 

= How can I access the primary category data? =

A post's primary category is stored in the post meta under the key 'primary-category'.

= What shortcode can I use to display posts with a particular primary category? =

[primary-category name=""]

*Note: Name should reference the primary category that is to be displayed, if no name is specified, the name parameter defaults to 'uncategorized'.

= Why isn't the category I added available as a primary category? =

Users must update a post after adding a new category before that category will be available as a primary category.

== Screenshots ==

1. Example of post edit screen with primary category meta box.
2. Example of shortcode being used in page.
3. Example output of shortcode.

== Changelog ==

= 1.0.0 = 

Initial Commit
