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
define( 'AUTH_KEY',          'U_^3=4a5L7:)a.b%XmL4R@NM^x0rkr+E4(2#-gx`Tl?`Mw{AV&|#&bj_NbsW/EFF' );
define( 'SECURE_AUTH_KEY',   'EiczlE8RL+Iu_ p[P hT8kQtUDr2bg%&JrGJZiKO}_8w,.zB^@:D)o4XR58s$1,h' );
define( 'LOGGED_IN_KEY',     '_OW}odepEMwf>xsVXPu&N6V#nimHK:,rMzTNJmSW2?Qq#jNkaEuQj3Eza~cwQ&vI' );
define( 'NONCE_KEY',         'ysZ0]C6..tt]5DvzIM|1;P,I~2{nU/V`5V~d8z.{g<Z`[qyn$.vvnuAM^iupa)pQ' );
define( 'AUTH_SALT',         'O+[#Ew.y1p442,zt^Y8}QIe:q:~C1xxnA:IC33$5Vo5}K*Z!qc:6f,$Nt><?:#m[' );
define( 'SECURE_AUTH_SALT',  ' ;u$~qZfi8hK&1ZtcI%V;s?@l}bms]y>*=clBd$DroN_@P`Dc:GN!E8&%nr-OY(~' );
define( 'LOGGED_IN_SALT',    'uVNu-7K7@#T|@U+s =hPD(sRwrm35$C6BIL3c%Z,0`k2}3(r9?.b]K]xN}6V{.#}' );
define( 'NONCE_SALT',        'Fpaz!|l<mq F3Vlb?@-v_2Y0=z$fFsoL<>YF6/.0D*b0B%,(30SSHUG_KL$yOB$+' );
define( 'WP_CACHE_KEY_SALT', '*P]q!A@ZrKt4q}$s$/w VK8FHYA682uJrYi]J)^.KfVa=H$)*6@uydlkv$y`.Ts?' );


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
define('ALLOW_UNFILTERED_UPLOADS', true);
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
