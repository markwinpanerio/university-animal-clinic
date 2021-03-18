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
define( 'DB_NAME', 'wp_university_animal_clinic' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '/hi-J7<NSeEvhTp/~2o7FC~.ss;#B0wu]Ypt/wl[k;%y1XJyx7Szz6?#Nc3%O@yc' );
define( 'SECURE_AUTH_KEY',  ',Au9^rM!}S>?6N9QQQa3 VnBmc5ku;g]SJiZ@fM1+/_Q`UU_bZo$YrzoCo2Ny-Gr' );
define( 'LOGGED_IN_KEY',    'J[K>p8E!iAp]cArP^QA=0u+VNM*9o~kzw&*hQj`-/a_egwP&giDI_!`JAkgQRz|m' );
define( 'NONCE_KEY',        'cm%,dz7u]^o0z_AumLdqIEj68`p5&8XbBIYEc&_DP6=R+^)9rj:a[#[B{)`xrvZn' );
define( 'AUTH_SALT',        'n|>!R8!M<R}|fmG!PV8QpZA/,x@UG8Jbc$s$a}T0D.~%hL~C3-,? E*&NcGND$=L' );
define( 'SECURE_AUTH_SALT', '0fbJQoCd964dtt^YFT?M@lVprI-eXpp-2c`T;;fFk.Nn7Gmn?[BvBI]+j=%MyERr' );
define( 'LOGGED_IN_SALT',   '0V[cRrbu[KI{yk4?<xS{2gB`0/,[!f%{c_YJ3Juv~BL<v$TQNb0Ph<P78 @[7TO{' );
define( 'NONCE_SALT',       'iZ(hCVL6_OPoLk+W1zlxucKQk9 s2FLH+m$W*4C#=rj0kC3,V.gN}sF*aU3SKv)d' );

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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
