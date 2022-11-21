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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'cms2338200' );

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
define( 'AUTH_KEY',         't*eYp-&@r7|pj;Kqo|{zS{*sa^?[ZM|N&w,x=Crc v%B2Vo_B63(~h<CN?PpPR]M' );
define( 'SECURE_AUTH_KEY',  'GY2^$Zv2jiz.L6/8)`WVRprA!6+m*R&h9yB~fm?=nH%nn7fG_x]NR}6h/~E)?! ;' );
define( 'LOGGED_IN_KEY',    '~<cbdLT-csD-4}N>iClw{q6ZP*rsl>j:HQd_O1wBpET$eJTbHC,/bXgG5X.[1?.i' );
define( 'NONCE_KEY',        '-.^j(1JW[_9sA8ttt8M;*Q$U$/lEOC1vzS!7I-9ktF/oXei~:VvXw@(mZB$XO-vJ' );
define( 'AUTH_SALT',        'h4IsnActYFO^:)UFyca8:.sxpV/b$M0U64,caNUKn6# 2+gc{ *!<b+bdk_.Z?1A' );
define( 'SECURE_AUTH_SALT', 'PXkXE-pck`VZ7C!f~X3KcgglH~B}0E#0@K<iY;A5:Rms9`_JMdLE!bYinVp|JT~{' );
define( 'LOGGED_IN_SALT',   'Iw*zp%U]& f4euNkw$QL?^KIty!#u$g<9 3:Ds,3rIq}`#HL.uEg|EWu!DwZSQHb' );
define( 'NONCE_SALT',       '1Lv_3-Gx6<p9!4W`:8|-f{(o8|&DuH43o([.9KHL{$`Ul]&SJm %gwkYQGz>+a<Y' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
