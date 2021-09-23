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
define( 'DB_NAME', 'ecommerce' );

/** MySQL database username */
define( 'DB_USER', 'mcdevs' );

/** MySQL database password */
define( 'DB_PASSWORD', 'builder777' );

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
define( 'AUTH_KEY',         'KC3R<Zh}64<m4?H#hZ,V(OMU#DO~T,]*x5%V}[-pWdHsKtR%?8h=gF)rcr<axWV|' );
define( 'SECURE_AUTH_KEY',  'I3/&1p>zG[yzc.Tf.:dMXExm:o<&@jO=wod1!aBFx*@MI2`{&U-wY8RJ2_;>-;BG' );
define( 'LOGGED_IN_KEY',    'Q+&,n%DPR!X[Z&-~@fa/e{I.O-RLFvVm0pq85/?(_kn%5|;(:DZ5n8OHx{}6>Fjn' );
define( 'NONCE_KEY',        'D[==.? yStv]FLYj]UmCOi$DGInvN8lZ5,rY({u,*W2:}n.o]1x3OYAgE,7UTRpW' );
define( 'AUTH_SALT',        'ZLbxb?gT%z<E=u={wz_N!g|LjvN)-H1W.~.l4*lecWwwAXoLGvzFyZ%o&#6Wn`Nz' );
define( 'SECURE_AUTH_SALT', 'SzhD5SpR8zF|<vKo2q`j]i$5ruKL|Oltv(QAO$j Tx?[,;{#TbVKQmUEuGw=c3 F' );
define( 'LOGGED_IN_SALT',   'aJ=tIQ*l@Gz0pX?f>~n|L*qx6)iqCIHz GxDM+8pgj;<R46&~sE,Ny7)N)E|767h' );
define( 'NONCE_SALT',       '4h5y<}h(9i,4[fit!_PvrcyN&yK99 <&nf&Ol,3Z|>2OXqLu`Qf$E+(fypquVx!Q' );

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
