<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'db_wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         ',Oz&d2#2t6PX,,Yf=BO .!Lx^Hr[p@NE`&v&g?QBNMu-_6l0L*A]93B+Ha/,MO#=' );
define( 'SECURE_AUTH_KEY',  '7;4tE!&.$2zMuR(_Wy.RwR@BKog,EZH]7N~/!A8>`o{-|aK%!,e/.0[ri%U4+l.m' );
define( 'LOGGED_IN_KEY',    '%rVm^9W<kcy^]eSXrqLv.R]cg@mR!Js^7&f2hDU0~2%(IM@kn#,-<jO*-N7;u/,F' );
define( 'NONCE_KEY',        'po16eI;,Uz<m$}>:KO)~hy87!,.~k:Rv)`nnJWK@[^nV&JGZ|%)aHu~**Y@*!YQw' );
define( 'AUTH_SALT',        's+f/G_ol%q`!&&I9FEi$|DDHbuq3]APG>/1//fj+*vJ#o Tr^L}p>_Jr&mYUs w,' );
define( 'SECURE_AUTH_SALT', '#Kgc3yNWE9/MvG|;q`G}!:KtWNeg~Xj= KR3qsSZRAAx(u 6:MM*6u5%~ /=^AUi' );
define( 'LOGGED_IN_SALT',   '?~|%KI|W#-W,.Gtz_B=Vzv4F+)^SA#5}E_r=llq,?l!4Z<7oj;9K+DXs{e#C$+bd' );
define( 'NONCE_SALT',       '|2Vq*mpn)p$,nkn>KtrG-SlQdtzMYO %;ql%!z7j,@4NofhD/A#3tVk2|sW0>#V}' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
