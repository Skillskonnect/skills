<?php
/**
Plugin Name: eRoom - Zoom Meetings & Webinar
Plugin URI: https://wordpress.org/plugins/zoom-video-conference/
Description: eRoom Zoom Meetings & Webinar WordPress Plugin provides you with great functionality of managing Zoom meetings, scheduling options, and users directly from your WordPress dashboard.
The plugin is a free yet robust and reliable extension that enables direct integration of the world's leading video conferencing tool Zoom with your WordPress website.
Author: StylemixThemes
Author URI: https://stylemixthemes.com/
Text Domain: eroom-zoom-meetings-webinar
Version: 1.2.9
*/

if( !defined( 'ABSPATH' ) ) exit; //Exit if accessed directly

define( 'STM_ZOOM_VERSION', '1.2.9' );
define( 'STM_ZOOM_DB_VERSION', '1.2.8' );
define( 'STM_ZOOM_FILE', __FILE__ );
define( 'STM_ZOOM_PATH', dirname( STM_ZOOM_FILE ) );
define( 'STM_ZOOM_URL', plugin_dir_url( STM_ZOOM_FILE ) );

if ( ! is_textdomain_loaded( 'eroom-zoom-meetings-webinar' ) ) {
    load_plugin_textdomain(
        'eroom-zoom-meetings-webinar',
        false,
        'eroom-zoom-meetings-webinar/languages'
    );
}

require_once STM_ZOOM_PATH . '/zoom-app/vendor/autoload.php';
require_once STM_ZOOM_PATH . '/includes/helpers.php';
require_once STM_ZOOM_PATH . '/nuxy/NUXY.php';
require_once STM_ZOOM_PATH . '/zoom-conference/init.php';
require_once STM_ZOOM_PATH . '/vc/main.php';

if ( did_action( 'elementor/loaded' ) ) {
    require( STM_ZOOM_PATH . '/elementor/StmZoomElementor.php' );
}

if ( is_admin() ) {
	require_once STM_ZOOM_PATH . '/includes/item-announcements.php';
	require_once STM_ZOOM_PATH . "/libs/admin-notification/admin-notification.php";
	$init_data = [
		'plugin_title' => 'eRoom - Zoom Meetings & Webinar',
		'plugin_name' => 'eroom-zoom-meetings-webinar',
		'plugin_file' => STM_ZOOM_FILE,
		'logo' => STM_ZOOM_URL . 'assets/images/zoom_icon.png'
	];
	stm_admin_notification_init( $init_data );
}
