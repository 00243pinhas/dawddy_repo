<?php
$logo_w = chani_configs('logo')['width'];
$logo_h = chani_configs('logo')['height'];
/**
 * Template part for displaying site branding
 */
// $logo = chani_get_opts( 'logo', array( 
// 	'id' => '',
// 	'url' => get_template_directory_uri() . '/assets/images/logo/logo.png',
// ), 'header_custom');
// $logo_url = $logo['url'];
// $logo_sticky = $logo['url'];


echo $args['before'] ?? '';

if (function_exists('the_custom_logo') && has_custom_logo()) {
    the_custom_logo();
} else {
    // fallback to site title
    echo '<a class="site-logo" href="' . esc_url(home_url('/')) . '" rel="home">';
    echo '<h1>' . esc_html(get_bloginfo('name')) . '</h1>';
    echo '</a>';
}

echo $args['after'] ?? '';


$logo_mobile  = chani_get_opts( 'logo_mobile', array(
	'id' => '',
	'url' => get_template_directory_uri() . '/assets/images/logo/logo-mobile.png',
), 'header_custom');
$logo_mobile_url = $logo_mobile['url'];
$logo_sticky_mobile_url = $logo_mobile['url'];

$logo_light     = chani_get_opts( 'logo_light', array(
	'id' => '',
	'url' => get_template_directory_uri() . '/assets/images/logo/logo-light.png',
), 'header_custom');
$logo_light_url = $logo_light['url'];

$logo_light_mobile = chani_get_opts( 'logo_light_mobile', array(
	'id' => '',
	'url' => get_template_directory_uri() . '/assets/images/logo/logo-light-mobile.png',
), 'header_custom');
$logo_light_mobile_url = $logo_light_mobile['url'];

// Header Transparent
if(chani_get_opts('header_transparent', 'off', 'header_custom') == 'on'){
	$logo_url        = $logo_light_url;
	$logo_mobile_url = $logo_light_mobile_url;
}
// printf('%s', $args['before']);
// 	printf(
// 		'<a class="site-logo" href="%1$s" title="%4$s" rel="home"><img width="%2$s" height="%3$s" alt="%4$s" src="%5$s" data-logo="%5$s" data-mobile="%6$s" data-sticky="%7$s" data-sticky-mobile="%8$s" /></a>',
// 		esc_url( home_url( '/' ) ),
// 		esc_attr($logo_w),
// 		esc_attr($logo_h),
// 		esc_attr( get_bloginfo( 'name' ) ),
// 		esc_url( $logo_url ),
// 		esc_url( $logo_mobile_url),
// 		esc_url( $logo_sticky ),
// 		esc_url( $logo_sticky_mobile_url)
// 	);
// printf('%s', $args['after']);