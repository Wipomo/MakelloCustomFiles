<?php
define('WP_AUTO_UPDATE_CORE', 'minor');// This setting is required to make sure that WordPress updates can be properly managed in WordPress Toolkit. Remove this line if this WordPress website is not managed by WordPress Toolkit anymore.
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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'monkey11_wp910' );


/** MySQL database username */
define( 'DB_USER', 'monkey11_wp910' );


/** MySQL database password */
define( 'DB_PASSWORD', 'SR5!S6)2pG' );


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
define( 'AUTH_KEY',         '<MAX9djz!xV,+~Ok{e/sAy)lrs&/Wk>,DNCM8z &DuX(#7J`MPmXu+U_LEni@( M' );

define( 'SECURE_AUTH_KEY',  'V{jkB%#(ccY8PK0:(2*q}6kxv0RPA>]C^SI-<P6.(-}R]x-BxpDF]hv>2{V5RK9<' );

define( 'LOGGED_IN_KEY',    '|A|2|3qwtM#B}Yj[RGU^!8_VOB5=&Y1y1=2ZITRDkWIA!NOW8U4Ye^=-5p:f9e{.' );

define( 'NONCE_KEY',        '5WIv9C q-6;*Po+%q}A6uDF6ssol50lBbN.m2 n<;BX7t~cQ.9Gsi,yak6vvI&pA' );

define( 'AUTH_SALT',        '?8H|+r@WeJTD^A2|1HAbfdm@4D9n?.o1LLu^v2/8FOJ[x}9a^1 {|Ac6TF!ue#)J' );

define( 'SECURE_AUTH_SALT', 's6!dM8VMc-dQ{Vkc[1@?0#rKyb*X-X9&(:N1Uc$3ZyMv;t.c9N6h[{Q.~CJZpBg{' );

define( 'LOGGED_IN_SALT',   '(K=Wz93_<u<HF`kn^P*4eUB7LJT4U7JhRNC-#GqI-&it8-F^w$e-c&g.Hp.e!q4=' );

define( 'NONCE_SALT',       '!>YtXMxS7RF}7Af&_C6K<Q!/w3YDY}V#)#9w~q(iYy<O^-sabjHq{=JG}(I?ZzyI' );


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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
