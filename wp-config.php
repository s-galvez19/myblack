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
define('DB_NAME', 'root');

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
define('AUTH_KEY',         'f0T8EDDC068Eh}S1S ?8aAj++T;bUh;|fN[&##0XA!1L:*[f|G4mh oYk<1~mwL,');
define('SECURE_AUTH_KEY',  'XOm%Ws?%|z$?%D8H75|RtZ+G90n@}3mQ^6M63#9ksO,Va^$vr8%Wtn:%p1>!yCNZ');
define('LOGGED_IN_KEY',    '@^0sfp/dJ9;_j#>iaR>`An}}:v@z7hAp+{p@7T%lrpf{)p{{YK{1O72.<1Cb$k0h');
define('NONCE_KEY',        'o pcGn{mlRclN2Ot(58]|zfc>~&L,bTQ#H8U)ng)YcP)T:S(.wP@qZ,[H]1@9^;N');
define('AUTH_SALT',        'eH6{+kRvx.i5U+@+_y,OzI[#4cZ[ST8Ohq#3F PF:xXkA# SXD:j6`fz$hNs|uQf');
define('SECURE_AUTH_SALT', '1U>mRW*(2)J-6du{2<PT[)KMc&44o0ro>/!NTpy4{`,Px=:0/8zronxL<BU 0&`{');
define('LOGGED_IN_SALT',   'rdg,|JmOVaps@$.zi1nAr6?O}m1=ib))VC{<fr^bHqq*S~^9mjkx[./lbjY;okBS');
define('NONCE_SALT',       'x%ppMgLXV<a/foNmXlnnjVTC~cDR9$:Hoez^0r#0$> &.}/$&:f>c|N9Oc=I]_.~');

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
