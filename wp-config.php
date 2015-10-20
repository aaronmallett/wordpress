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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'i:c,-&Xw?8Zo?*+^ vI&zli)D$IN=wY^T;`1M-fM&)<Zx(i-Vc$%`=^+Og+yEl~;');
define('SECURE_AUTH_KEY',  'Sp8r=>>|du.?Z(YllEmw-)|;0 S/-y*[Vmys%?2-E7qu~xzA#:|aDEyhjh}Y-/N9');
define('LOGGED_IN_KEY',    'gNj&^11*x}ZaHUj;VKpY5$-)Vt)7Sb>L~1-wgO_PLO^I@ov|Nlw}-Kt|`.29@j&B');
define('NONCE_KEY',        'P>96v.x+z^e5X3r3:/,lE%I<Fe0OHzfDty1VoH-P`4xniF i2.ZB@:~Eab#v_Ok&');
define('AUTH_SALT',        'G_Kg#^joesr6g+6,Ydot!q>YI9Mb^/+z4RJ])`RwdZ?>V&gg{-[.-|U[[*kFHAU[');
define('SECURE_AUTH_SALT', 'yaD;W_Omt-)|,H_) ?#uUKaO6Ak.Kna4f=b+$MN+,gR;kD70{5)7~|V<BOXmOP]M');
define('LOGGED_IN_SALT',   '>C+n}w4#|O-4^hn{HE0ux/X{:ouE@aZT*-,|`KyJ~2|+Z%K#E+_J[nA)`@o--2x{');
define('NONCE_SALT',       'GYsH]7kI2EYt0{gT%v]:PTNZtN$1&lwSX9Z54w[G-kZ #Hk&Olkqwhy$WXEf4<,5');

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
