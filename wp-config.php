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
define( 'DB_NAME', 'testsite3' );

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
define( 'AUTH_KEY',         'v!3iMhuZ1[B:[0a8rC80`N1HrI>3!QoK3&`{UB,;sfGQ);iaiH-&}WitU)NUXiJ6' );
define( 'SECURE_AUTH_KEY',  '{3gq$&ToQ3V!z_BS$M:i0{G^=S5GY[8}6yj[^Pjt  r;[X~Nh~p1A}jF;tx`m~QK' );
define( 'LOGGED_IN_KEY',    'zCNNSd_1CO`R!A9R$K W5{K~wte5_yc+)Z@4{Glcnqc`uqi_#3u|p2w+?,TU;)bp' );
define( 'NONCE_KEY',        'Y3Ge6NAdox?Yu3R2nB?Ae-i#/3PToxh?YR:hF:erV.wsn_pmWypsBu]40AShTHdd' );
define( 'AUTH_SALT',        'A*yORZ>nhTLxb.Ii,-7HC3 NCzAK^muG<;dETY!?M`uh,05_0~hO<h(DW<0_{^rQ' );
define( 'SECURE_AUTH_SALT', '%B%U4q@fYhx3mo$,%V>4v3x38Nph~%1^8%d2(.iNu$J{zk;I6(uW^CSjV/IU%>2Q' );
define( 'LOGGED_IN_SALT',   's0ISG@)m]:o(k<hXg9*c*d86U$Bj2Og#h~=80;<s9|<a/5_Hr!$!<AE|rQNB!*l4' );
define( 'NONCE_SALT',       '~I>fuY(]1]Kt5ILF 9R.l3O#BH7xnKSW_nu^Xu:=,U^JcSG=cNDYmWpivE_w~t+3' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
