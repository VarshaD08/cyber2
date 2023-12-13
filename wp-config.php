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
define( 'DB_NAME', 'cyber1' );

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
define( 'AUTH_KEY',         '}@EMdr/-A&BH:330LXR4MvF]f3o}N=ht3#D?:|^0)?G~d?%9S:9EwIbQNHQWe#~Q' );
define( 'SECURE_AUTH_KEY',  '`w_X pvq^p#:(aG3|vw4dcuz4_>a0B_avktyR@<LiW?aHW7UQdX<jige_nt]<RnO' );
define( 'LOGGED_IN_KEY',    'C9PoD&88e[} +gkbyxOSyhSgLV-[d/#CDsEH<]XK*c~P_?%)^(j )4#YT-s/yZD4' );
define( 'NONCE_KEY',        'bMI*{^hpd*93uV$KE+h/|8UA)3*79KKR8^[tU)Il.o9[@$uXvjN6*4##wpl6[tzO' );
define( 'AUTH_SALT',        'z|yeb9@kR<-n}]mBV..8(qRF>6Ub)?mFp.q<ca0h{z>q%.jKC=yEt{8%Llwg5P!]' );
define( 'SECURE_AUTH_SALT', 'cE|(!L7}]BcZ*K0Kd!@Tnig3sKZVZeK0,D+.q6h0r>*spx43Qr2y=FxlD[;/dMse' );
define( 'LOGGED_IN_SALT',   'dBYpVCuV}Ob#?tvAK.M[)wSZLU6ag%j[w)pOh993kF+!v5=wx*`g;s vV4LPDP`v' );
define( 'NONCE_SALT',       'zAsrKo.rv9jwY7V3OeE$c02XLssN>j:2+qt/Mq]Py#>G59gK3/HEl@q`9sz;3j!0' );

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
