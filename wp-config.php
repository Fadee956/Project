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
define( 'AUTH_KEY',          '1JZzNx/]BSsil1]>:&z{ryz|L.e=Er-SxcR{gLh{rKu-0qjTHAuU^r{mn/g R6:h' );
define( 'SECURE_AUTH_KEY',   'Rcpgz9jQ]1}(ZZ{XjOHsok 9{WH$8=Kz8y&4OilzIEW? T!M6ZfwbV>7RPk]L}=M' );
define( 'LOGGED_IN_KEY',     'zx]qjYsrD`j*=K3;_tP6n%^[GnqJO{?6K<b^,2Z{*(9^D$EmM01}WP5M%%}_64yu' );
define( 'NONCE_KEY',         'Lz+fQ{}Z*)eG0~P4`&u;-,mWLH ~&HBGLK&W5+/}@gg]S7nF54vjO9UKg&V}mM3f' );
define( 'AUTH_SALT',         'se6X@R[2R.g`;kvE3?R^_f4Zs:y9z#K^,0GW6Ym~3mW-+p:+.!`/~QCO7<?{`wV=' );
define( 'SECURE_AUTH_SALT',  'S=to<R|B3j>0w^},b$Bb L.#|(1zy>IvODH~P7Cy0X1Dwn__G7/kb%XtbJgHLo7?' );
define( 'LOGGED_IN_SALT',    'd,,PLut%-ptH9B;]XdF#FPd:y3kpk:7[s7d)p@+]j;r8)T&v3?1[RQmn/ .7`0_Z' );
define( 'NONCE_SALT',        'F-WNI?4b+RVTZ-yQK@t;v#Ez,DN}koH{_^`M}-sVJ/>f|guG`_`)TLp;NEr5Ex]_' );
define( 'WP_CACHE_KEY_SALT', '=O|bGS*@d:aGh`f6`(:pm:++Q$pzp.dXPw)QW>lF(T#(p<+3>GSqR~5CHl2.Cy_/' );


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
