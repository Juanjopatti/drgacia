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
define( 'AUTH_KEY',          'UBay;N_LtRHAX?fUP,;VC:CMoMq(j=.*tso,.m(L;f)=k#VryK pYjLJVp=Ndg$Y' );
define( 'SECURE_AUTH_KEY',   'Jv9SX<G,;B)~|ra5ybL:S&sd~lrKP(sv4RI5zyKfr7f=1pEHh38p-W!kA%m[&0zG' );
define( 'LOGGED_IN_KEY',     ';nmYX]ZEmRlh7w@oz7(8AHe/*cQbZJ9)k/uDa01{}3uH`mTU%cptZWgR_+Gn$bg-' );
define( 'NONCE_KEY',         '&G(Z:x,gB$$}Zuj<g94ydK6k4GLvZ2H)aVeA+Pc?AOy0;2/QCUukiGw{#1/Z%mF9' );
define( 'AUTH_SALT',         '.f@M1m<;xi@B[z![$YmcL8q)azrq)`+op@wT2`w0gOe7fJ=No%9j||/t~g.MvYf.' );
define( 'SECURE_AUTH_SALT',  '0[pTLX9_S(-fJHF0X.i/b obSP8fN@n]$NT5L;Qez=*s5%a)zRgwE0/i:w(/b.Y%' );
define( 'LOGGED_IN_SALT',    '8~U%K]p$ac7]X>.7|bWz>:O,UO gwS`CW1o@>D$za Sx#YqJSH{cpX7)FOn]/6=c' );
define( 'NONCE_SALT',        'r=jGzas -c| U{(M0YxxFOhqx*<~}t1<`z?ZH`*1WDe06*>u&I@c((}HaFt)Q/6]' );
define( 'WP_CACHE_KEY_SALT', 'a9Ezb.R72:2a$RTomJCkc:41XWpZ[8 4E4_.1}eVMFW[7^v_!(/;-#oj4hW:)Aq@' );


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
