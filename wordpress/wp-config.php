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
define('AUTH_KEY',         'h%| qA<6EfVtowuh.r u?z2E{t:V[fU@,!:DD,o.sNf %Q/$K]pVw!7O+E^pLb>L');
define('SECURE_AUTH_KEY',  '$:L?EUm2vh+-.IO3.erF&1l+8:}+B0,|lG3$78$?t0`_*|*_BuvYef_qgk1|6k<6');
define('LOGGED_IN_KEY',    '7_%IMz4ay(0`Wkt@>El=%aEK7EZeJU}!rZ`l!M5DW2Ib-gdXcDZ@J1: Actt5uJi');
define('NONCE_KEY',        '?v#/r$ n*b[=bmm72v%$JQV KP]x6bo+Fjffy0>n#b3.<k[%=~<q:ZVc+QTOA2tX');
define('AUTH_SALT',        'JNs^`CXX9E??I/!/4lhiuWA(emZ)-rUKj~Qd.If=~D*0j1}(T_1eI3L|]h-m> Qx');
define('SECURE_AUTH_SALT', ':9+sZpx}IhX}Ot/iB#y>>&l-LsjO,wr@<BLET8n_5i>vxj)]_ r(i9,9;*}<.JT2');
define('LOGGED_IN_SALT',   '78SmK@kZvKfAM>w08CHsL|K^b2Zv39%N_[2{*p{g&16.qlaP|o9<{~<O;n m4Z//');
define('NONCE_SALT',       'b-]yq6wqBJYHxo,Mm#]cH8[>db06=*-Mz<PoRTkX5J0-ybQ;aY?VD[>0UUy9k6Gh');

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

