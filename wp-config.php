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
define( 'DB_NAME', 'gyantask' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         '_&by+KW}~LAd%Ik9Z;>{%m=NHGy>]x,L@++s<ME<KH#?@&pQf!Jy-IAA*FOo+#Ve' );
define( 'SECURE_AUTH_KEY',  'rx?~+w.h+)<,C18S.:Of3=B<Q{LK#mc`rfv!~(OjU]+@!2`,O+I6.p+P`8e%#n,l' );
define( 'LOGGED_IN_KEY',    '1/jF2/O`=kV{Pv5~vFds6Ix,n@hiN&O>XCSTC?D?JSRg~I2$.,x1ewQ<54<l9 KT' );
define( 'NONCE_KEY',        '6OE;IX:o[waoShY*=TQn,?Oq!fK{3l-AJUl=M]Prex4cR^hIg/F=MDI,~/3bp]&a' );
define( 'AUTH_SALT',        'fz`}}TE|y<bI,|wI=G6Z1ky3}g8(i`%gVS]3kNWuS}hx^X<@l7geT=BbyVj-iNM:' );
define( 'SECURE_AUTH_SALT', 'ReYE^VeL[W,X`x{pX,|$G2RU-=+0N<},z)t6H*[x|rt2GkW<dX`W<sEUU~T4Oz)^' );
define( 'LOGGED_IN_SALT',   '7vr/tzpyKIdOk4Ulor0H7nx7FV%Vp@`F@m@.GGW28Wq(M?;taN/UV(l6/c%BP(@F' );
define( 'NONCE_SALT',       'gUYE$y[NqcuSx-)[3<rc<A/*R$T3_Gb hqMAK2)i,r2vrChlvBL>&?U[C/Q_:WZP' );

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
define('FS_METHOD','direct');
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
