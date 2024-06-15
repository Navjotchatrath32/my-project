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
define( 'DB_NAME', 'ecoglobus' );

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
define( 'AUTH_KEY',         'JDZhfF+!h;/A5Ybfq0nN%P>iARVK;[KvtQ;V7E([~!?jh}hN~2hTO`2UwFn8U0Zd' );
define( 'SECURE_AUTH_KEY',  '6|`G%vw>!J@B*1WvVgn1QvEWww0*9-pc&|HEBr2TR!DFwQx][@0$iua7$-VVt sH' );
define( 'LOGGED_IN_KEY',    'oy%NzU+0el&s:?SZ1j/1>qccpm:P-MCgR-T!@)A&jxB={utZkL:]7Eh+JJI%@xja' );
define( 'NONCE_KEY',        'Zh3H/4LfJf_n*m1D%?5R>e^=`9)DKWSX*>?G6DO11 <p=dTC:Z~LYxJ6Oxv0gHv-' );
define( 'AUTH_SALT',        'hi)x9*7YcIESm+qnl3:AlkQ~zT#gOdQp& P`)%?!7Nl<k|)vHnbYr7(u62nPGb<$' );
define( 'SECURE_AUTH_SALT', '(yK)4+;A~/=wFqLWLC@r;zwm_NJBI-iQAFs=*>B[<VsR~Vv^RiM$7&L^Zuo?4(&9' );
define( 'LOGGED_IN_SALT',   'qU(7%6PON<;a(vwB?3}=}H{KP{~h>7$e*nv1m/Eju*@Hv/eV*[t}sf[#xEd~5qxU' );
define( 'NONCE_SALT',       'G|9OfRrtgA~-[ynTfXvlmmuQL}*aML$emqD><V]ub/>_Jv{K_B}XqXlK,hF5NGD-' );

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
