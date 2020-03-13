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
define( 'DB_NAME', 'i806193_wp8' );

/** MySQL database username */
define( 'DB_USER', 'i806193_wp8' );

/** MySQL database password */
define( 'DB_PASSWORD', 'T.6L9RvmLgsWxVbKtqH96' );

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
define('AUTH_KEY',         'oeLxjJGzZX6EEJGHnph25HTUtVcPPFOcbkcuV02Xrg1MUBpP6YqOC7jh55GTE6QZ');
define('SECURE_AUTH_KEY',  'sQlgHlHM9awBCY4ezIuXhHg9ScGikKIyH1lDwt5sK0OXFZW4jWf3hZK8oulmCzdn');
define('LOGGED_IN_KEY',    'jYMxcDl8CUxGsaz4A2Qex7IDzzwAOFd0jxPuYVyFYYN91pV1ioIe6e2Q7RGStpqY');
define('NONCE_KEY',        'uISJpTiemQ83CM2Py43WbZkF13GaHjizXX87rdDFZ447CASSX9V8rRdA5eoopUci');
define('AUTH_SALT',        'PwsAFPPC5RgG3mimOAyUt0f7qDC905DmLNa8VXiPUJJOzjhvWFjl2HGNVDft6Z2l');
define('SECURE_AUTH_SALT', 'I4X99mtBXIr1lUOCWHTOJlw4bYHvRbsjytXm86OhOsXuWZPEuPvNQf8Zq3W8oHiF');
define('LOGGED_IN_SALT',   'U4EESVhmGp2DCRqBvTS6nmHHg2axqqyuZrDqDgwJn12ZT86C4Xvx2tiR1qL0TzFu');
define('NONCE_SALT',       '9IZpRxz7tBrbo1OClG1qGtS2CcyQ1GyEbhWWDCJeQPcmYhMcWkWSI044FwgF35rY');

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
