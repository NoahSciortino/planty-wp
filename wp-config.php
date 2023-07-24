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
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}


define('AUTH_KEY',         '+BJM/v8UlmJ64W0t5jsQAvE7+Bvnw/ROad8k0wsRtzVl3D0dwzINymmU+4RldWrGqwv9e0ZIYG06wa7tnGuQ8g==');
define('SECURE_AUTH_KEY',  'ENTpF9ltTZUeouhtjMaIs1N+NvjxWhMWG/a/WfpHUBtCJ7af/UpPnjGB328Tf+UHqJMXRDm9PPlOF5bjl4m3nQ==');
define('LOGGED_IN_KEY',    'hdQ/etjjlueSFit/hpYrn45ItEuNGKz5aFuvZzi95RqXW9agZ5T6/+cbF2lY3eIpdeLnaAhVlufICB1uWiN0cg==');
define('NONCE_KEY',        's3bNEOpxZ1Vc8a/hQEq+Obo10Alz6rxc/tAQgGSsVZYzASrLNDiGr1JK0NntpOHYvEHeX1dI5CI2njpXRmNgLQ==');
define('AUTH_SALT',        'C6o6hBfe3fcVPjcLD0FTomQqXqw6uSUDcJzwESjjYr0qJWiBZ8rQP00/yjsxj4wkl+P/vPqrOvzAzDdBXtRAQw==');
define('SECURE_AUTH_SALT', 'Vh4reg376UjUsQ3Jbma4umxefV93tMyHy0u7kXLl44yWyWi3+jLwaDhaJFYBSkCaIPe/2sNgm71i0FIJc3MW6Q==');
define('LOGGED_IN_SALT',   'FZ2jNA3QcQaGAcQz4oYMLvrBOID9wpZs4kdOa7ioiySHhTmWZ2QVR67Z7G27+bYwxSmmDmS+hBYHERzNvrPTyQ==');
define('NONCE_SALT',       '0QDyKVSLGUmUFx1+8QoFT7gOFEqGZyStpTDVsVtjO6afzCUvlTwwopoMY8Hcka/u1ngc2BvxT+AEToyrsGEbzA==');
define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
