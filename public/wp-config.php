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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'vadim2853' );

/** MySQL hostname */
define( 'DB_HOST', 'mariadb' );

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
define( 'AUTH_KEY',         '|aV9s2q2x,Hvp`82T)3}0TFHhg68;K?*:E<Q]cApmc47(:q!CvpM@318N?[U9UxS' );
define( 'SECURE_AUTH_KEY',  'TaSVOK9o%+G1nn8Vytj8AU.efb3qT?kCmZSvab-]MFsm:?QoleI}So!CYObNkBKw' );
define( 'LOGGED_IN_KEY',    '/.k8]-rmAIzNxY#=L~,Ct2TZf+3V<@0= 5m.Wd wac3Q|vtY?QXv&yz+XkS+mg|W' );
define( 'NONCE_KEY',        's3R?8 ~><)K}nd?Xk^f{s6+m|Cp$R3XY1G`B`&n7|^Aoxk}Q`[D46n_kGi_^RA[F' );
define( 'AUTH_SALT',        '4II/anAIm^uais^d0:HcaiXf{u|O4o_D A,mm^L&cL/L{%m.nu;5aL3@5L(sk3[W' );
define( 'SECURE_AUTH_SALT', 'qG,?TS71]7Rxe_Ur_%qnc0|+7~vU?WFYjRFo0f#WCY |&?qK*A_E8,-?@&h>U4jN' );
define( 'LOGGED_IN_SALT',   'B(fFyeBMAibMa2%A>ZM.!}Pr$ RSEBbkOT=H,YH{SJos!rykh2vy8u4UA9DsdLci' );
define( 'NONCE_SALT',       '+}.nSloc}!i2|dA_M8nP~b[3;@vY~Vel+w,s}{LPmaC`<k)*mu4G%jl1B#[ 2K!9' );

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
