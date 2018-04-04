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
define('DB_NAME', 'database_name_here');

/** MySQL database username */
define('DB_USER', 'username_here');

/** MySQL database password */
define('DB_PASSWORD', 'password_here');

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
define('AUTH_KEY',         'e2Jjy8~]4Ym(yque0/[]e.]O>O3v?H7|Kz1P>}+m+F#}vX:8IR7MoyRTYi$}DP:`');
define('SECURE_AUTH_KEY',  'H31|)wo,H8E!3-wO3D(A:u2MAANfVE.kVVshWEFB[3Wt=q+fn~a<[`ADjKB<+@L9');
define('LOGGED_IN_KEY',    'f ME@J1m-r{,aEvT~H= q(5$|~qRezu`Ad+,fn21Fp180|kojfz&PPK}U|SLG+yG');
define('NONCE_KEY',        'Yi8JQN#+`9V&QZ?zesrEHMV$-ms|D`fjer9u^ +9WN|p4cfr4G+e^y x.h|oN+Iu');
define('AUTH_SALT',        'e6!rEFWWDPv<SuB[Bo<=<i:H2ZxLOIsttG%Ph1X+c2x:W&VxN_na>{Cf/~c~>Ko+');
define('SECURE_AUTH_SALT', 'd8E^c=/.|rr2vHF1Z+6X+V4#&jdr./`8H<8<wFi}A+fTt&0k6,-R?kjnm,r+n1WR');
define('LOGGED_IN_SALT',   '<_%!MNA(A/M7_X!qxPp/!]JWI|:65k]V-p,}FjGlq(PsI8nfO]h[*eBlRM`]iL->');
define('NONCE_SALT',       '!!P}5[<Kkdfq+%Y(-e9hDlt}U/{>+cz~q`T8G=iw~RvnR;r=-o$|QMb<va p#M-)');
define('WP_CONTENT_DIR', __DIR__ . '/wp-content');
define('WP_CONTENT_URL', 'http://' . $_SERVER['SERVER_NAME'] . '/wp-content');
define('WP_SITEURL', 'http://' . $_SERVER['SERVER_NAME'] . '/wp');
define('WP_HOME', 'http://' . $_SERVER['SERVER_NAME']);

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
