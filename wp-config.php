<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'vics');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '3du9a6|rMiRz+;w{EjIAMl2J_EVn.$SPor}Q{TQE?lT3GH>C.8#=*=dj;O@HHQnK');
define('SECURE_AUTH_KEY',  '>)3]3ua_pRW/)ulOXPv8w;0JY~NJ{z>0+G:hA_H-GC_P]p{lIP8b=D.  sVPYBz:');
define('LOGGED_IN_KEY',    'C:&E=5/1cxGl^gaAb6Ne/czl5?1Lgzz,;5)z+c!IB>_W|;t$1df,=j<ALPE$5%-r');
define('NONCE_KEY',        ',nTYdO|T}>RWrSumasI[wt4BtXn_w!_Zkcl4F!:uG;zR(CRC}ABQ9.r! OHhQf<p');
define('AUTH_SALT',        'Lzb(Cq;e,1Y[0ewC$z88Z)-$UY `~Ac+K]q,{2,U-4$3r{%yA^;^UT,8XR<SI;U@');
define('SECURE_AUTH_SALT', '+QM!W[)R;)(j6HKqfT)-c,7>~5G-N%!Dq~eoyP:Ra]b47?Uz/|]!s`Y)+ei.4E5E');
define('LOGGED_IN_SALT',   '=nw0nVG$2}Ukwer7cpNZ `#(Zn+WSRS@}HykAYrJ[qr%<ys-mX.35EwY15kulxq1');
define('NONCE_SALT',       'yjmqQ>.P:6za=3Q8YgF<67UUs.Iz9n4U- Qpbn4OB+)0j0gwg>gmEI0UNB[H[Aa`');

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
