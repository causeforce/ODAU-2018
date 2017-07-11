<?php
/**
 * Header Builder: Main loader file
 *
 * @since 0.1.0
 */

// Load the constants, etc.
require_once dirname( __FILE__ ) . '/hb-config.php';
require_once HB_INCLUDES_DIR . '/helpers/array.php';
require_once HB_INCLUDES_DIR . '/class-hb-grid.php';

if ( is_admin() ) {
	require_once  HB_ADMIN_DIR . '/class-hb-db.php';
    require_once HB_ADMIN_DIR . '/class-hb-screen.php';
}

add_action( 'admin_menu', '_hb_add_admin_menu' );
function _hb_add_admin_menu() {
    add_submenu_page( THEME_NAME, __( 'Header Builder', 'mk_framework' ), __( 'Header Builder', 'mk_framework' ), 'edit_theme_options', 'header_builder', '__return_null' );
}

add_filter( 'submenu_file', '_hb_add_return_query_tag' );
function _hb_add_return_query_tag() {
	global $submenu;
	
	$current_url        = ( is_ssl() ? 'https://' : 'http://' ) . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
	$header_builder_url = add_query_arg( 'return', urlencode( $current_url ), 'admin.php?page=header_builder' );
	
	// The following position needs update if the header builder submenu location changes.
	$submenu['Jupiter'][14][2] = $header_builder_url;
};

add_filter( 'query_vars', '_hb_add_query_vars_filter' );
function _hb_add_query_vars_filter( $vars ) {
	$vars[] = 'header-builder';
	return $vars;
}

add_filter( 'template_include', '_hb_preview_template', 99 );
function _hb_preview_template( $template ) {
	if ( 'preview' === get_query_var( 'header-builder' ) ) {
		return HB_INCLUDES_DIR . '/templates/preview.php';
	}

	return  $template;
}
