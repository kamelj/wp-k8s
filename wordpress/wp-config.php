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
define( 'DB_NAME', 'wordpress_test' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'p:localhost:3306' );

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
define( 'AUTH_KEY',         '$qGK42j{reW{xQ{f_+yNiHv?EI`=h9@JLjjbsv|StSM2vejl0H=|KwMq}u]o |9Y' );
define( 'SECURE_AUTH_KEY',  '4lh{L1g-%-Pdr_cQx4Rt!wT_mXqxzTA}p~-*zt@#48-UKGAj~ZTp<76A0:L#GR:x' );
define( 'LOGGED_IN_KEY',    'P)_nS3(kYthpb*=|M[Sw?8Gvf`G4hJ?d1SeGc^|La@8NI=BiOwnM<|Ma{KZX5(v<' );
define( 'NONCE_KEY',        'xf7@i9<e|dL/k(/E9?7%B:7 sj;2wdiN NhjPmh|um0V4-T(C4Ccz5lc(sJQbne7' );
define( 'AUTH_SALT',        'j/H~Ku6{;~~&r2=Jnj*HulD`G^k6S$bdTE3pX!`36#A`A9k)%^>)H[ei_Le)3FdQ' );
define( 'SECURE_AUTH_SALT', '312gFLvJx%rf +W)^2Zo~Uo*<{n=q9^{/wPmPFje|`g8{S!%G@_<]@Y!187#2wCJ' );
define( 'LOGGED_IN_SALT',   'IxNu_MoIL;|C{h<rNAho7x?UevAU#0eTMZs78i%UU#wk/_7ON8MYC6}Zd$_;^B_)' );
define( 'NONCE_SALT',       'zCJ4n4Xy]x+*dl*^/3:|!BoatDP9p#gl3,VM(s52&u(AyQIx`uJU{q5Ija!{Gdo$' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
