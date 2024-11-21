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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'joblinx' );

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
define( 'AUTH_KEY',         'N!#fnZ*aWG+~A_ogN3_/Gt94 fz+D8)TLXI`0I~#DK{ RDqTQ6uPRAO,.US|B_W/' );
define( 'SECURE_AUTH_KEY',  '-lu{@D4,Kxj;F[&/cLJynAPj!=8wo~bGMpCx^y*j&)}bbxKJSrQ3Ay|>Vsr>HL7b' );
define( 'LOGGED_IN_KEY',    '=-_!{SE%Ma9M|Yf]F*KE O4k=QX$aMQ~6aN#kAb]ysUMstuFY~G+na#EHhRx`#MZ' );
define( 'NONCE_KEY',        'fjKkEgoZKY<ud(gAH.+?W$&O;E6]kxvyXC*DnQ~H-Wk.f#0nuGZ)w;<|}7L>Qstv' );
define( 'AUTH_SALT',        '*6KafgQ;oUVsl9@AJBszYsS6U`rub+JruA$L)6@ai:^94T&WtmNaMrr+@:@nKgx-' );
define( 'SECURE_AUTH_SALT', '1F.;8;9-vF,,dm<>KasGPWq-7D$QBn&nv/;Jjo57I7Ptvr<= ]0 L+E@r`mJ[H|{' );
define( 'LOGGED_IN_SALT',   'Lesq6*:j$n&,n@NT+Vm^16`L)m CTwn<uSasf[*?g^WL4}YY]_~NC3V_4`D3:P 7' );
define( 'NONCE_SALT',       '_hb? UfI:Gc?Zwfq1ujFcr@h|Z?`bA@YzivseVC{(W (cD-~ |,_W`X90(XaH;yo' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
