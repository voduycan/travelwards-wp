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
define('DB_NAME', 'travelwards');

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
define('AUTH_KEY',         ')#rRiADJA(BVV3@fKq$[C,>~@g]J+. ]x`Ai2OK}nU:-d`z>.9wTt1B?A~?^5q;(');
define('SECURE_AUTH_KEY',  '.@`fW]bZdw|u7<9 1a`i32AQKKLduM3fcA%%sr|&c8>seTN^^pu#,6UQ@f|[0t;}');
define('LOGGED_IN_KEY',    '/vIz TYHSH*R~2l&(S_JjhVsR7zhq`3jccR<3n/#mMBn*/PkDkR7a.<1hQji}PHN');
define('NONCE_KEY',        'FmFwM&kVHQ3jp|=<3NzL5}gF(C9y8).42Q>YAvqx-5W|w20#KjHdWF6$M/lGNs.l');
define('AUTH_SALT',        'hje=;Ot~^rmp=|nKv{slx<2#w2(=vU{&_>iB$j]xA x&Z2=l3*{Ka3.|*PJ.qpi4');
define('SECURE_AUTH_SALT', 'v{C!f<RL_KgTGa+A:WhdiSvm7Ms[%:$m1^=5cp.f2(nujFcWXmsH7G=2Uu,32v!+');
define('LOGGED_IN_SALT',   ' ]3So6;rP_qDs}hpGrGjd<|C+ES{WM]B,H[b_b/RQJJLmqk;&*N&QrBZ9BXw%t!z');
define('NONCE_SALT',       'se(/LX#Dnp=Fd>WN)@GgWPZqlN*4;d4LljbJ` 0m5Hn mT-q7EefoE<$1rUG&?UQ');

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
