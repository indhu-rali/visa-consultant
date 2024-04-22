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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'website' );

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
define( 'AUTH_KEY',         '4CZyy>K#vc+a,tp/z?#|*0QfK~h{f-w^.2KB~QZw8xW9Tc1Wk-E)f]/S/lT7 xdl' );
define( 'SECURE_AUTH_KEY',  'Lf!yf;<7(}:M{~=`yyj0[>?.T&Mu{)[r[!d&UmD/{;Icq4 ok`]B{2K!}! ;t`4<' );
define( 'LOGGED_IN_KEY',    'rN1&t0Mf@w(`Qgo|^9(cbazQeqB(`Jja@U?)2CmLCIMg!;_FEj)V^HSYecl^MNJ<' );
define( 'NONCE_KEY',        '^8hsl46/+:S.B=X/W^D)LS9BF3*r%>a.~QN|B^2-)aTRt,mHUnxAGSiSdsrIIIpL' );
define( 'AUTH_SALT',        '_oPba)b5HAWF 1wsrFn;f)U0:ah8r69/*aAOC-84D]=Wjh!QNB*J{l<y5v|nQG(9' );
define( 'SECURE_AUTH_SALT', '=1v+dLR g-DPX=9&@kY0y=AZ3u(~xG oGCWD 4jMTJ$WM1VfbNR/QcB,*iF,B eo' );
define( 'LOGGED_IN_SALT',   '&J/vB,=IfYHD9[l&=#O:S7%d0@aYRQ#w!1r=Nt2?9l h{$Rx4<Ui9JH6o[IrMKCp' );
define( 'NONCE_SALT',       'S+ikoi*dS~3pLy&>.!K(#-[l#M`y8(:+2/$aak[5BtF%%~4sf{6jN<?|>_iWfhyk' );

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
