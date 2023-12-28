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
define( 'DB_NAME', 'blpwp' );

/** Database username */
define( 'DB_USER', 'blpwp' );

/** Database password */
define( 'DB_PASSWORD', '2DbsxFVS0_C684hFN9zs0QjW' );

/** Database hostname */
define( 'DB_HOST', 'blpwp.mysql.eu2.frbit.com' );

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
define( 'AUTH_KEY',         'AKxxav=A$:xa4bevL9}4lqAhFHHd9$XVm(YDYxxefV(R^]0;xC98t5M}V.l~f05l' );
define( 'SECURE_AUTH_KEY',  'C.(L]58-[~t_/]461.}1Fh$`.u s]3pV{tYfD 2 5*lydz+C;.DfjW8YjsQmP7&A' );
define( 'LOGGED_IN_KEY',    's6(jg9v.8dZ=?N}?xF=e?D!ynu!kq7Wj:7,jzTL*nPZqOGl;SgWE*h;+i#s^x%)K' );
define( 'NONCE_KEY',        ';P>;|eYvi9.QPhZd]m)xR,:Q?%e]4.4;bF%T<yIo]|V8bV6S1Ksm/0t@Jb;Hdq@m' );
define( 'AUTH_SALT',        '5@dk,5hv&Qyy$eDQ>SRF<0W~MeP 4bWkxOU>1v=>4s,Cqw_=dtno@5$A~8[,I6>3' );
define( 'SECURE_AUTH_SALT', 'Y?pLm]e%;L/N9.c=;p[*8X/!`alBMsjDaX]v(jSC*OtF7MP)9Hs+fpb&&/vl8!<3' );
define( 'LOGGED_IN_SALT',   '`ck?80cPZ~/6]/@E7@8ZB61Pf,w:tZ8?HqM,e]/3`yT;=50DCf/LkUGo7L*sf}M8' );
define( 'NONCE_SALT',       '0aUh8G)%L!%~L%}A,XoG7x1 7TqzYyxeJ-OxVn/cpO/PueC#ly2Cv-;$ZT=WrM;N' );

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
