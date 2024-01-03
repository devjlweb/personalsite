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
define( 'DB_NAME', 'personalsite-db' );

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
define( 'AUTH_KEY',         'Uh6_et<QFC rgTwRwHP,1Q$!46qWu[gxc@>K}aBOE=&%NB^%HLD+Q LX8;yvWlQ9' );
define( 'SECURE_AUTH_KEY',  ';Ow0E$`[pA{g.X9!.A<Bu,XH 8TI8f~7aPc58@[Vc gINmuV2 CQ~]9$!$R_z{N1' );
define( 'LOGGED_IN_KEY',    '>1S[;6)ni7.>-n`47>PY/1XqHx-of-tE#Hp5(T?%DEQ3*HI pdJonKGT@[6D^n-K' );
define( 'NONCE_KEY',        '}1 1{r.FB;C|F5{fVL?Q,~?PWO?4SV1w-G*$GoAHkuR%Y@#Xu<_u=F}kh;I|*Ik0' );
define( 'AUTH_SALT',        '0Cg%kt[uF9GTq{,3WI.W-[*e5+WF2;)@P+2L`?,Agh4N%9(Fz^ZlML5s<L$m!8fo' );
define( 'SECURE_AUTH_SALT', 'PdB.9j;j8DGL}gEW-(lVkcfm8Qy&w34R%U1`z:mKo9xC<ElXd*[ITqu%O!0RmAf3' );
define( 'LOGGED_IN_SALT',   '^cLb!c9l-58DM;3Xcl7rIfv[= %TT@t!fdSb2B4C<QkG(k-r+]n4.FQrL^K(SX9c' );
define( 'NONCE_SALT',       'p~g|;SIlhtVeJ?H@FOY;lm<H2r//>S)9~T;T0#mw!h54nL1isryk~65`Q-#7}2LL' );

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
