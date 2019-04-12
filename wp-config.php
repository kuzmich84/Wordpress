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
define('DB_NAME', 'wp1');

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
define('AUTH_KEY',         'H>(8ld&W;<Be~5TK=s>{ygrDFQn[]C[)/7i<]]4c(@)%BfU]&DK{!oWX]^QT/E^|');
define('SECURE_AUTH_KEY',  'zc>rP_YDyi2d&Sw{^pi%b<jtV$/R~;:;9h/Q$<]7e4;WZQ~<;>z^1MnwYhB;2Qk5');
define('LOGGED_IN_KEY',    '9~--BIqL25XvlI`bxvB,Y?>kR9*&=gYKr9tm;.)mHJ!vjP>dZpxP-NfLS`Of7yN5');
define('NONCE_KEY',        'r) OljTY{%Tug(p9QKnED#Yhl+_U*32&n;hZK;EI.^3R2l:FUV`|d3yM^b j/g%H');
define('AUTH_SALT',        '<] S<{!.}@L2W?tg,1|F+)&O(WvCi7ux3/R^>GW)Z.%L#G/XHW&NC}$._O?CMn<U');
define('SECURE_AUTH_SALT', '1<)B`+$1ZgMe8#GN6)Cjdy[rqWE781}[QT2e0;*o&zz((>.]}X?KF0r$+2]_|l<Q');
define('LOGGED_IN_SALT',   '{:>a[J5-zFi;/yH)R;Q]#|];NQ^MmH! PD[2&5)@=:$-[Fu {H|_^;zDMw@/??Vd');
define('NONCE_SALT',       'PtA<=ZBsJ g.NBy>Y%Tn=|H|)8<0{O!@.a1:Kts/>_TE#Q|P-0}aW>y-Mtcz}e9B');

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
