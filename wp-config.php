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
define( 'DB_NAME', 'businessbrand' );

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
define( 'AUTH_KEY',         'ZN,K5*QHnkI`6[{<mS!xs@BX8!^j;iXxo%5I78@wve<$SOsM~Wuw`Hf)fPFe:gw@' );
define( 'SECURE_AUTH_KEY',  '6Tp=W)C@7e$!T} ;.Wr1 /Jvy,nV%,_K([px@4|5r~/)PM|P ]inL0Wj*`t&e2Da' );
define( 'LOGGED_IN_KEY',    'Fb@JBb9dw6-,^`RW^N^w(V^T8Ydx(;f}4<TM?n)bF0?$vjYKM?|nwYk.?rf1kc2Z' );
define( 'NONCE_KEY',        'o<`*`ASX[`S*g3Y;W(>`RwN2kQ>009y!?XoLLRR;fV]w*jd+s6L__Nz.#Dr(Uql_' );
define( 'AUTH_SALT',        '^)+J6FOxZ,0sc0ba8phvufeRR<phhy3!{(]$)yzjk$HOv<lRM,FsCtN~Qv`s?M+F' );
define( 'SECURE_AUTH_SALT', ';..[kxxX6;ohw&!60WQQ|R2u>[z_>iFvb-W+G#^jhjga)RYfhd>a686<Ee2WjhuH' );
define( 'LOGGED_IN_SALT',   'G7~IUW [73]%gJM=Jg+-AJ6U^{TAM~S/XK?gr,_Zfz>/X9}pwK7{#7~7j.u qnjY' );
define( 'NONCE_SALT',       '7ue7p?WXI!AB)f[#~^z3G)r(^!:Kuz[UYjY,i0bhbv#W3D1jrW6+kLT7b%%64n{-' );

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
