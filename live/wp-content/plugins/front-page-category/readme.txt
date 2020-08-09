=== Front Page Category ===
Contributors: binarymoon, JWall
Tags: category, customizer, front, home, page, post
Requires at least: 4.0
Tested up to: 5.2
Stable tag: 3.1

A plugin that lets you select the categories that appear on the front page of your WordPress site.

== Description ==

Front Page Category is a plugin that let you select the categories that appear on the front page of your website. If there are categories that you don't want to appear on front page, for example the 'uncategorized' one, just go to the Customizer &rarr; Front Page Categories menu, and then untick the categories you want to hide.

This could be useful if you use an automated posting system, or use email to post. In these cases you can assign these posts to a category of your choice and uncheck it at Front Page Category settings. They will then be hidden from the homepage - but will still appear on their category page.

== Installation ==

1. Download the zip and unzip the 'front-page-category.zip' file into the `/wp-content/plugins/` directory.
1. Activate the plugin through the 'Plugins' menu in WordPress.
1. Open the customizer and go to your websites front page (the settings will only display if the front page is the current page).
1. Visit Front Page Category in the Customizer, and uncheck categories that you don't want to show up on the front page.
1. View your front page and confirm that your excluded categories are not showing.

== Changelog ==

= 3.3 - 19th March 2019 =
* Attempt to restrict the filtering to blog posts only.
* Improve coding standards.

= 3.2 - 17th March 2019 =
* Improve coding standards.
* Ensure we're not filtering menu contents.

= 3.1 - 15th March 2019 =
* Revert change that restricts filtering to the main query (blog posts), and applies it to everything on the homepage.
* Add an option to filter just the posts in the main query (blog posts).

= 3.0 - 25th January 2019 =
* Add an option to decide whether to include or exclude the categories you have selected.

= 2.1 - 8th January 2018 =
* Fix customizer styles

= 2.0 - Rewritten. All settings are now in the Customizer =
* Improve code standards
* Move controls to the customizer
* Improve data sanitization (security)
* Allow plugin to be translated

= 1.0 - Initial Release =
