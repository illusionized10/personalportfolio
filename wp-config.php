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
define('DB_NAME', 'calincohan');

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
define('AUTH_KEY',         '@AP_)y=_(TGY*JvwwK2()l|?D_ckwQRN0V,>rbA?(Td-oJ/O*BkXoM663( {mDpT');
define('SECURE_AUTH_KEY',  '.wU!-luF<5#/!wG*!vOg`t*ZauUCAYe4@D:n=+gF/jnH!^ao(^-s.qXM<Dal1!T$');
define('LOGGED_IN_KEY',    '2oakKjPj[ KMSsKtWpo7W H/h>}Fu0,dx(n=p4ya50g-loAazO:LHcY`eSndI|`}');
define('NONCE_KEY',        'Ti9cMF`M+[jSZcb|n?0+*?oO3@Kxz$~0z}$Z?Zcrzsj2uoT8I3M$uQ_Ov(e.m+@I');
define('AUTH_SALT',        'XCPZT3iVvw_z-5J:FH(kn!L#Ood=u`K6^R?PMG^GEE]4L/hjAt;Nokv35I]L~6ZQ');
define('SECURE_AUTH_SALT', '4qtinM4o^*gvjt8WsQ19P|P.>1NfdG[nxC{,1`(#HMhf3o~C?ogmtmf%n^Ob%}l2');
define('LOGGED_IN_SALT',   '(`D[,Q2/|>nZ>)I(d;ogd*}FBhm;yBgy}ix g3MujtOR?k%k{L8Z==Ga)QF%7xXt');
define('NONCE_SALT',       '0j X(/vWO[;0jiZ)z&{`rta<>R9JW5[}j%fb(aK)oUwUNuQ34cQK0q{@IOW3FL|n');

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
