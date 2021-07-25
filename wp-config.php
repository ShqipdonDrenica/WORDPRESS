<?php

/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

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
define( 'DB_NAME', 'wts2021' );

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
define( 'AUTH_KEY',         '!}ZC/VY!e};pOsWSf<%dN,?t{83}l(y{)5Gc?vbipMw^5FD9Cwol#e^8_9.WbmK/' );
define( 'SECURE_AUTH_KEY',  'Fck+hL)J~Xk[JAV6<3Nob>>lK1WoTX`av(EPpXT8wEKf;[G@~D9u!eRE_Yq+]{a ' );
define( 'LOGGED_IN_KEY',    '}8,nl~?|+y/_2HoC-9|8n:!#41P+$Oyr@%UNX:Etb{r;%93OW+p:q|-WZxt[Z(w&' );
define( 'NONCE_KEY',        'V=14wx/W-0N4}X>JKD?_#N(Ea@$)-xc+ba|3CfViS[E+6P4iSB;8MkON:`jh7MSX' );
define( 'AUTH_SALT',        'O3PG<_{7>BN6h_=Lc4z[9%f_.@J_q+NPj[8uXlC>*T*8/`~iM4D_s6#yKK[St6(=' );
define( 'SECURE_AUTH_SALT', 'M)9esXr6mB&J=+:#y oMAJQQb&*U^o:MpB896>yztob;W&OBeF* $*<|m V)hs5U' );
define( 'LOGGED_IN_SALT',   '`h]dkjb[_]_PHn9pl00~G/P8Uu&vk8)Vy(rKL>Tp@CLY5F4$Ovt(IcH$mjRn#jhj' );
define( 'NONCE_SALT',       '8 ~4#VPh;x>sP%rR%=bhjvPA0l35(1_Y0b(%jiT/sKpk<Vvk8c)8)Om+1`]*}(Dy' );

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
