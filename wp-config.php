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
define( 'DB_NAME', 'juniorsilva' );

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
define( 'AUTH_KEY',         'TLLg~xd!7eMgP7fmBe?66]VmpT,KWIiQ<>[X8i%S9{O`)oQ?u(vE7:nHBf#Tr86~' );
define( 'SECURE_AUTH_KEY',  'HFx2k=Ce)_>)2`h|]wz1%j*BylmbBD3>bPE[xS9BRPvR.Sg3I v1,3G-QKkE+7 m' );
define( 'LOGGED_IN_KEY',    '{Nz(`S?vGoQ09MCjB=f}W!+IQ^>:6Bag-a4tJ_{xw4F&S%e(B&H)fD[LzvwpiaF1' );
define( 'NONCE_KEY',        '1@D?&:6-&N7O a3N_J&&R Z)N?,UxQ;34-`*Xue(^/.TO@OV);{IsEpz`e;]>VqM' );
define( 'AUTH_SALT',        'a;nJ#p4NnqExr:=6/C@}n`+y8c]74K<HFq&EP_3:.WvHMKt*``G9*q<5cUr7IZod' );
define( 'SECURE_AUTH_SALT', 'DW{e*RckT:Bt7bDJW@-mkFjMp0jBZS9vM;?jwv;y`m[i<pjA3+$J[X}ILWiAE5XV' );
define( 'LOGGED_IN_SALT',   'L>&cNMe%r,8e*ZZn?t(u{>&bd2D8?H/,}3<CX.@ihrCQWI]7jg,.Z9,-cIYutUpx' );
define( 'NONCE_SALT',       '#+} eCn?=0S2Oe~Vc.FA::.-FFuB/}b;A-P[RxI2{@ .9V9v{DWd#ivSx~,>&!M1' );

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
