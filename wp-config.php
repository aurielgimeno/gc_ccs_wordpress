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
define('DB_NAME', 'u287975072_gc');

/** MySQL database username */
define('DB_USER', 'u287975072_user');

/** MySQL database password */
define('DB_PASSWORD', 'password2015');

/** MySQL hostname */
define('DB_HOST', 'mysql.hostinger.ph');

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
define('AUTH_KEY',         'PfD0uw3sBwvV!nnsh;NsGWp,F@c;O5>>fVG;@wZ+Ko_aY1_ <aLRz?&RIMdOtpU~');
define('SECURE_AUTH_KEY',  'dRo.U2:Gw6*}{c{v%@JNI$$@_UP|L,k|8oFMz7Y/e,qDyb/+QuW|,|cr^ABQ[! 6');
define('LOGGED_IN_KEY',    'c~S~O4L&Mqp:z,]FIX+=cHHniBkQczr_0<<:Z4w]rnN4 Y7&}#HM#-E*)oGxkoy{');
define('NONCE_KEY',        '~o@Rz<cs-Q#|*6q39.qEuflnDdmbRYveJYgA383_bPAOJ&9f|u80|:sEmA1|Ps9_');
define('AUTH_SALT',        'f{W_9L&ge6EB`c:14dJ&z**lg6|fO<6~m(JS(zJ_X|X+SM>pR55tP`1.uAD,. J?');
define('SECURE_AUTH_SALT', '=e4S]d0>XLIT:yY=l|4F4qO:.i+mWmi_:p3C%;M.K{DFUOD_6X)*xN}+Ilq7xXf$');
define('LOGGED_IN_SALT',   'D)! S3&~NPuA-|8+ @xb,)MJV^1Q+>IIBE@|f}E!:CO]TcxH/,TeblHU&g21M]cD');
define('NONCE_SALT',       '9O<SOMlP4XiS9)RbIc8}O_8?9=lS>b!3*,03%,v2c%k-f*?+IUIzHvacoOtiav G');

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
