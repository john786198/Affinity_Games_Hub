<?php
define( 'WP_CACHE', true /* Modified by NitroPack */ );
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
define( 'DB_NAME', '7t1' );

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
define( 'AUTH_KEY',         '3 +Xh@*H0LmP[PHxC12kJ&jU+-*x.N&/LcHukTC7_p`>~#NWk,e!M$S|Xb}YHqi3' );
define( 'SECURE_AUTH_KEY',  '2Sl&ZV^4xt@b@k7LV<*jS&m ?]_JvQ0|ketXA9WWeEb<Xa0f;`/OcKs ljmL?$~h' );
define( 'LOGGED_IN_KEY',    'cs#CV;C+gO#+LP(;(~|h4RD4c|cO hBB1z.%M0u,VX<2U;&R|(4Gt5;+A,0?).SM' );
define( 'NONCE_KEY',        ',BdnnM4?_27`@W~b!ajhd;GPLvZ.lIq$a1Q.9XAtK#at8Nl]3O=0bAFWME+|3JzR' );
define( 'AUTH_SALT',        'w5k6AaT/;.d:=gZ;>h.Utwj3.u$SahaTy!?t?@qn6?_8YjF!]{1zb<<uKcA9%uEF' );
define( 'SECURE_AUTH_SALT', '#aCkG_l-b VIeDu+@zp1r[B>i}S.EI.J#f A|1Z%kY4Tv;Xp&L0S>UQqeQ7G$5_C' );
define( 'LOGGED_IN_SALT',   'quxRd,sZC*=cHLVS%2eEZEp*{zkMkao={M?JUfAjCL@`5FWTE^;%~#N-E:}A2K<>' );
define( 'NONCE_SALT',       'S4W@uYrK]kc4jvT9YN4+THBM!Xcs`iE3Y`xN<qA0rt%VG%FrkzT8Ak9D=^,`b#Y<' );

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
