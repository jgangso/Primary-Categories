# Primary-Terms
WordPress plugin for setting and displaying primary terms for posts and custom post types*.

This plugin creates a meta box on the post edit screen titled "Primary Term" (customizable) containing a drop down menu populated with all terms from the taxonomy associated with that post**. Selecting a primary category and updating the post saves this data into a custom field with a meta key of "primary-term".

To display a list of all posts with a particular primary term, use the shortcode [primary-term name="term_name"] where term_name is the name of the primary term you wish to display. If a name is not specified, the shortcode will default to all posts with "uncategorized" set as the primary term.

*Note: On default setup, custom post types must support both categories and custom fields. One can alter the taxonomy per post type by filtering.

**Note: As new terms are added to a post, the post must be updated before those new terms will be available for selection as a primary term.