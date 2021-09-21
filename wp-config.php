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
define( 'DB_NAME', 'woocommerce' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '.CF{D-hH7)u=~FK%n MefnaDBfKY+$gTHL&1mg{j/G^{4z_5 ?)],!B(=0}@z-Vy' );
define( 'SECURE_AUTH_KEY',  '6YANLa]EM2CP|MXVUj&.}!xj7FV i&{1S`vfr&FHZKQCMlmk,]o%wzF|DufZV2G#' );
define( 'LOGGED_IN_KEY',    'zKF4<IPBhllh8XOOn_@O&@6ITvx `=4Z6F?iuCg<DpQ33w_z,Wmu+{opeA.6?FQ!' );
define( 'NONCE_KEY',        '>e.{F(.R5ghCw/*+xM6_]ZnF<uJ>3jDK=}3U%u1Tb:3K8sSnGfsz|_Dh!kH04jZy' );
define( 'AUTH_SALT',        '.C<n)OIC?l:ZF#!^g[~KSPdgNyYWt.[#lp{_nW44l3/R.XUJH.&3f?2&r 3+wo||' );
define( 'SECURE_AUTH_SALT', 'f@kN~>Wu@I8cB4i9;?&&y8 sL~)RIi6m>u*AZT,>V]Kj=NsTq!Y6jT}Mrmv^NWlE' );
define( 'LOGGED_IN_SALT',   'sBx~(r$Qr*#7q`3eP-{(PofD3%#DmRSET3aQqDsf(j66GI-+ghY=NFYpIbnvKv_H' );
define( 'NONCE_SALT',       ',=F/mnugsnb!aK@IGix10J!ek,++8IWoW:qC 9sOo^I$ZQK7. q5/(2FCD3=X:KD' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
