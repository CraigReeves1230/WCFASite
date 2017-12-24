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
define('DB_NAME', 'mysql');

define('WP_HOME','http://wcfa.lo');
define('WP_SITEURL','http://wcfa.lo');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'password');

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
define('AUTH_KEY',         'v2 xRz4913;LQ[L4o)y6-TR]x4dO?!#-~yk$-A1,atnXWem4(<d{?>cKu.I=, %G');
define('SECURE_AUTH_KEY',  '%0]>HwUx( }7{ ozGu7XQ2uE3;vsK-FH10<Oz#WDlR%?sA}b6&f-A0>:UEDm*ki0');
define('LOGGED_IN_KEY',    '~j$,l7.#O,bT8h4bh99WobMS?o8J_5m|88-tYH,*UIC2e*Ny-:rrk}?=[t4N0fe]');
define('NONCE_KEY',        'N,3Y#N?gH2 WwzyB:inh>c?0NUCRFAp1AHq7Va/^0]*(Q!ec `/lXJC/(RU2RtY0');
define('AUTH_SALT',        'Xxe@oFm@ZgJlh:UUqYa:s[eqDT Z=v}oaDL@!>Wc;jUy?F*7-3hA`oOJvBAu2zD{');
define('SECURE_AUTH_SALT', 'GG`L,V.E,ESoRrq~530_$ZpGgL0A`Kx8Rc/Qycp5B?GpY6=G3]nymG&c6W~>y{l9');
define('LOGGED_IN_SALT',   '/|&xp6A<l*Uy>m`f-iZZXFvGX&g23xS4_@m::!S)%1^H]*5@CBYqrVOHX1..o/A!');
define('NONCE_SALT',       ',]_yZ>U$m<Ng1# #keR5|@-1nXR!kx<a WOKba&.}GtOh;Xd}$AHUcA M$}SU52G');

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
