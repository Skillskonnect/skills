<?php

namespace Bookit\Classes\Database;

use Bookit\Classes\Vendor\DatabaseModel;

class Staff_Services extends DatabaseModel {

	/**
	 * Create Table
	 */
	public static function create_table() {
		global $wpdb;
		require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
		$table_name     = self::_table();
		$primary_key    = self::$primary_key;

		$sql = "CREATE TABLE {$table_name} (
			id INT UNSIGNED NOT NULL AUTO_INCREMENT,
			staff_id INT UNSIGNED NOT NULL,
			service_id INT UNSIGNED NOT NULL,
			price DECIMAL(10,2) NOT NULL DEFAULT 0.00,
			PRIMARY KEY ({$primary_key}),
            INDEX `idx_staff_id` (`staff_id`),
            INDEX `idx_service_id` (`service_id`)
		) {$wpdb->get_charset_collate()};";

		maybe_create_table($table_name, $sql);
	}
}