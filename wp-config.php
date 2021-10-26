<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'skills' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'W7 M6@6&x2T(iSA:9{gd8TJ[H3W;,_PL(NR~w!zi7hx!i%Y0?cS2I&8E_e-CYQjh' );
define( 'SECURE_AUTH_KEY',  ')!T8Pi@A0X[k9g2Cp$VTp;-wBBT!Blss2YS:@7lgpdU/<Nw~=+#cq5YF|*Sl&9$Z' );
define( 'LOGGED_IN_KEY',    'f;|oIR)<YNgT-`@! Gv>/)l!s2>^!m4v)6^SQgZ([lYvPSc`o>v><^xT#4Bt5tNP' );
define( 'NONCE_KEY',        'q=DKmr?4T)j=9/}/=^qP}c3K7oNNAhRP-:>9=Dbe<_C+Gcfj2>wI&D#v(y4xaTB ' );
define( 'AUTH_SALT',        '%#DH8m}p6EZ*nG:c;iTtCE:DH$S<573LoeZc.]m$;+u`M/S(`NtLE*8/]OD)r6.F' );
define( 'SECURE_AUTH_SALT', '[#39$3+quN{7V-E5ypim%m!Eke}|d-{1_ 3hh-^,FEoGL*<65.TFv|<Hd`As[+EB' );
define( 'LOGGED_IN_SALT',   'wrG!G[&^pYD6CuiiBEc9},4h}2Ey|-w[C=8zzA(+k>WYOST}8?7B 6OV.{rpuUz3' );
define( 'NONCE_SALT',       'I2xhd0!=t4E1jfd.>0^mYn/D/n_6En;;?IdvmoMXSqpoMm==Lr&g3}0]G0It=!iG' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
