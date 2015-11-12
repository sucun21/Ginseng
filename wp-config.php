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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'su123');

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
define('AUTH_KEY',         ':$r1>2T93@F[SIk^Qh}DDLUT%V6ebX4hZ7va`{w*~{2)yjKo>mT%wsz;);Jo3T$v');
define('SECURE_AUTH_KEY',  'Xe&[13f}O@=ee=ut?D+`J^Rfl5Bf eDr<a-X~R-)1j/P{O+P^Lr{n<IONQR7Jko{');
define('LOGGED_IN_KEY',    'E~][;4ODS6~LI<~ [UugxE3>F`7EVfALUjCxX!Z~IkWrA1o`TPnQ@SKY|e7lv;5O');
define('NONCE_KEY',        '5).-lH+P0n9_d-r+1Jsb3DIlnsRg@fJnSo4u4qX4s0TgnFl4F@|[h_MzMA|wcN1A');
define('AUTH_SALT',        'WU%:`@xj+N%fwAThO[[8l7mn@Ea6_27gX[)uhdw?UwiOk>ov<h-Yv2Aiv~-@-=Nc');
define('SECURE_AUTH_SALT', '!=zl>WVmgAx6xmh6S&;V~S_r9<bdq^#Re?5]0k_-r|[#pF8P*hv9w_Kjya9BJ*zi');
define('LOGGED_IN_SALT',   'w+DKu`O-RB-rDa<tAKvBprq%5^Yd}UF.mvwO6~[[bVgu]_Ia ygcL)MbGz*q[{53');
define('NONCE_SALT',       '`A0^1.ydp,V2G|U+j;JKS6=]!cTpGu|(7aeN%Oi%+9cZB)s7m2+k@Vao;-r-F+|O');

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
