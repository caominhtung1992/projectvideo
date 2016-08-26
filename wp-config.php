<?php
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
define('DB_NAME', 'video');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'K5^D|4^UXI+|Ju9E>?7[:$yf(jj3`ok`4UMK,*]w[<+Qi$*COweHhGx3+*0=Q2}~');
define('SECURE_AUTH_KEY',  'I.K)J-1 yl>I8X:j@)pD pWp)QvGJ:t#p~,P|MxQt:+!pm:-:E-whYa1J7YUuU[f');
define('LOGGED_IN_KEY',    'mI8s-T-=dq+QabFLF`%y>rgM+u$G@Qm*I_V($,)XDE%y!tM;_<Vo|n*l^eh&TJx$');
define('NONCE_KEY',        'e:V{FWhXmIMoi?0<.X<!3dnt5WdK%vIZR>KkQI&7m7%{D1MbB<6ZGYiasH,KkV^j');
define('AUTH_SALT',        'm^_L7`da*_LvJ=={(aTU98n=5hnuKXEy:TO}pjl,z^^WZwJCTzipvk YK?%Q_SHX');
define('SECURE_AUTH_SALT', '>{+`B>ETr|: CI%UzB#_Xrt_SXhxCFaI8, `=aQ;l9B1p*1K^=k1k0A%T9r41bTZ');
define('LOGGED_IN_SALT',   '3%`[ASIX+Z74wXg%{Ff/mfz66Lmhk6E*GDP{zNJS)0{kVHo:2L^_5gX@g==3LRac');
define('NONCE_SALT',       '1?$b5Jd#wjJV.Qn0US>$)oh.~q0I}k4f@-y<Q[I#Zyc5p $s{*~g@V}H1W3=zYw{');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
