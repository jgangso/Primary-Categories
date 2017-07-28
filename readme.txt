=== Primary Terms ===
Contributors: jacobmc, jgangso
Donate Link: 
Tags: categories, tags, primary terms, shortcodes
Requires at least: 3.4
Tested up to: 4.8
Stable tag: 1.0.0
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

WordPress plugin for setting and displaying primary terms for posts and custom post types.

== Description ==

WordPress plugin for setting and displaying primary terms for posts and custom post types*.

This plugin creates a meta box on the post edit screen titled "Primary Term" (customizable) containing a drop down menu populated with all terms from the taxonomy associated with that post**. Selecting a primary category and updating the post saves this data into a custom field with a meta key of "primary-term".

To display a list of all posts with a particular primary term, use the shortcode [primary-term name="term_name"] where term_name is the name of the primary term you wish to display. If a name is not specified, the shortcode will default to all posts with "uncategorized" set as the primary term.

*Note: On default setup, custom post types must support both categories and custom fields. One can alter the taxonomy per post type by filtering.

**Note: As new terms are added to a post, the post must be updated before those new terms will be available for selection as a primary term.

== Installation ==

This section describes how to install the plugin and get it working.

1. Upload the 'primary-terms' directory to your '/wp-content/plugins/' directory, or install the plugin through the WordPress plugins screen directly
2. Activate the plugin through the 'Plugins' screen in WordPress
3. Select the primary term for each post via the post edit screen
4. Place shortcode to the content of any post type or access the data via the post meta key 'primary-term'

== Frequently Asked Questions == 

= How can I access the primary term data? =

A post's primary term is stored in the post meta under the key 'primary-term'.

= What shortcode can I use to display posts with a particular primary term? =

[primary-term name=""]

*Note: Name should reference the primary term that is to be displayed, if no name is specified, the name parameter defaults to 'uncategorized'.

= Why isn't the term I added available as a primary term? =

Users must update a post after adding a new term before that term will be available as a primary term.

== Screenshots ==

1. Example of post edit screen with primary term meta box.
2. Example of shortcode being used in page.
3. Example output of shortcode.

== Changelog ==

= 1.0.0 = 

Initial Commit
