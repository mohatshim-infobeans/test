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
define('DB_NAME', 'wordpress44');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'infoserver123');

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
define('AUTH_KEY',         'LB|RW|1d&pF+.:Q37?!|V#u7-!|2ew+M{Gni%m733xe- 5p2pxu-~AT.*-YV1)-.');
define('SECURE_AUTH_KEY',  'HWA[7B)L,7dsY,3:gs*,f$=UM=g,QAKX1b|]Xls7r<a5.Ea@x:~ewp0u[O2MkRPm');
define('LOGGED_IN_KEY',    'x.7w1IWqKJ_3#XV)a]u/(i?B+w&8R8vMc8PX &K_3Zx~<8%(M1(%K+ICC[YahCxR');
define('NONCE_KEY',        '7!OgA@/RCdxc>}i`[qmJQVX(?5x@.L$f@VIu0EwR5q-BK6hZa}Ig^YZkoR1[4S|0');
define('AUTH_SALT',        'YYXh*xeP`P@(A-NoV=no#YcyTb|1RK7k6w[,Q1#}N;IT;1*+9XRb>YLM54w=SYFr');
define('SECURE_AUTH_SALT', '-3XxQ]+*,+aAh^h}+m#8o-yR2Y)e->h73S-Of-1b0wS|AYk3azcDIL83DPv@(m5*');
define('LOGGED_IN_SALT',   '&I|$-A:H.IYv>:6364d wWaS5=2^1qfz0Kd+KsgFf=WL?/~_+Ma=hq.u~@f$*1UT');
define('NONCE_SALT',       '4}OTDj$aQRAj:BO.)yg6W+wjm4+jC+XAs0~z[wva,d%+&WR:{|k3;@^Jb7r  09b');

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

/*define('WP_DEBUG', false);*/
define('WP_DEBUG', true);
define('WP_DEBUG_LOG', true);
define('WP_DEBUG_DISPLAY', true);

/* Empty trash daily */
//if ( !defined( 'EMPTY_TRASH_DAYS' ) )
//define( 'EMPTY_TRASH_DAYS', 1);

/* Applied for Empty trash issue */
//define('ALTERNATE_WP_CRON', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');


/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
