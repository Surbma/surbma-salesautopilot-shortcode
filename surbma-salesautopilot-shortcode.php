<?php

/*
Plugin Name: Surbma - SalesAutopilot Shortcode
Plugin URI: http://surbma.com/wordpress-plugins/
Description: A simple shortcode to include SalesAutopilot forms into WordPress.

Version: 1.1.1

Author: Surbma
Author URI: http://surbma.com/

License: GPLv2

Text Domain: surbma-salesautopilot-shortcode
Domain Path: /languages/
*/

// Prevent direct access to the plugin
if ( !defined( 'ABSPATH' ) ) exit( 'Good try! :)' );

// Localization
function surbma_salesautopilot_shortcode_init() {
	load_plugin_textdomain( 'surbma-salesautopilot-shortcode', false, dirname( plugin_basename( __FILE__ ) ) . '/languages' );
}
add_action( 'plugins_loaded', 'surbma_salesautopilot_shortcode_init' );

function surbma_salesautopilot_shortcode_shortcode( $atts ) {
	extract( shortcode_atts( array(
		"listid" => '',
		"formid" => '',
		"width" => '100%'
	), $atts ) );
	return '<div style="width: '.$width.';"><script type="text/javascript" src="https://d1ursyhqs5x9h1.cloudfront.net/sw/scripts/embed-iframe-form.js?listId='.$listid.'&formId='.$formid.'"></script></div>';
}
add_shortcode( 'sa-form', 'surbma_salesautopilot_shortcode_shortcode' );
