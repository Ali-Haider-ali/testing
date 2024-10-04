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
define( 'DB_NAME', 'testing' );

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
define( 'AUTH_KEY',         'LJG90ok&a;).dTY3P:gY2b@ 3nQs+M$?[aH$P1z4NgD X1b:{V:8%u6Vp<uA}c|;' );
define( 'SECURE_AUTH_KEY',  '5MA D-yu:=n[=%sd~ GcV #?Qd)Mc.JQJ+0?c:JG%t9n|Luw7?v-2N^=I~w+Ely0' );
define( 'LOGGED_IN_KEY',    '1j-lNv.(f]?<-^/]g`a=io/9ue^PQQ(!e+W.MyzgH6/b1d>Y^,kOTHG6#xWOAP,j' );
define( 'NONCE_KEY',        'S:~sM5Tdld *UgJ*z[LR@iE_~VBK$Ss{ob~WTJDhG9g9(-nFt:z$F*R*$<s`V1CZ' );
define( 'AUTH_SALT',        '=uc{V9cKc:-zi5fLq.hP>hWxQ]*u%g?fggkhy8LJw.Q0ts02$b6s8IR(vba/I`Kn' );
define( 'SECURE_AUTH_SALT', 'lNv-E-iikCUM|wgM:*>gHRw8Xy9rN8s]PgkOKX?xJ{Ozj8tm6^#4CG+xU,eZ&8o[' );
define( 'LOGGED_IN_SALT',   '(}tV]s^I,cK!OzGs?EJQk[4QVZL=QzX6{YIf-f|XbH)&@XRN(h~oW>[86FL%kR!]' );
define( 'NONCE_SALT',       'EZ]DnC&`FBl?MA8p2;.(oH3TTF!&RzdFZgk6S/9^02npc[VN(+5S#:oaip,C`zkH' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
