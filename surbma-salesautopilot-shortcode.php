<?php

/*
Plugin Name: Surbma | SalesAutopilot Shortcode
Plugin URI: https://surbma.com/wordpress-plugins/
Description: A simple shortcode to include SalesAutopilot forms into WordPress.

Version: 2.3

Author: Surbma
Author URI: https://surbma.com/

License: GPLv2

Text Domain: surbma-salesautopilot-shortcode
Domain Path: /languages/
*/

// Prevent direct access
defined( 'ABSPATH' ) || die;

// Localization
add_action( 'init', function() {
	load_plugin_textdomain( 'surbma-salesautopilot-shortcode', false, dirname( plugin_basename( __FILE__ ) ) . '/languages' );
} );

add_shortcode( 'sa-form', function( $atts ) {
	extract( shortcode_atts( array(
		"listid" => '',
		"formid" => '',
		"width" => '100%'
	), $atts ) );
	return '<div style="width: ' . esc_attr( $width ) . ';"><script type="text/javascript" src="https://d1ursyhqs5x9h1.cloudfront.net/sw/scripts/embed-iframe-form.js?listId=' . rawurlencode( $listid ) . '&formId=' . rawurlencode( $formid ) . '"></script></div>';
} );
