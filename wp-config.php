<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'danny1_rustbucket');

/** MySQL database username */
define('DB_USER', 'danny1_rustb');

/** MySQL database password */
define('DB_PASSWORD', 'y0yFT0CoLpkB');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'G^.PibEO s=y&AfDH5b2_0PQ,v]x&.a|g4m||_8v[3lCPV1JpgjK{e.Iw=|[SAV2');
define('SECURE_AUTH_KEY',  'l5xZBag-TAjk^0yh@|^|;HRY4G##OHH_p$Kx,-GlpD5?Nc0#{F8DV^+]+jW=&.%r');
define('LOGGED_IN_KEY',    '-YBP]<pgS>oM]Fhr]KxLKltO+<$o8z<5#d{|vGpfo4>n,=D.v3<wU+|n`cX!Vj[y');
define('NONCE_KEY',        '^?jl2EM)W(GW>o(6so2q@] +F|EyUc4.gqjs:cophI)Uzw@=ZPf/NF |&Q6BP@Un');
define('AUTH_SALT',        'jp;5EN%Zg|=&VwM .Ugyte(EleT4bWL/Z9a@r[A<[l>->7!+O_}skBj-`+uSq|Fu');
define('SECURE_AUTH_SALT', 'OY]A{:Icl?r~Qp-K}_YNVbTEu.P[+^U$+Y@*X0OM=mUU<]6#q6x |7Bx^4zBX+cC');
define('LOGGED_IN_SALT',   'wt<OmzpS|2DD^ Bu4KYeLicZcMVD1ht::&iF5]=9q=]q|3iP-EI$MFt+rvW=NLA+');
define('NONCE_SALT',       '8E0,or,u#u`*B)5q0OG z*,9e}-0!``3kbz;F#@O0{[O~9IPx@{1-;T0RHn`x7.p');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
