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
define('DB_NAME', 'heroku_d8e57c8a21cb08a');

/** MySQL database username */
define('DB_USER', 'b2f935d62aab61');

/** MySQL database password */
define('DB_PASSWORD', 'd201e4fa');

/** MySQL hostname */
define('DB_HOST', 'us-cdbr-east-05.cleardb.net');

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
define('AUTH_KEY',         '-Q-t}jgmKr+d: .m>^J]zJm7Wit)Md-(cYG|WZ38?5 25lD0]>ol(g5:*)JSN*Wt');
define('SECURE_AUTH_KEY',  ')+ %=H5sJ::ljYsQd(XZk^j/X{*I#MPaL1G0Uk9F C6h`&9B^j`-S[0|>^SS]?L ');
define('LOGGED_IN_KEY',    'LH+o4=H|>|^)xl!a|]f@j8w:{XHH{i~r`F9-3/j&e$Xih;Vf/5J%Cbv.Yam_!+fQ');
define('NONCE_KEY',        '_utgdFV)|c@2|+edikf-uD>OqJ+K!}n.$&:I=>R[|1<D)J|~9-VnU[kChVee|&7R');
define('AUTH_SALT',        'D+`e#U+y0gTM`ooc1r{V-[cOjC@CD55}5}Ax_ql,>?y+U;>^y24uQ|@GVmKbBKe8');
define('SECURE_AUTH_SALT', '+/jx[;q:TQnZ$xLMMH&onzK~kPC`a&-|oPW<n[/yl+K])tJxf[fs )_%0X/5WNZ(');
define('LOGGED_IN_SALT',   '~t|S57%[V,$U7CI-YFxCsJ=9L|d&piRe<1eq0JVK?9sFYrKX4s&DhOUgl60M3Ah~');
define('NONCE_SALT',       'veUY)|#9V 6uoY[qEJim@+Fb;<7-+xneg`ScYI,qfZe5e<}Ym-EUg!w[MTH2;-UP');

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
