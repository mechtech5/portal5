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
define('DB_NAME', 'portal5');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'mechtech5');

/** MySQL hostname */
define('DB_HOST', 'exceldb.cla7euupucxy.ap-south-1.rds.amazonaws.com');

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
define('AUTH_KEY',         '-#,$dOdWG5 p?>~[Of.ip7Xm RWB6f54)q`dntL16}+}]pK5X_PNhFF6nRj,Q}4|');
define('SECURE_AUTH_KEY',  '2hBjRwe>dul3u}o1p<GNcXv.EgAT)$j$o00ygHISCrN]}p_fHUK o_a/#.qL5q#U');
define('LOGGED_IN_KEY',    'V#2=aI+b i(G[:[{^u;%oKhQ.3%p[+C0~ig*^*[|6k4(>.RlEB08=qrHVrYtTzxn');
define('NONCE_KEY',        '-np}rk~opJUWz7/k6GapQ9)Pu+:dEmnR*i[+dXVh%so~%_]&0~0%!aG)59#~~+9K');
define('AUTH_SALT',        'a3r%3Tw:fy;R/%Bl/R[~.lq=2Lrut$Q6^hz.-*iWRt]tJ`T-g0xfa%y~2m,tE`Mn');
define('SECURE_AUTH_SALT', 'ot3&E&qZF.H+E.~^bBsN/*D6Rj&^a8F?UQbkVS<^9FYLP-[=aWtQvlEr@/C5:}H{');
define('LOGGED_IN_SALT',   '[Mh(F/aN$Ome>t(U2L}di19Jd{4*cK*mN!,*>@1>&Lf@m<v]`/G`2Ug/FF=E q/e');
define('NONCE_SALT',       '4*EI;OxXNGB^)u1%av|VJ6|Kng9:iv}!T;U3tb&P?vbjNhk0-*1;s<R?xNTP?Ex7');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'ab_';

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
