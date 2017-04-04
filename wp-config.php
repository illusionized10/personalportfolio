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
define('DB_NAME', 'personalportfolio');

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
define('AUTH_KEY',         'dk;U4*~F-;_-nzI1_-nC1^ZiROq.v5Jb8yE$PNI+4WU;{mIgh1ccR88|-Qo,iV1&');
define('SECURE_AUTH_KEY',  'K>q(E/ShDE&4iWqCf&xFDu?f+vAnMkL0X_Eka~bR!sM]_]TzmtXy0#qjd+|qk=^ ');
define('LOGGED_IN_KEY',    'Yd!,hW 03/(Jo5 Ya_oi6}yTz$fF(J*dM_x/wblgo;0>gqBPcaV~kCOk 8ZkeVhv');
define('NONCE_KEY',        'HD~id,z;.kM8p$DGo|GLs`EuBJh2@K,kBWs~R`N@}$T>[Z},A=zMxiigY3O!K8f0');
define('AUTH_SALT',        '7yWC&FXS[/ES3J~~SXF~crd<]`cLl&<7n!H).{ b&< *j(B]?Pd%{H(t,q6|K>h5');
define('SECURE_AUTH_SALT', 'm=mAh<I-9wf`^iIWO4X(AvIcTcZx@hQtnh_mIrQ|KY>&OgCA[A@=p $+;1RSV*>O');
define('LOGGED_IN_SALT',   'yN`,r<cC-|JVU(naJw%rJv9pb>wMm/tD.Fj rQi|8sF*>,OwauI(h?$@:gJ]!6Ps');
define('NONCE_SALT',       'S_p3Kw_t_JII8NbyU$3M>Bi3!:Tt)~-|[6ydr={8{(U$$!u9<Ov[(S~v?mv8@fxt');

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
