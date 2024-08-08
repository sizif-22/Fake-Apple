<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
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
define( 'DB_NAME', 'FakeApple' );

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
define( 'AUTH_KEY',         'mk!0Zhe^%Edl8R@GhAa)YPLR(KFO9RjrE.3To^`,K]+xHQ#0zcaSIV_1+%3gu/M8' );
define( 'SECURE_AUTH_KEY',  '[Bo$<]te0j6{p!c}c14qh/p^ODk:hcb8qY{6<kNFo9}^pBh9{ @8?6`:Xi7ZhLV>' );
define( 'LOGGED_IN_KEY',    '.^{6gC H9vHM].fM(4~8EDwIe*hKN|vgx@%a jj]aI}Qp!`/rAWR8On{t1L|uszo' );
define( 'NONCE_KEY',        'y&zV:ehEc]p#V&Qa5~Yib0P</t)(0[qchLjfNotnU8TPojm=M*63oZxF|Hx@{$SL' );
define( 'AUTH_SALT',        'sToi:^Pa&w6cdm.-%GK4/(Eiv#:2 xRNko8^6jv}zXpH^A~#j_9P/iAd~@kHC]KW' );
define( 'SECURE_AUTH_SALT', '8H.PbR(KmdgY;vMn*)-YdpC&h$M}+{+wU`4$k{%-sj&eZ!Hz@4RKJaubx.^:#,vH' );
define( 'LOGGED_IN_SALT',   'Onrpu30FO;H!Db5!_OO_I s`0mX1WZW(s1XNS=dlJ~}x-ll?;4/-?K6*,h9<oT=B' );
define( 'NONCE_SALT',       'M1*}o:z,0Zvrw1]:{[&K4CpU-0?Y;p? D_ckk_^[ed`w/EPmW0b~Z`Cf(@#*zkgT' );

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
