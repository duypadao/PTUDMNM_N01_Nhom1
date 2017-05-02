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
define('DB_NAME', 'u780229451_local');

/** MySQL database username */
define('DB_USER', 'u780229451_local');

/** MySQL database password */
define('DB_PASSWORD', 'trong@123');

/** MySQL hostname */
define('DB_HOST', 'mysql.hostinger.vn');

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
define('AUTH_KEY',         '$vcuHDF%je%X4X.]JWh4zx,7M-L_GJt?LRg*mYZZ!E :f}s~ZzMje;1kDz>=@1q9');
define('SECURE_AUTH_KEY',  '|A9+F{5Cpb|J3#_TVi_Ti$pSQ8b~+uvKT5K~qf~u;+hETKK07LHmS2HPm(R?I`v$');
define('LOGGED_IN_KEY',    '8=MM(D%*,ZwQN!D[JnWn1IE_F< F07o@{_s5PoYYk,wJ3>|y=~OWQ=={)<vSu3yB');
define('NONCE_KEY',        'xC9skjMDZR/O]*nzF+V@0p&uGtWS`,asWJZBy~(G=AWxu#2RBy9/ ;o,]okvIiT_');
define('AUTH_SALT',        'p*}9*]mYuN_~yS.5[&JdmK4[xa!o,9(]LC&PuY5*92N-Uy,! cnxq(bwHr9V|ZYU');
define('SECURE_AUTH_SALT', 'Y2X?TqmxK2HMOz=Ni@fxD8%9kPe*R_G,^<`U0|1-By<^B yy:L4N*2XpT2Yt8$Y4');
define('LOGGED_IN_SALT',   '&Vj~#:h=a~Tah}I}fO9y41c8av@?CX:%JmsD`+%HZS$Z7>}~,OYrdr^A_[_[)T>^');
define('NONCE_SALT',       'hW`B)@W/F>1!>WQce#b|dz%dMh;r=(fj6Bl=.m;ow8&Uvw2g`UI S)_^Zb~(bE+q');

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
	