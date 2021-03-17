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
define( 'AUTH_KEY',         '>FDmwaBthGmw~96]S]o0%*NL@0(Ff7GzG58b~KnyyC766gU|/yu:^$?q7,*Ly<g<' );
define( 'SECURE_AUTH_KEY',  '1E(-%%MXr4F`B)7EA_H?.*+>S9/C&e:Od1tR/?Z12Me}pg[p[[X%P{w{Y@L4-()u' );
define( 'LOGGED_IN_KEY',    'JyMBO=;[R~:J2`ImgYzd>FeXYU D3U8nsR^t?t)o*EX ?A/RET=RF$@`%=t+]gu#' );
define( 'NONCE_KEY',        '{$r]:vX:*q>Fjs< Bu_@=E./8e*6A%TM0tK?DDI71b:1zLV8SWM>8M5lv5Z;t/$B' );
define( 'AUTH_SALT',        'EM:=EV5-Mo]mSfw${]w&Yv2* $e:=VHMEBBi W2Dzk#AzlyJ&IBFr.6nhoCvbh2*' );
define( 'SECURE_AUTH_SALT', 'H49@%^w*?R2<izF.SBzpO,<)!CsKi[3yY{C<:?C<`JC8!Tev^5@GUYMX_F]W>Lu1' );
define( 'LOGGED_IN_SALT',   ';qWdQ@}A.z3Y+C;p%W{&QE%Fkkz%GVgA1[0z7`X{[1f0zs~FjWgUU%sS=p<$UhqO' );
define( 'NONCE_SALT',       'hRPIjo,JUE[2}!d#)}]e,`j#Mcp[CUnKCc{SKv_I:~,`!4]eyu9R!R7iJwZv,kDg' );

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
