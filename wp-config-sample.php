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
define( 'AUTH_KEY',         '{-G*^ZfH-Th$SJ*F-_&:t/wQj1bv{T>h,l;=ZINSGL-~lHv}IpkaJtA.BH+yNN2B' );
define( 'SECURE_AUTH_KEY',  'M8he|kz=L<axZ jsrZfW.9sK4b~C~6UM,Qm]DcHYia*<dkYhR./,/@)`VBDWdb[B' );
define( 'LOGGED_IN_KEY',    'Ura/vC>#BkIjGfMHyA;;JM?Kx/?vG$Lu<!&auaG!NuT*1u)K}~[vMXjYsYt+H*sX' );
define( 'NONCE_KEY',        ':P&p/WE(HtsjgD8Dz}C!hW:f.[O1D@@57+dVqGjVL~*w#9_u;~hUkqXD@=X?ItQV' );
define( 'AUTH_SALT',        '|92X2q8I7a-!YJ1Ww!hP%~x)`6a2+a}3kEsH+t0GZUU]Ib$~fxi.r?y1g9H1TB6z' );
define( 'SECURE_AUTH_SALT', 'i LP{Ey&q_C;]O9gwm7z<->,B3Q_LWT>px^LOMhi9djV+*u/5E0XhF[U*#|/fe9:' );
define( 'LOGGED_IN_SALT',   ';ymwOq>yGxpyOb%rQ2o|ES,5B37yp+.WG *vobVTUAkg7CG-Dabh4oE[wt[!Fgbg' );
define( 'NONCE_SALT',       'r$rf)E[Ar(a8dL0g~#5>,T2zjTBz;l#18Jvs >sbdJ:,1A~i8[DtSD~LxS&K#=!.' );

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
