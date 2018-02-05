<?php

$options = get_option('post_thumbnail');
if ($options == 1)
{
	add_theme_support( 'post-thumbnails' );
}

$output = array();
$options = get_option('aside_format');
if ($options == 1)
{
	$output[] = 'aside';
}
$options = get_option('gallery_format');
if ($options == 1)
{
	$output[] = 'gallery';
}
$options = get_option('image_format');
if ($options == 1)
{
	$output[] = 'image';
}
$options = get_option('video_format');
if ($options == 1)
{
	$output[] = 'video';
}
$options = get_option('audio_format');
if ($options == 1)
{
	$output[] = 'audio';
}
add_theme_support('post-formats', $output);

// Nav Menu ======================================
add_theme_support( 'menus' );
function dimaan_register_nav_menu()
{
	register_nav_menu('header_menu', 'منوی پیمایش هدر');
	register_nav_menu('mobile_menu', 'منوی پیمایش موبایل');
	register_nav_menu('footer_menu', 'منوی پیمایش فوتر');
	register_nav_menu('link_menu', 'منوی پیمایش لینک های مفید');
}
add_action('after_setup_theme', 'dimaan_register_nav_menu');