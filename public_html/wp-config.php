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
define( 'DB_NAME', 'i6206748_wp1' );

/** MySQL database username */
define( 'DB_USER', 'i6206748_wp1' );

/** MySQL database password */
define( 'DB_PASSWORD', 'D.S6yumxrg5hLTthUSy58' );

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
define('AUTH_KEY',         'aaw7AAPC9hfDuyoSXP5CmnjqTFEp8tYcQKOBDnpVK1w6dUyZ03agjwISGXaa3dSn');
define('SECURE_AUTH_KEY',  'AKD0oZTBwlJDZnLyIvU2OIu9RORr3blP3G66JRG1YhU9ZNR9yigUmfiZTHOzLYbg');
define('LOGGED_IN_KEY',    'cCDJOgxwnOICYbcuKF8QPyr8xPP6bkFGIoSt9WRuBK51lOeRcVNr3Rs13l4O4s4O');
define('NONCE_KEY',        '9iSlRB7R6VpJ1QoCqBRdAtNCiaR1F6r2ToisHbeQIuUDO88QKDMZB9UeZwhGwTSN');
define('AUTH_SALT',        'QO77BgLVCRT383Nb85gHdZWPPl4xEaNJC5elxpcEML5C3W1HZublIkif7Ar6wz29');
define('SECURE_AUTH_SALT', '8yuLNqTG73BqEjusNC9WdzMTmz8HFqVsI2dybuqsIVmY81FB0aoQXjbVdDowvKFG');
define('LOGGED_IN_SALT',   'N65IJZCm0B0GzL8yTfhcUnLqUK8Bq9ymIPDx0Y6nOqKBdOgfe6cNkyI4yJ6pa5MH');
define('NONCE_SALT',       'bmA0NyGuznc1OsqGRewSKqc2I9EH9dtG5i0akZED6z52Mg0Chov7VsxC9RFXJP8G');

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
