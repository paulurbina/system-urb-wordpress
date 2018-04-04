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
define('AUTH_KEY',         'Y=]]]%Egis3$F^<I^u?V1-91rYGL#|g=(Py6IAz$-?Wt4.m<4jH)AAX8+Nf4*P=|');
define('SECURE_AUTH_KEY',  'TS2L&t9-w>wA`|2[rBX7r<b-/6?x/P_WA Yn=+@o+Qm-;zo<b|c@aC&W~ ^,MD.&');
define('LOGGED_IN_KEY',    '<O&Am&K9jHb:UBYVy|Q^$A!zc+BL5M#u:d{SzN.OwU:Rs+kds8ixZiiZkMx?~N5R');
define('NONCE_KEY',        'uI{(=Zs70<x0Ly%?A!&WNeA`-+Gu%*WyGh%)MuC_:E)Y||JL^bb,e)QL#hoo`U*a');
define('AUTH_SALT',        'IIG5L&:Iy`Y07<6]ZSaC#_TM,)%lM-T`{9$5Vs&Nc~[0x$0z>AZ,`4ne&{V[}GI+');
define('SECURE_AUTH_SALT', 'G08A64[U=L;:-`6s|;R-14txt~+zH!PyShg~dw+W..@A)xaZO>27lujfl9/+Z;Xx');
define('LOGGED_IN_SALT',   ' AXhHSub*bTZI%5:1`<||HgJg~%<|mk8iK[H )ji!VTtx*W-,2b6A{b_~z&+|%1}');
define('NONCE_SALT',       'HnDzZR*w#l{ja+?ROvaM)rc8kqZ3wd35ZN)!`o$[r^&I>7RV 1wZF-yCS;17xZ)R');
define('WP_CONTENT_DIR', __DIR__ . '/wp-content');
define('WP_CONTENT_URL', 'http://' . $_SERVER['SERVER_NAME'] . '/wp-content');
define('WP_SITEURL', 'http://' . $_SERVER['SERVER_NAME'] . '/wp');
define('WP_HOME', 'http://' . $_SERVER['SERVER_NAME']);
define('WP_DEFAULT_THEME', 'mytheme');

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
