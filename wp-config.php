<?php
define( 'WP_CACHE', true );
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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'u305902363_3zSA8' );

/** Database username */
define( 'DB_USER', 'u305902363_i6RsF' );

/** Database password */
define( 'DB_PASSWORD', '04KVHcunWa' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'n) kY==r83mw~0^L+C ,.CkAE[NtUUE+WxS*8ym2BLW&3ojpFSBZe3XzB|ZHM$wQ' );
define( 'SECURE_AUTH_KEY',   '_,!d/2Kwj$bpP1_M=6RlZ3^.:|3$la@M>v_|{Zj{ioU}YDLfGE]V,u0g>?3]2D:&' );
define( 'LOGGED_IN_KEY',     '>7HTp)e?fP&Y0C&DynH844W.fNE~W#HQsOnXc=;jE=~1qG];{>aDoqC#J!=DdY5`' );
define( 'NONCE_KEY',         'q~Qn&lyF7?yDnj#H;+0ZVe0&pP=2KAyMo,12q:)QN0nNk+6i,552R[8vm0_F}9_a' );
define( 'AUTH_SALT',         ';M<6/Ar@|MK5m?Y@B_x>F[#Om]5=0uXCj%u?n!J5~&0wmE|ZMj%KrFq}4[b~%65c' );
define( 'SECURE_AUTH_SALT',  'CM6I:AS6}RE?aRg|dh;-Ow(({:ZuhYc^VEkKN%cH`5p:]L,&>f}Lc+L*/PE- S8C' );
define( 'LOGGED_IN_SALT',    'Ol}|1gfPuJ@r}V^KnB1#W2  U>@3!uH_G>{hP~M`=T25CVDWr#ju9Vx}4/Kki2wc' );
define( 'NONCE_SALT',        '@1h][50::s7P=JOfl4*yG7|;/]XLsRdd.=YMU?(q%|cR[:v[D;[BCRlBTX?FSu4v' );
define( 'WP_CACHE_KEY_SALT', 'S]PY7P`/v8p@LamMq|=ROc0Cdo=PD7gm=s.@}M2!,eSMI=]#{R-d$!#vSM[96t`6' );


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



define( 'FS_METHOD', 'direct' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
