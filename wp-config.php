<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'rarifashion' );

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
define( 'AUTH_KEY',         'c&11T$8MTXCR=pcm;n3PnXc!kh.Ho,fpX`_8q4Y$ L&|aKBNX8<(1cTC? 8)Sh]d' );
define( 'SECURE_AUTH_KEY',  ':}gQrF[&kG;E/TPPBa5PR?nY9hQ8kFmZW1EP46HBkVxK#rFEE>7V X`bQWLJuMac' );
define( 'LOGGED_IN_KEY',    '/,l$aF4scN_}k6;,~]qlnG6vdOsztZ^=Os6f|<b<h8bhDO5AYad8^q(N Jxqb:gA' );
define( 'NONCE_KEY',        '*!_Ju[}K:[a[MiSQ`_Di:tqF&%]cd+$4PD{A3%S 6t93Z^{LIVuIizmTPgLj0~T*' );
define( 'AUTH_SALT',        'h}3?[|{FLJDDlj53c,tlTu@N_l/tz-}ZJUT{_tY]hBN[B(zJ9RAi3q9;.@kq:Vvx' );
define( 'SECURE_AUTH_SALT', 'c,p{[]a`owk_{gb`fG(|MfAsT|<{e~vt^P*-e&Ct{+cdrakHVbHJl{*cOickS66H' );
define( 'LOGGED_IN_SALT',   'Sd+!kM=?@AmVkZJkdhu^6d[`-X${[n<?CKt?G$h#5/2N.M{%y7{s !)%Pet$qw6)' );
define( 'NONCE_SALT',       ',pOF H(96$H3L+1@Yy:jkfscnFDv=KaJHerM9/-Cg0?::0~6$r]>Ezp0Sh%eCPA(' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
