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
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wst' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
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
define( 'AUTH_KEY',         'ST->3L{>h?R+nvKo#11n|cpJv~Vrus>p@}N^V468Dd2Js }x2NP+)tOii-.r$WcG' );
define( 'SECURE_AUTH_KEY',  'l/N44v!c1I?gK$+_LdA w(Ru{ef:2oosx6se&}~}D^2Ui30?]F{X<s>tW78E@4ZE' );
define( 'LOGGED_IN_KEY',    '9?G2!5H)oDLNQ5SBoyJ|o3/[=)bgVVy%1~kuJ}D0d! u5q5cv[*bPonV0?&BEXRt' );
define( 'NONCE_KEY',        'k+!;S[&MGnGE5?H<8V@G]{lD#TU:=Ck/mH-AC$|?id29+L3bZK&Ax/h/4W{U;l6o' );
define( 'AUTH_SALT',        'F{RQrfb)-,$>#?IQGe$PLh2Q}<L%+`I5P~XsOs:S<_`zF<fkka0_vHZw%C0 rV#o' );
define( 'SECURE_AUTH_SALT', 'zQL]f:1V`0zn/a%&8>w /zWm,l.$(.cIRF@1zI]r{y]vEr`,J9Z8;IX($J?p<7#3' );
define( 'LOGGED_IN_SALT',   'iteGpW{,z56mZ}.|{C7:-!=i=NY}WMUD.0!WC0Ry7Q$XLvOrHUQo2Px}ez,j~RUp' );
define( 'NONCE_SALT',       'GJz.TtCQ^uI0w742M.pP]IfYi<:N1p56w0SzwFeZ-BX/&1j[l- bO`R>mo,;Je@Q' );

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
