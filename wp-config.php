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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',          '4K_3)UG+@-GMls$WZUN9rfu*J{Z-JaK#Zs75R:LoB`xyo#&vEWu28_&HrjoSaA M' );
define( 'SECURE_AUTH_KEY',   '4*Aj W<FR#N]si)]d5;T$vrfHd!E;7(L-anVH0i@=]nCnll||>?wdf/(K;ewg5:!' );
define( 'LOGGED_IN_KEY',     'y0*s>0OqFQDGik?bScXr|~lj|O$;CH?[afO<-~edQV+~m/]~s+ciN=CR,B8)amRy' );
define( 'NONCE_KEY',         '>:@O]}!)H({ZYka+RmSX-%tc!NwoHwyMf[`Y{+;;u=Bc1+4,u^e:Vh|VCNfWsSCw' );
define( 'AUTH_SALT',         'd%3M>O:vH.aR9f?cI/^`4Jvzm_4z^f8qmp_=0GHdOE]t&jArz^Bs]FqebdOw]>+K' );
define( 'SECURE_AUTH_SALT',  'd5a]<e]U64DRb,1KsCUA653|*!T18PH(}PRt-`ri0us72~;3Yb)h=k;H6Q=7uIsT' );
define( 'LOGGED_IN_SALT',    'o@a1$e>3n*iP_8cHb,uzMH +LLu:bK,m!W8ntL0MRj%b(AP@}?XD4z%7<&D%-8kw' );
define( 'NONCE_SALT',        '&M~6sjh3`)9rozJ0m1p8-Nt)]8rMuqLA8IYNT/<D9S&HaXebCQ7g}%8q3~~*qNB-' );
define( 'WP_CACHE_KEY_SALT', ';p3;8 &=<s_i6~>ncpGdHN!gZ8f TU39Q(9V&7DK)^FRcl}.u`(Lb?RP+%@e/A:P' );


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

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
