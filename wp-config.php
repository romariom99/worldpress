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
define('DB_NAME', 'usuario');

/** MySQL database username */
define('DB_USER', 'Romario');

/** MySQL database password */
define('DB_PASSWORD', '1234');

/** MySQL hostname */
define('DB_HOST', 'worldpress_db_1');

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
define('AUTH_KEY',         'F4GK,%f<t2<<YXR:Yi!BsZ6?zT>D_NVjrcrc<heFj^&$c-=1Y{k^qvdl@K~E,>sa');
define('SECURE_AUTH_KEY',  'AfLasv/6h.?Vvg,| C%_wjUBIQK:I:HH/7u^rk#]Jm+Ac^95_>$04ao8 zGv?>l3');
define('LOGGED_IN_KEY',    ']AV]@evADq`|}d043|>+<VOCag7lD3zDzlK4ek5Gt?XDB4.vY<V%`ABi3q!JtR+3');
define('NONCE_KEY',        'WhjAeYCb#AK+Js1WP&7_<YKbXziC`OB~0dw9 { y]}oUOoRbD,Xr(Su;k?i$<?H?');
define('AUTH_SALT',        '_i*DhzCY/aLa.`;/*_U2l}#|g3L63e7+9hu&haiLfZ50N*54iY302r%u}oxu(q8U');
define('SECURE_AUTH_SALT', '3e9h]4m[74}|RD:oQPz]r>UN#FZF(by0sJdJl3^|IIFtd#=xO_]>v)b/A VNPBJ:');
define('LOGGED_IN_SALT',   '7xxcg:aGW|:2FW2xpDo.@k#^SP9p}n:.!;&CHMJm&h<_]6WM]`}}7_j>ZjxjHJ#O');
define('NONCE_SALT',       '`32`[i^5 893~~4BEMfrKO~rQ4^^:/UW+~}~)E)Zz_FoFvwI*Biy%-5%03G,E;Jg');

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

