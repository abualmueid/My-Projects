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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'riziksof_wp' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '+ _D*T5:b_ulB6epkJs9-|&R/)yqYrm~_i4_*BnbQpI*2|SS}tSw?i[bDj;xCwNX' );
define( 'SECURE_AUTH_KEY',  'DzP~`[C}X]6f-PSpmR>^?ROROUEEi9:kQnGPiZhk6Br?&C[sQ5VF.`92(bHt9yi ' );
define( 'LOGGED_IN_KEY',    'YNB?t;-4a+6vT~5;^h3-C&l)_IKA,o%AvwFLwb&1/0D &n}0@r4<2^P+&>*nm<H#' );
define( 'NONCE_KEY',        'P[}00[M}k`2B!x5VYGhtFG>3#79>>mWkz UB5j|W_-UMG~d?~1bYFs{VI98:=A? ' );
define( 'AUTH_SALT',        '51`w/3^Gs.-1|GgNh~ds*qD(wkb_9sa`t{`w[xYKBjv6hZwW5EMJ{X[e%83w-f2!' );
define( 'SECURE_AUTH_SALT', 'TuHST(c*uPHw&0]DwbtqLk`h}.X0eM(JE2+~d`S/z([dkAf)2>CcsR[IBl, v6[b' );
define( 'LOGGED_IN_SALT',   'MF+P,2EoK^m0%4BzBO/HEnQ3$DR@XVDB*%22-ga#I{w+^FO)*K4Hjho}(xt-!>D?' );
define( 'NONCE_SALT',       '3!tqGYu)lIP]t@rJBr%fy0r~`:fPi+q1E1Q2X}*:rd8/sZDG%oM*T|P)yKhNuAB@' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
