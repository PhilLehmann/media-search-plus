<?php
/**
 * WP Media Search, fork of Media Search Enhanced.
 *
 * Search through all fields in Media Library.
 *
 * @package   Media_Search_Enhanced
 * @author    1fixdotio <1fixdotio@gmail.com>
 * @license   GPL-2.0+
 * @link      http://1fix.io/media-search-enhanced
 * @copyright 2014-19 1Fix.io
 *
 * @wordpress-plugin
 * Plugin Name:       WP Media Search
 * Plugin URI:        https://github.com/PhilLehmann/wp-media-search
 * Description:       Search through all fields in Media Library.
 * Version:           0.8.2
 * Author:            PhilLehmann
 * Author URI:        http://phil.to
 * Text Domain:       wp-media-search
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Domain Path:       /languages
 * GitHub Plugin URI: https://github.com/PhilLehmann/wp-media-search
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/*----------------------------------------------------------------------------*
 * Public-Facing Functionality
 *----------------------------------------------------------------------------*/

require_once( plugin_dir_path( __FILE__ ) . 'public/class-wp-media-search.php' );

/*
 * Register hooks that are fired when the plugin is activated or deactivated.
 * When the plugin is deleted, the uninstall.php file is loaded.
 *
 */

add_action( 'plugins_loaded', array( 'Media_Search_Enhanced', 'get_instance' ) );