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
define( 'DB_NAME', 'xs969605_wp1' );

/** Database username */
define( 'DB_USER', 'xs969605_wp1' );

/** Database password */
define( 'DB_PASSWORD', 'n<d&eCf$-,NQ' );

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
define( 'AUTH_KEY',         'bQkmsvK1E-kcv~78AiC~?KYMK?(LO+yUy.g_Stfi6q.vd[[QfO:(,qGCem.?VPK+' );
define( 'SECURE_AUTH_KEY',  'ZF$WI1ju_=&Z&]A}t#gft|Eq%+OgIWo3P{6wT~#d23pwi(hopE=`ApM[H`||.1dX' );
define( 'LOGGED_IN_KEY',    'd:/Uu>4PB}lr_JmQzO{ZQ3!Y%ZnzxOc.g6N)>~O+-:| ?Wxb&x2Cwh1/H=Ojn9uZ' );
define( 'NONCE_KEY',        'T[yPp68E%6l6?b6[kzjpc/ [Wyn|$9FI&ffCQ#Ttt#dOG}]cS9O_X}L5#da.Rd8[' );
define( 'AUTH_SALT',        '#r0if#5ePnNyzH-y*%W*yEMk^%t%)z4-TO73t{(8|0hs`xN65sUiKsGdHUX]:u$H' );
define( 'SECURE_AUTH_SALT', 'o!yE,# PEs/lcg;F^Hnpq%_KD-FGhDU$r~ld+,|u.2 FoC<OyIqwLzzhC3j9 $J`' );
define( 'LOGGED_IN_SALT',   '-6M52Sdc*f^]k:3:z]*clW<SuY*UC#{+dac&0 H=7?Y ~F)Rr_Ra;Z.duTubkR!]' );
define( 'NONCE_SALT',       'N?!AI|@_yvpP-P= 6sWb/9Ar [U!C?{b_.ZYwvB3yccx0dnn-j;*wB&4otj#*qAZ' );

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

/* Add any custom values between this line and the "stop editing" line. */
define( 'WP_DEBUG', true );
define( 'WP_DEBUG_LOG', true );
define( 'WP_DEBUG_DISPLAY', false );


/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
