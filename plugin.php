<?php
/**
 * Plugin Name: Select Editor Template
 * Plugin URI: https://github.com/happyprime/select-editor-template/
 * Description: Select a block layout from a predefined list of templates.
 * Author: jeremyfelt
 * Author URI: https://happyprime.co/
 * Version: 1.0.0
 * License: GPL2+
 * License URI: https://www.gnu.org/licenses/gpl-2.0.txt
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// This plugin uses namespaces and requires PHP 5.3 or greater.
if ( version_compare( PHP_VERSION, '5.3', '<' ) ) {
	add_action( 'admin_notices', create_function( '', // phpcs:ignore WordPress.PHP.RestrictedPHPFunctions.create_function_create_function
	"echo '<div class=\"error\"><p>" . __( 'Select Editor Template requires PHP 5.3 to function properly. Please upgrade PHP or deactivate the plugin.', 'select-editor-template' ) . "</p></div>';" ) );
	return;
} else {
	require_once plugin_dir_path( __FILE__ ) . 'includes/select-editor-template.php';
}
