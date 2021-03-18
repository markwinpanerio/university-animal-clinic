<?php

function webFX_importTemplate( $tpl, $vars = array() ) {
	$tpl  = ltrim( $tpl, '/' ) . '.php';
	$path = locate_template( array( $tpl ) );
	if ( empty( $path ) ) {
		throw new LogicException( "Cannot locate the template '$tpl'." );
	}
	extract( $vars );
	include $path;
}

if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'position'      => '7.4',
		'icon_url'      => 'dashicons-info',
		'page_title' 	=> 'Theme Options',
		'post_id'       => 'theme_options',
	));

}

function register_navwalker(){
	require_once get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );