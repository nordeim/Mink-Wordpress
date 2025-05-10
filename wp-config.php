<?php
define( 'WP_CACHE', true );
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
define( 'DB_NAME', 'u385792050_3gn7O' );

/** Database username */
define( 'DB_USER', 'u385792050_OeRMX' );

/** Database password */
define( 'DB_PASSWORD', 'rA8YckTqTw' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',          '+JPe>T/7oX)r%Tp.LqTOd48UR}q;Dg]1Ge`?awnYn9pJw_Q8#lHh$-[kw9;cfGns' );
define( 'SECURE_AUTH_KEY',   'd|[AR^DjitYr]:0}K!2tNO5vs}d<W-s+/mjZ7A*YMMM?xL+GVn]bpZ)ld^EGl<#x' );
define( 'LOGGED_IN_KEY',     'E9C#|C-J%+J[-yW#9IJ`j$C[ROL&wk@}W&7PUW+ot}MKS25lFKT^n%z[l~6z}1K%' );
define( 'NONCE_KEY',         '9e=S-~1WkBm$T1$]Eoe>KD-2WJB5?rFRBgA(Gwz^+TOXcsE-)rIf&6MazF_H;)E?' );
define( 'AUTH_SALT',         's,e/$p{2f+ ns9c6swyqaiI-x&5H[1^-J(sUE9Ah;w3!;,iA`-dkM:Ph|Mb6yxRT' );
define( 'SECURE_AUTH_SALT',  '},Cq}O)D|(+K![{i4TaIW|3;Or ~1$$wkfaCIU=}D2DM+Bn)N+M[8YX5O(%R|{*B' );
define( 'LOGGED_IN_SALT',    '4-UaA|x-:Y4CDjs+8CB]:]?CIYt~c[sEDC>^/syrk<S?R^Rlr#<7~?ceX,1bZ<=+' );
define( 'NONCE_SALT',        '2S5_rn[>In>ClQ.w]+etHXFwQ2Ar ZO/8A:uj|r7m-o?{4,uP)T$@h[u*COSM0iT' );
define( 'WP_CACHE_KEY_SALT', 'Z1 Euiw5X,oc~4}Q309.xppSrF#&*&Ido?oHiXC%[w6:bAd`(_=tND6<wo WX@{h' );


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

define( 'FS_METHOD', 'direct' );
define( 'COOKIEHASH', 'df417f42c66271f319963573d91a53f3' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
