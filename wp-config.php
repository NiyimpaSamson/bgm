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
define( 'DB_NAME', 'blackgirlmagicnaturals' );

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
define( 'AUTH_KEY',         'D*Xkqt?7[gHX#WXQ^erXLe=ewnA()051-nT?*R-ym^!s]YTfWCi;2a|5P#pi=Eu+' );
define( 'SECURE_AUTH_KEY',  'KOs5F$h8V(I,%aw@*PcGU&6a3A-7q5^If$Ja^mOe3hL:&#k8xo2|6S{{97aH&s=h' );
define( 'LOGGED_IN_KEY',    '(ckq8cD2-<8AT>Tq9HW2<%{FW|Y+{JD*^R4Y,yC88V*`!UpyBMTlc=MAPeGK<T-U' );
define( 'NONCE_KEY',        '5n?&Gnzv<gbhrYaE=7r@AsD<:#J>IV[VQ{U}*VKe8bfwMVo}2#t`z|GF0i}?ihYO' );
define( 'AUTH_SALT',        'Rx=oo=$/yCf/C?:WYA{a]g! R#nz;qW9$*28g)Arg&x=u]g?I22@)|_K5]~m5w9q' );
define( 'SECURE_AUTH_SALT', '!plZA+0^-F4(Vsw*zsN>45@=*jIg@;W9~nnvG#JGG*oUgQ9+YhO^c_7Oh,]zgHFJ' );
define( 'LOGGED_IN_SALT',   'b0;~n8$y.!W6>Q_8Cb%t~<$bhV&nYP]-G>!L=)l}VI}g9?SS7e?]gAP5h6Ar_rQW' );
define( 'NONCE_SALT',       'N@FinWN56aBZ-|ZaHh}!/;4! tjJFca.X=rhx= &xvBMQZd&j`ZI]1|H?/eZq*{)' );

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
