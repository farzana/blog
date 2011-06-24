<?php

// This file is part of the Carrington Text Theme for WordPress
// http://carringtontheme.com
//
// Copyright (c) 2008-2009 Crowd Favorite, Ltd. All rights reserved.
// http://crowdfavorite.com
//
// Released under the GPL license
// http://www.opensource.org/licenses/gpl-license.php
//
// **********************************************************************
// This program is distributed in the hope that it will be useful, but
// WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. 
// **********************************************************************

if (__FILE__ == $_SERVER['SCRIPT_FILENAME']) { die(); }
if (CFCT_DEBUG) { cfct_banner(__FILE__); }

?>

<div id="sidebar">
	<div id="sidebar-top">
	</div>
	<div id="primary-sidebar">
		<div id="inner-primary-sidebar">
<?php
$post = $orig_post;
if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Primary Sidebar') ) {
?>



<div class="widget">
			<h2 class="title"><?php _e('Pages', 'carrington-text'); ?></h2>
			<ul>
				<?php wp_list_pages('title_li='); ?>
			</ul>
		</div><!--.widget-->
		<div class="widget">
			<h2 class="title"><?php _e('Categories', 'carrington-text'); ?></h2>
			<ul>
				<?php wp_list_cats(); ?>
			</ul>
		</div><!--.widget-->
		<div class="widget">
			<h2 class="title"><?php _e('Tags', 'carrington-text'); ?></h2>
			<?php wp_tag_cloud('smallest=10&largest=18&unit=px'); ?>
		</div><!--.widget-->
		<div class="widget">
			<h2 class="title"><?php _e('Archives', 'carrington-text'); ?></h2>
			<ul>
				<?php wp_get_archives(); ?>
			</ul>
		</div><!--.widget-->
		<div class="widget under meta">
			<?php wp_register('<p>', '</p>'); ?> 
			<p><?php wp_loginout(); ?></p>
		</div><!--.widget-->


<?php
}
?>	
		</div>
	</div><!--#primary-sidebar-->
	<div id="sidebar-bottom">
	
	
	
	
	</div>
</div><!--#sidebar-->
