=== AddThis featuring Sharing Buttons / Facebook Like / Tweet Button / Google + 1 === 
Contributors: _mjk_, jorbin
Tags: share, addthis, social, bookmark, sharing, bookmarking, widget,AddThis, addtoany, aim, bookmark, buzz, del.icio.us, Digg,e-mail, email, Facebook, google bookmarks, google buzz, myspace,network, NewsVine, Reddit, Share, share this, sharethis, social, socialize, stumbleupon, twitter, windows live, yahoo buzz, plus one, google plus one, plus 1, + one, + 1
Requires at least: 2.9
Tested up to: 3.1.3
Stable tag: 2.1.1

The AddThis Social Bookmarking Widget allows any visitor to bookmark and share your site easily with many popular services. 

== Description ==
Get more traffic back to your site by installing the AddThis WordPress plugin. With AddThis, your users can promote your content by sharing to 295 of the most popular social networking and bookmarking sites (like Facebook, Twitter, Digg, StumbleUpon and MySpace). Our button is small, unobtrusive, quick to load and recognized all over the web.

Optionally, sign up for a free AddThis.com account to see how your visitors are sharing your content: which services they're using for sharing, which content is shared the most, and more.

<a href="http://www.addthis.com/blog">AddThis Blog</a> | <a href="http://www.addthis.com/privacy">Privacy Policy</a>

== Installation ==

For an automatic installation through WordPress:

1. Go to the 'Add New' plugins screen in your WordPress admin area
1. Search for 'AddThis'
1. Click 'Install Now' and activate the plugin

For a manual installation via FTP:

1. Upload the addthis folder to the `/wp-content/plugins/` directory
1. Activate the plugin through the 'Plugins' screen in your WordPress admin area

To upload the plugin through WordPress, instead of FTP:

1. Upload the downloaded zip file on the 'Add New' plugins screen (see the 'Upload' tab) in your WordPress admin area and activate.

== Frequently Asked Questions ==

= Is AddThis free? =

Yep! The features you see today on AddThis will always be free. 

= Do I need to create an account? =

No. You only need to create an account if you want to see how your users are sharing your blog; the sharing itself works the same either way.

= Is JavaScript required? =

All of the options required through this plugin require javascript.   JavaScript must be enabled. We load the actual interface via JavaScript at run-time, which allows us to upgrade the core functionality of the menu itself automatically everywhere. 

= Why use AddThis? =
1. Ease of use. AddThis is easy to install, customize and localize. We've worked hard to make it the simplest, most recognized sharing tool on the internet.
1. Performance. The AddThis menu code is tiny and fast. We constantly optimize its behavior and design to make sharing a snap.
1. Peace of mind. AddThis gathers the best services on the internet so you don't have to, and backs them up with industrial strength analytics, code caching, active tech support and a thriving developer community.
1. Flexibility. AddThis can be customized via API, and served securely via SSL. You can roll your own sharing toolbars with our toolbox. Share just about anything, anywhere -- your way.
1. Global reach. AddThis sends content to 295+ sharing services 60+ languages, to over half a billion unique users in countries all over the world.
1. It's free!

= Who else uses AddThis? =
Over 1,200,000 sites have installed AddThis. With over a billion unique users, AddThis is helping share content all over the world, in more than sixty languages. You might be surprised who's sharing their website using AddThis--<a href="http://www.addthis.com/features#partners">here are just a few</a>.

= What services does AddThis support? =
We currently support over 295 services, from email and blogging platforms to social networks and news aggregators, and we add new services every month. Want to know if your favorite service is supported? This list is accurate up to the minute: <a href="http://www.addthis.com/services">http://www.addthis.com/services</a>.

= How do I remove AddThis from a page =
In the screen options you can enable the AddThis meta box.  Check the box and save if you've already published that page or post to disable AddThis on that page or post.  

== Screenshots ==

1. The admin dashboard widget
2. Previewing how your options look
3. The settings interface.

== PHP Version ==

PHP 5+ is preferred; PHP 4 is supported.

== Changelog ==
= 2.1.1 =
* Add Google +1

= 2.1.0 =
* Add Twitter Template Option
* Add Post Meta Box
* Add top shared/clicked URLS to dashboard
* More Filters

= 2.0.6 =
* define ADDTHIS_NO_NOTICES to prevent admin notices from displaying

= 2.0.5 =
* force service codes to be lowercase
* If opting out of clickback tracking, set config to force opting out

= 2.0.4 = 
* Fix conflict with other plugins
* Prevent button js from appearing in feeds

= 2.0.3 =
* plugin should still work if theme doesn't have wp_head and wp_footer

= 2.0.2 =
* Bug Fixes
* set addthis_exclude custom field to 'true' to not display addthis on that post / page 
* Added additional paramater to 
* Ability to specify custom toolboxes for both above and below
* Added additional paramater to do_action('addthis_widget').  Paramaters are now:
* * url (use get_permalink() if you are calling it inside the loop)
* * title (use the_title() if calling inside the loop)
* * Style (specify the style to display) See $addthis_new_styles for the styles.  may also pass an arra (see addthis_custom_toolbox for array values to pass)



= 2.0.1 =
* Fix theme compatablity issues
* Fix excerpts bug
* Add option to not display on excerpts
* Restore option to customize services
* Add more filters

= 2.0.0 =
* Redesigned Settings page
* Added Share Counter option
* Redesigned Admin Dashboard widget
* Updated sharing widget options
* Updated sidebar widget to extend WP_Widget

= 1.6.7 =
* Using wp_register_sidebar_widget() in WordPress installs that support it

= 1.6.6 =
* Fixed argument bug in 1.6.5

= 1.6.5 =
* Added support for arbitrary URL and title in template tag as optional parameters
 * i.e., <?php do_action( 'addthis_widget', $url, $title); ?>
 * Can be called, for example, with get_permalink() and the_title() within a post loop, or some other URL if necessary

= 1.6.4 =
* Fixed parse bug with "static" menu option
* Fixed regression of brand option

= 1.6.3 = 
* Added template tags. &lt;?php do_action( 'addthis_widget' ); ?&gt; in your template will print an AddThis button or toolbox, per your configuration.
* Added <a href="http://addthis.com/blog/2010/03/11/clickback-analytics-measure-traffic-back-to-your-site-from-addthis/">clickback</a> tracking.
* Added "Automatic" language option. We'll auto-translate the AddThis button and menu into our supported languages depending on your users' settings.
* Fixed script showing up in some trackback summaries. 

= 1.6.2 =
Fixed name conflict with get_wp_version() (renamed to addthis_get_wp_version()), affecting users with the k2 theme.

= 1.6.1 =
Fixed nondeterministic bug with the_title(), causing the title to occasionally appear in posts.

= 1.6.0 =
* Added <a href="http://addthis.com/toolbox">toolbox</a> support
* Added WPMU support
* For WP 2.7+ only:
 * Added support for displaying basic sharing metrics in the WordPress dashboard
 * Updated settings management to use nonces


== Upgrade Notice ==
= 2.1.1 =
Add +1 to the button options

= 2.1.0 =
More Features, More Filters, More Social Goodness

= 2.0.5 =
Force service codes to be lowercase and If opting out of clickback tracking, set config to force opting out

= 2.0.4 =
Fix conflict with other plugins and other bug fixes

= 2.0.3 = 
Still work in themes that don't have wp_head and wp_footer

= 2.0.2 =
Bug Fixes, enhanced customization

= 2.0.1 =
Bug Fixes, more filters, small tweak to options

= 2.0.0 =
More and better options for sharing widgets.  Redesigned analytics dashboard widget and interface.  

