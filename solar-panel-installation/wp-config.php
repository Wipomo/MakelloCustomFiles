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
define( 'DB_NAME', 'monkey11_wp239' );

/** MySQL database username */
define( 'DB_USER', 'monkey11_wp239' );

/** MySQL database password */
define( 'DB_PASSWORD', 'c0pS5@5z3(' );

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
define( 'AUTH_KEY',         '{j}BX&S8Qa0m?pXHuX=~%.a6J()[3~zIhqZDO_npt GH Cp@4+{vTUAUxy/vb]1e' );
define( 'SECURE_AUTH_KEY',  'UEmkdi,scpG,!&N/F_>~%12l.+X8MN6--==>bgivrnkeYdi)YH/c_^3C(MDr({VY' );
define( 'LOGGED_IN_KEY',    'ISL>L!*4y{h6_P_Ca/*(8O?49rtW:Wfneo tM]#4V8#4xD^yVC9Wfw}2)p<MIA~c' );
define( 'NONCE_KEY',        '9B#:c:a>Z&D^K.JhT&,;i$?==C#*(p1d;Na 3d-|8Cm:P2/=|NDdN:LQ$7&asmql' );
define( 'AUTH_SALT',        '-_C,NsO;$UG7Gt6EoZ(ua4A&p{`1. -:IlCIf,n3~@yCi+Et;]d+VIJ p^Q,hj-)' );
define( 'SECURE_AUTH_SALT', 'sd44%%hNUUF=5A(B9VHXmqe[=K@Oh`}Dlb$hO8jPnq;F< k)b&Rw5n*tSRBYh;BB' );
define( 'LOGGED_IN_SALT',   'RRSW}@/SGuZir_fA:.fw=V|d<A]FlaZuQQt sNh#>&>XnvCce/VnPtJ~! m87t8+' );
define( 'NONCE_SALT',       'mxNAlE9{XrK[(0Fre>Xhzrr!3]XuXCTO-PMqF$e0pB!m=QDQ=iMIR)cd<|Ss+r(H' );

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
