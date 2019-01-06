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
define('DB_NAME', 'buywowgo_yarn');

/** MySQL database username */
define('DB_USER', 'buywowgo_yarn');

/** MySQL database password */
define('DB_PASSWORD', 't285hxcp');

/** MySQL hostname */
define('DB_HOST', 'buywowgo.mysql.tools');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'yk6YS*WdW213WrPIbNfgJKG&Acd2On6#rux7jVnAOzc8WK#8!ulw85ZFUjMan%7)');
define('SECURE_AUTH_KEY',  '#IAh%#DiQUbNcgTdmgBPY*ktb)Qq@YN9%g2fbdnN%vIbpwM7O2mL@zgAhlXv@ee(');
define('LOGGED_IN_KEY',    'wI^hQ(ENuv#IGrRYS)558w9hJgOlvBp20Cja*770oE%N7VHU#)rq!4zmrLumz6oc');
define('NONCE_KEY',        'hxv7kDVI&uWM)7aBg)H)C&dTNMNB3OLRrpqYaR#pXjosrYF^Z)tZVY38YPIBbuKf');
define('AUTH_SALT',        '%LgO0X5j%YOvjF7s)RV(G4MjrvX1*(7fy9ZjkWtb*lEUqn6C)xSqfO2C)5SGxf6#');
define('SECURE_AUTH_SALT', '#MHunY*D8L9B#sIbzQ7^Eo&2gFkBJ4cT7Rp7U8qL2dbAh9r9acF50ZS)6UN@9&tV');
define('LOGGED_IN_SALT',   'h(G@x1j!cFgjyPgpCKf0)(r!RP#QU37Uu7%wlh0aW78Tu^&UcMAWK2*23INyRw@C');
define('NONCE_SALT',       '8)7iNpN*extIOEtjSVVMFeE6CqzjV000W4b&awBGNIRz#N59Md^a4G49HIyeb!oR');
/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

define( 'WP_ALLOW_MULTISITE', true );

define ('FS_METHOD', 'direct');
