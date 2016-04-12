<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
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
define('DB_NAME', 'wp_farolito');

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
define('AUTH_KEY',         ':D@-09>AFr*ix+h~SQX=s(:rN<;2kTHJ+B]SGvu.1K#PofPSSTWB0uGf>!U_oi:X');
define('SECURE_AUTH_KEY',  'Qf./e7w73h86 :c==P~l1;_jd=}BHRgO?]XfK[oH :Ng4t}bZXE:vQbiNVK0]<6g');
define('LOGGED_IN_KEY',    'g.+wUT01=/- 9[bL1%1G)C;9y5kKcm3--@ge{{XY<k}%k-S(+PETr,{RFkUQko{7');
define('NONCE_KEY',        '?;n$6IEXt~YN2<{0)eq+]!Hu/lzV@szOSggJ/=Cg{i%6_}xKk-+EREf6DQ![HG2}');
define('AUTH_SALT',        'v{ME?$u8sp|jwk`R- mw#Ax*hK&x#&{wpr:tOF8d0oi_lNRyt.Fkn5xe+Ez@q9o-');
define('SECURE_AUTH_SALT', '#e_:&_{106.OWGd&0lk,. 5f=aNZ $G;:|tq+U)*+i#yk`|+q>6PknHG3R`;,(i(');
define('LOGGED_IN_SALT',   'JUq(qrDLJhtN|6AAnr*4%jx#~*.WN<H|,{$M|h7Y1<:wh|+XdUUFmlUt2q,U]vJ8');
define('NONCE_SALT',       'N-qkv~MnIuT*Q:}X2?qd@9B5W#k68=5HIiHGWA?mm|&|TXD~|6L3#~J*Vd%|YgS-');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

?>