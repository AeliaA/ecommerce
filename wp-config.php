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
define('DB_NAME', 'ecommercedb');

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

define('FS_METHOD','direct');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'hN#H_ipBYlP8 Nd}`{@%~2Gwi(d{]njOW]]i;bjP-f/s<T8rfoC8LKgZC%R]nUHA');
define('SECURE_AUTH_KEY',  'i=5[5VfP^AAl{4j|+/()B1?8jTN:}T+jRxI=Eh(k|Mvz|/lmyX_H$Gph*<t24(}Q');
define('LOGGED_IN_KEY',    '>Y(zE=U%]ZOB5[m7wfJ4/BLH(77oL 6h5+T:hl|<{7[32CxPv>.QbJYx2vowT-T(');
define('NONCE_KEY',        'xeU,RP-+d F8(7<XC(K+(;}+e9qMl;P,EBfi/|{wc<#<MB~8jqD J(hIs>q#bCJy');
define('AUTH_SALT',        'Eh6z2wv|9~cgjgLh.T{H$(CxMKn_v=%N(Xv=[#b.V*uZwa-7X|+KJrkmO;:)6Ke ');
define('SECURE_AUTH_SALT', '7t[>+iQ#UCv}Wi1Kl^ZVk~:5WA,lXD}}Ggzdm;d_KO CWO{x8C^T!e)15s^7qnjZ');
define('LOGGED_IN_SALT',   '*IG]jQ^)/~>?SPQzAF-PM(7,mq46#+~>Gjld1_^/soqnliO1AYftXRP28%~r)By+');
define('NONCE_SALT',       ')YD}Z4f&,PT6Gb!r|R^[2=)N5gx?>+Q,z+oWFj1|?+m5HR$?$+A_qV!|*3kk+j,y');

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
