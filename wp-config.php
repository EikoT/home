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
define( 'DB_NAME', 'eikotportfolio_db' );

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
define( 'AUTH_KEY',         'jG-GP-0kw=#7dwi{(>mN6EHZPf%BB8irwvU-qjW3|nnF7lzZpi`!&Y6OO70(H<S=' );
define( 'SECURE_AUTH_KEY',  'Txn-E}$rUMvc$ B0&LZ+dbDH^9RQiq0jADi# tB;bfmCU1f.~=Y#{Rz1,?&h8$h6' );
define( 'LOGGED_IN_KEY',    'e6Ga#-jW(A?O>flZX>@DDaJ7(;MiehSdsw@fzeg8heXuf9Kd)P{)]2pgUI8HwHf@' );
define( 'NONCE_KEY',        'pP2%QfFKq#%v+9XeR2NY/,yt 8>:QAT%R8T|*~LOhDV#$ t~%<NH@8{1v1J?%PDH' );
define( 'AUTH_SALT',        'fn`g1wT16m7[g>l^Z(7=}dD2>A|?{I-&=.NqbN2F%wBM~mh*xt<Ugk#h|0zKP-bz' );
define( 'SECURE_AUTH_SALT', 'U?]#3YRj657v&!B<%m5<gb63kDt?Dc%@[1Y+@_T/3-lGbCdZBIdfQi<NJR0_qrCc' );
define( 'LOGGED_IN_SALT',   'dJHCgT=wh9uHl%]LKJ?y$ed6?+]*NLL8&:6.hZfV#Gdt1y+y<<4m8Zdv3s%|=7s@' );
define( 'NONCE_SALT',       'T2!K/x:C!@_@@D _IZg2myDgm,4XP>[-VS7YV=emZPp5j%rv5+qOTMts=Z6|,J04' );

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
