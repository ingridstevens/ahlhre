<?php
/**
 * Custom functions
 */

add_image_size( 'carousel', 1000, 375, true );




add_filter('piklist_admin_pages', 'piklist_theme_setting_pages');
function piklist_theme_setting_pages($pages) {
	$pages[] = array(
	'page_title' => __('Carousel Settings')
	,'menu_title' => __('Carousel', 'piklist')
	,'sub_menu' => 'themes.php' //Under Appearance menu
	,'capability' => 'manage_options'
	,'menu_slug' => 'carousel_settings'
	,'setting' => 'carousel_settings'
	,'menu_icon' => plugins_url('piklist/parts/img/piklist-icon.png')
	,'page_icon' => plugins_url('piklist/parts/img/piklist-page-icon-32.png')
	,'single_line' => true
	,'default_tab' => 'Basic'
	,'save_text' => 'Save Carousel Settings'
	);

	return $pages;
}
