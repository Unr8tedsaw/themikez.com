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
define('DB_NAME', 'themikez');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'C/<V.q&`?yE<hP3:D]7YK%Q)B#efYT!`PvQvh[HUHte~ymF]!89 <mjdbu?sg82k');
define('SECURE_AUTH_KEY',  '|aDh51c?Pv/-Jc~Elj/k02o{ xm-`AYO!YQYxMy)~HJE~bOvp#kd#}D>K,M7ajuO');
define('LOGGED_IN_KEY',    'NzV ^|9F__X}Qu_T$>)1o|v4}w.X5!=[=Vu#+(Wd-~~|V(:B}l@zGloNqUBO<uUh');
define('NONCE_KEY',        '7zC#Z6?6q5&kFo!/IVS*-N$3E2UXaeb[5Tl]4fn,ZA7j/6r`rTvKc)QWCsoi4!gn');
define('AUTH_SALT',        'pVNVz4a9>5jXCqymor,Z$Lv|q&5q<mmDP7a-]1Is!DF<S*-&YU ieb?kHMc=VmF)');
define('SECURE_AUTH_SALT', 'V3FkFI!<h9qDCLva90i59@a)?|:]y0psHaNBR_}x_lt(OH#sy+msH!|?QFgyyl*T');
define('LOGGED_IN_SALT',   'yi OXX@=G=Ib2z=Dk/sUW:rChM]mnr}.||e|/gzh&%jx K-j!vM+u>W++1i+2Jyr');
define('NONCE_SALT',       'Y@SFx_PH.y{~6F8j}~6ERlc1yZ={,hi^ojMQdKP*PW(LM1*j4z<Ntei]siBigGp:');

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
