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
define('DB_NAME', 'db_sample_wp');

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
define('AUTH_KEY',         '|+x}KZwg`@SfUco-UM{3]D/nfqtj+He?cHk!X-1QBw_JQ(MW8S9n#_q,92&TS}h{');
define('SECURE_AUTH_KEY',  '+u?Qh8W=%AFZePSewbWxi7}>L2vJu9^YpF-TA41P,;6ZWL&BUh_2KYixII/Me<K.');
define('LOGGED_IN_KEY',    '#-r>6HYxwS}n4$Sb1mrllhA)+8iib5=R@P?p3n$Y50cSwfL9*L}H^!$V]XiI9kEs');
define('NONCE_KEY',        '|D/%DvUL~iz<O>GI`sr*d!&x[j[k;-^.~%^4iCke0OQ4^0Zo]P%93g0p t~gd7[%');
define('AUTH_SALT',        'Qf+wvx:=kI>[|{|e@X$T`*!8~*9wc<Q3.ykXO+MUpYd&r>L`p~c_VY)twpF,1^Em');
define('SECURE_AUTH_SALT', '?$6unbkATj86axq+1(G&}k`nS>#/FF ;|OPNw-sDM6Ojk5hzZbFD=9LNx=,kRnig');
define('LOGGED_IN_SALT',   '=UU,8qT(2s!`G(hN]66p[_<l=~:@hK8u^E 8&zFJRgZ:Az<~/Ra^[9.pF ibU_B<');
define('NONCE_SALT',       '<-/@fkmh=-vh<#A3s+E].Js?q&h7}ZTR=W%.h+OQM4Fg|Q&PiJ%KmNwdxW` YagP');


/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_sample';

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
