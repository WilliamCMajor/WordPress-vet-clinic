<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
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
define('DB_NAME', 'she8_vetclinic_siqing');

/** MySQL database username */
define('DB_USER', 'she8');

/** MySQL database password */
define('DB_PASSWORD', 'ZoWa89pmsu9qD5o');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', 'AW160d1POoCKTGMa7rC5WMTVFDZlrobntRIMv6InT9gDL8wCmynmeqBdH1JFWAKV');
define('SECURE_AUTH_KEY', 'g6CjSuzlT2Uct2nDBS9lRml9gF8pTWcXoFoxgZQFlXt3QU0oI1G1F2ZiPawBmMog');
define('LOGGED_IN_KEY', 'FI0gYQYLlVesqQIRiMKQOhiCl3ysGbM0ANhsnbgKmjDc7yReSnhkEvAuMNXS0I7J');
define('NONCE_KEY', 'Xfhqrkkk1DvKeKvRK6D3BrqwJlXkiLKCuj5Jr0xIiXmZ6qVIJ3vvgNGORFYCsPS5');
define('AUTH_SALT', 'xvs3gFjmIJ4icAlzFaSczvvevVXkTEwGNvIKVHvI0tzfSHAmUhCIiVMSYH953nlb');
define('SECURE_AUTH_SALT', 'mrHrCOqPFAaEqGTstyh2jAqEZMoiEib3sJXh5b9P4dDfSFFb8YnOxSec30MVISxb');
define('LOGGED_IN_SALT', 'G9LgrTsmokWw5bm6k8PPtiyEJG1JicHNXDF6e5R2bvVxCgpAP31tlDlVS57t9ILS');
define('NONCE_SALT', 'SbHienpsIgtDRNadlr2vZNmOVtytVyqEPu4I92HDRYA5UVSqSPmBkuuBYh0qmXDs');

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
