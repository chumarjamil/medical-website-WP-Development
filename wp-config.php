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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'i5558148_wp4' );

/** MySQL database username */
define( 'DB_USER', 'i5558148_wp4' );

/** MySQL database password */
define( 'DB_PASSWORD', 'N.FmUVzOSIHfugaf90445' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define('AUTH_KEY',         'n44usNbgAEtoxOf8SjfE31TEvyiHDF1HdA1xUfyGHK58L2XoCXQKaSWQvmmZqkUR');
define('SECURE_AUTH_KEY',  '5rxfs9d2AGpib9w4iRYVGb6RhZygEttfofze9glNrPipGseL1hycuDPIQuz4wGW2');
define('LOGGED_IN_KEY',    'OEByQwSi3p9gFziYryTcs4bs6LHky0E0GYXNFwke6Tqjs2Dw4BzHHtFujU0pyxgm');
define('NONCE_KEY',        'qQM1h5j7uxesVsmF4MSOwxMKnTZV6AXFXgK3VfrLOEPskQQux7S0AT5RY5tSEwuD');
define('AUTH_SALT',        '0z4Xrn8KifTRVqPRQAf6NSMRlq5TwNU7uKBMoWGlyKmKwERAbflTTf5dITfwx2tp');
define('SECURE_AUTH_SALT', 'Y0zltnyZZXKFntEuDAjDn0iZhb3wTiTUrBn4UBky0DuNXEVaY67r3IXmH3hExQHE');
define('LOGGED_IN_SALT',   'eJUiPHK5AQO2vCZn2pArp33y8WOHX6AvuFiSp4kw4N8cb3IFK0hDqDPRfcOq25LE');
define('NONCE_SALT',       'AQvAaz8rb5z5nhEi0QLaWhpQXA3AmekkhfBXTUoYd8Mx9jJ9N4lYdESuXRqOmO2m');

/**
 * Other customizations.
 */
define('FS_METHOD','direct');
define('FS_CHMOD_DIR',0755);
define('FS_CHMOD_FILE',0644);
define('WP_TEMP_DIR',dirname(__FILE__).'/wp-content/uploads');

/**
 * Turn off automatic updates since these are managed externally by Installatron.
 * If you remove this define() to re-enable WordPress's automatic background updating
 * then it's advised to disable auto-updating in Installatron.
 */
define('AUTOMATIC_UPDATER_DISABLED', true);


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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
