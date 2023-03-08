<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Shubhu
 */
global $shubhu_theme_options;
if (is_singular()) {
    $sidebar = $shubhu_theme_options['shubhu-sidebar-single-page'];
} else {
    $sidebar = $shubhu_theme_options['shubhu-sidebar-blog-page'];
}

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}

?>
<aside id="secondary" class="col-lg-4 col-md-5 <?php echo esc_attr($sidebar); ?>">
	<div class="sidebar-area">
		<?php dynamic_sidebar( 'sidebar-1' ); ?>
	</div>
</aside><!-- #secondary -->
