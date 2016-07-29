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
define('DB_NAME', 'cafetwelve_web');

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
define('AUTH_KEY',         'mRq;+)Ws5cjd%%lAK}3mJ%Lg_!HhADn7MQ)e#4Ai6NG$=#I_(P}/HC/6rRqF60X=');
define('SECURE_AUTH_KEY',  ';(Hh`3&66]op+V07+<zDE/^u<{!*C>IU93&%GIPrlHTX)sI|z-90O*]a|1[6a|g2');
define('LOGGED_IN_KEY',    '0? |:nlJdY6@u8oaRX}Z+c|ZKz9m1>~ xLp}@B N_>6cvtDI%zaiU1^`rhMGcFHu');
define('NONCE_KEY',        '-6W8iAx;+^pYiN$v`!;EAxV%2G*Q;Ky.X>U7Ba5c/._2P|= myB@7%Fg/yB2-g;t');
define('AUTH_SALT',        '/92YGfMCebnbHyUjua.0GrIBk0LCXx~j /VB|xTP)GMTd6epdsr/^EHQD~%A[y{#');
define('SECURE_AUTH_SALT', 'Q]2D`9fHJIx/|{N`B|^5{BXBbZM_+J8|PVW]L_D-.5WDPm4%UI{@8O||~V}i7wb.');
define('LOGGED_IN_SALT',   '6uYRXwbo$^z$Il!s-#&$p,PEJZVMN@^kNO:TJOClw>-27GPCgfPc1+;-M;_U?|^.');
define('NONCE_SALT',       ';&pyloJt-3[)ny|FdzOT fS<q[hP@G@:d9aWM.0<^3CYeR.1K:`*poC_Z9LUAz$e');

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
