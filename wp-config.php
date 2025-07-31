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
define( 'DB_NAME', 'cnbgroupconsulting' );

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
define( 'AUTH_KEY',         '.m`+/AtUsbQLP(qm%(+R$@nBj4U<o];[!*L4N64+]-QIPSb0n%VNvEtHr`bw{%:F' );
define( 'SECURE_AUTH_KEY',  ',rW^Tr}Y+x@cOn qbE>>xg,DkzePM44%g9a*i=hj.V.tvVKR ;$u[I.TLk`yC_${' );
define( 'LOGGED_IN_KEY',    '3iWs=i4zSyZ(>H)x)@Tshly]Dmf9X52z<>^r**8nyv,/;w7i-n/:3>yw:^2Q]&#a' );
define( 'NONCE_KEY',        'q26Y!%.K68&^{<W+lHN9Y`JHk}iIJgaeg_}`Q3rFG>61 b!s+8fA.JC|O~}~)OCT' );
define( 'AUTH_SALT',        'GHR3KliK|w/g6QRg]N];EM&G.P-cZ?4~iAO;<*C*PSBnM({33kmrIZ^2Bk2{O$wu' );
define( 'SECURE_AUTH_SALT', 'XOj%kwX+GC(o`o>1xSTAN#z%aMqu=}{G*rq$T/KdZ87f~$9_(D%L.&%*3?K:ZACp' );
define( 'LOGGED_IN_SALT',   '6NE{-gDW`%o[P~|T6E4$/f?e7p#0=T}uA>9[PK,1)7BgB/eu:IwG_EI+&O)wF{8y' );
define( 'NONCE_SALT',       '6DI~tE7}qEzS-ZMCPnpuU$n,+{8GuvcYZEVZ.B=:)*DbIqGI/tr1T-,IC)#}WE;^' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'cnb_';

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
