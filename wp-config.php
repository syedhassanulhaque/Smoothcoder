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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'nA>)l-EF%{tm1<i;9V$P:)u@jW.+,8rYIoQ$1<eE/5fWZ[UN0<v_/R2ypT1@8kq(' );
define( 'SECURE_AUTH_KEY',  'f7wxALEyb4R`d4n/r.F# _S}dWIjm%D^tKHy$x,.HBth$RZSoxIwgF)7r5I1A;dk' );
define( 'LOGGED_IN_KEY',    'YcAR*WAxYrGE00p4EUS4gA$.P^k.wEanlBw+*U[1p*LsoJ/zw,QYGT&_q>;TmR;/' );
define( 'NONCE_KEY',        'vXg$Gy+:44q_YqpJ+W?34]7@~tz %5Sc9**^lT_Q1)2IAvSdtYR{`^%`Y!kJcF,(' );
define( 'AUTH_SALT',        '}o6o_Jmj|mW12x`Bq5%[F-KZsl>E.+~m,Ak7iz;2DXFHCR Nn:Y,4&)@zQbcNG O' );
define( 'SECURE_AUTH_SALT', ')JyJ3HFk,t:c2?B hb%bcAU~j^rbd7-q]?/-sXVv,IZY)U^>Kbt=|c&!I09YQd?1' );
define( 'LOGGED_IN_SALT',   '`Ts#AeO(Spj;tyS*nDjbl18Nc#5=,`;T%Rt1)=NXPAJcn[f$hN*K64tP79B-~Mvh' );
define( 'NONCE_SALT',       '@BdacX`*.2qcZIv2V(oiPEx+]wOIZ_5K#~s_&T+H2u#2^1uxYhbAM4zPJGG<Q`Q:' );

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
