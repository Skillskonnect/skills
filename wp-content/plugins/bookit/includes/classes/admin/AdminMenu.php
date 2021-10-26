<?php

namespace Bookit\Classes\Admin;

use Bookit\Classes\Database\Appointments;

class AdminMenu {

	/**
	 * Init AdminMenu Class
	 */
	public static function init() {
		add_action( 'admin_menu', [self::class, 'admin_menu_pages'] );
		add_filter( 'plugin_action_links_' . plugin_basename(BOOKIT_FILE), [self::class, 'plugin_action_links'] );
	}

	/**
	 * Register Admin Menu pages
	 */
	public static function admin_menu_pages() {
		add_menu_page(
			'BookIt Calendar',
			'BookIt Calendar',
			'manage_options',
			'bookit',
			'Bookit\Classes\Admin\CalendarController::render',
			'dashicons-calendar-alt',
			30
		);

		// Add Calendar Submenu
		add_submenu_page(
			'bookit',
			'Calendar',
			'Calendar',
			'manage_options',
			'bookit',
			'Bookit\Classes\Admin\CalendarController::render'
		);

		// Add Appointments Submenu
		$pending = Appointments::pending_appointments();
		add_submenu_page(
			'bookit',
			'Appointments',
			$pending ? sprintf( 'Appointments <span class="awaiting-mod">%d</span>', $pending ) : 'Appointments',
			'manage_options',
			'bookit-appointments',
			'Bookit\Classes\Admin\AppointmentsController::render'
		);

		// Add Services Submenu
		add_submenu_page(
			'bookit',
			'Services',
			'Services',
			'manage_options',
			'bookit-services',
			'Bookit\Classes\Admin\ServicesController::render'
		);

		// Add Staff Members Submenu
		add_submenu_page(
			'bookit',
			'Staff',
			'Staff',
			'manage_bookit_staff',
			'bookit-staff',
			'Bookit\Classes\Admin\StaffController::render'
		);

		// Add Customers Submenu
		add_submenu_page(
			'bookit',
			'Customers',
			'Customers',
			'manage_options',
			'bookit-customers',
			'Bookit\Classes\Admin\CustomersController::render'
		);

		// Add Settings Submenu
		add_submenu_page(
			'bookit',
			'Settings',
			'Settings',
			'manage_options',
			'bookit-settings',
			'Bookit\Classes\Admin\SettingsController::render'
		);
		add_submenu_page(
			'bookit',
			__('Add-ons'),
			'<span style="color: #adff2f;"><span style="font-size: 15px;text-align: left;" class="dashicons dashicons-star-filled stm_go_pro_menu"></span>' . __('Add-ons') . '</span>',
			'manage_options',
			'bookit-addons-integrations',
			'Bookit\Classes\Admin\DashboardController::render_addons'
		);
	}

	/**
	 * Add Custom Links to Plugins page
	 * @param $links
	 * @return mixed
	 */
	public static function plugin_action_links($links)
	{
		$settings_link = sprintf( '<a href="%1$s">%2$s</a>', admin_url( 'admin.php?page=bookit-settings' ), esc_html__( 'Settings', 'bookit' ) );
		array_unshift( $links, $settings_link );
		return $links;
	}
}