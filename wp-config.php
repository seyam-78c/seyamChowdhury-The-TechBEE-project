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
define( 'DB_NAME', 'u824886128_TAEM1' );

/** Database username */
define( 'DB_USER', 'u824886128_YKqou' );

/** Database password */
define( 'DB_PASSWORD', '4JJhj5bLj1' );

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
define( 'AUTH_KEY',          'B5zVxal `-R<z=9~#Z.*qy,c*z7mY>j>v0F82r:x1=At,Pdp)5:Hw7Jvd7H#8xMh' );
define( 'SECURE_AUTH_KEY',   'rak(Js8u6`f5Az!quoF[(EjfM lvDW1Zky~q-v9_#D#|6L!iMd<$PrvsA`%,=tNA' );
define( 'LOGGED_IN_KEY',     'LljmOE)*P5^j-2*j2aRwU%h|UBu#! HL*&E$y7e>?zA>Xh7#U#)V+Z%Q>mq5UOy,' );
define( 'NONCE_KEY',         'ryJl%~{4QWE6UFYdGpX?8a5X_2#?79vYQ(o`qX9K&0kacCzY4~8Ujr$!g)Y!(31q' );
define( 'AUTH_SALT',         'Wn>eZN%C~Tl=z~%)5ZM7.PUN6Ht5uNqi1=;h5Jk)vm8<He{7_s/z/2gNe<ywKOl}' );
define( 'SECURE_AUTH_SALT',  '+[cCTyfM;Z>lA)TF]r!V^GOCKyHr8~g91|)QyBM]pSa3 N5bQTF&] n4vQf6uL* ' );
define( 'LOGGED_IN_SALT',    '}{k73clY5X@MNUS<-d[a88:}4BJmN~Ul.NL^ECB,-E;75r]]:0:dLH$dusA+h*8m' );
define( 'NONCE_SALT',        '7 d>n}*h=R(MbCc.y@lyw/`,U>K|[UeW!M5MW$XdW#Q+UU.D6Lrb{Y%6{N[sc ^7' );
define( 'WP_CACHE_KEY_SALT', '~t9b=ST;-{&eVl%po`lPZugT Nr=^7HU$O0IQJ$sn(!#$S~);!?IjaWjoB3q!c3c' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'FS_METHOD', 'direct' );
define( 'COOKIEHASH', 'cdc85492bb544a07ecc4ecc0958fe1f1' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
