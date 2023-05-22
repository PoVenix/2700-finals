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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'finals-po' );

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
define( 'AUTH_KEY',         'LXTe:z!d],</?7liXILNB/$35<t^byD+;`:,BD/4q>cK?Z@&j:XD-&Bc^.#,X!_}' );
define( 'SECURE_AUTH_KEY',  '=2HtJ=vRqIE%kptI@d5Te[T>K(_H]_KkN.e95G*pYgKABAxLEe)W|/ln:y$q9Sp-' );
define( 'LOGGED_IN_KEY',    '(?U4=#kVX8%<8%%D5ck{ng`gm+`a[;)JzNa&&qE}^(]79_xSeDW2(oEnBd@xR)W.' );
define( 'NONCE_KEY',        'x_F@>5z%j)c>>H)&)SwT0vLJq6]GB8g_UY^kN}/}{*}8~ijt:63Y1<E|s@PHug@o' );
define( 'AUTH_SALT',        '}(=[`-SPYF;v^gYcV[+LJst)L{-#4!CSi.mlJZXSOkI29z_I|^IDrU$wKrSc!Vy4' );
define( 'SECURE_AUTH_SALT', '}X9)KMCv@3s0I?4P$^qki17*[m!G;pt6,O-v^8}i$n:6t!;%n}%LLJ*F4R=BCn)#' );
define( 'LOGGED_IN_SALT',   'ShmfJNn%>J012j!rm.;cVUc{Z,mwUN?=7f|1%=}@lV&{q>LRKG:*:Qu>up(ESPbT' );
define( 'NONCE_SALT',       'F@fBp1S`$]d=d6s2cBr,di}pV37QvTZ H>VfS+_W~&(+Gnpa}VAW!2+sd`QFsU0P' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
