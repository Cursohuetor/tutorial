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
define( 'DB_NAME', 'tutorial' );

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
define( 'AUTH_KEY',         '6m$_inN5PYv5)fu.7SL*,VcS/:ecT<iP.|fTD-U>`%6)Xh.)K]bJ22u~t^6I<1[z' );
define( 'SECURE_AUTH_KEY',  'tJd<vr8=C8H+XFmuYV@gSo=&USD+=z4Qk!}yV*cBL|[{qJsGdRZl#`1_WN{qfl$0' );
define( 'LOGGED_IN_KEY',    'uf>6dkJ>u5xoK6G}(:N@S?:df%%qOFNaI(%~*|fLv7.yN%8y$peVTAM)-aPNpHd/' );
define( 'NONCE_KEY',        '+9Nq<Bf`~AMz{/KWq3#=#|OY`st$S&KdP;2m$v~uXr$!jlMmRS-cX9,g5.FZ6NhF' );
define( 'AUTH_SALT',        'FHL^Wl@5tuV2]R6}Eit@TwJ2o*z{ Fo;zS273-NN)D>n,Iq6(MJ-Ye_3aRZs6,{W' );
define( 'SECURE_AUTH_SALT', 'wb.FRm!n`/j`G/#RRz,Y}B_D|Old`uJCvoe7t)!K`/&i(RJTogY[g}9!z2d&OB$}' );
define( 'LOGGED_IN_SALT',   '%]PC%P>[3&EBljZf9e5@i8&&e&}o-o(KW5-o.qgoV<T-9Dv1tLT4w>927RjjLdpY' );
define( 'NONCE_SALT',       '#n|6UgoRs^.:Aw^)1,i/#OO1ZArK7s9!WPJ(/A-^=Y0mzwbS##jn]Cdf1R`sGAq_' );

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
