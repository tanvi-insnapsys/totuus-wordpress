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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'divithemedemo' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost:3308' );

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
define( 'AUTH_KEY',         'A=WH5&NjowqR8@3?HMHI=r}@^Cl<{fxgO;n_Kq)k;LL7+$WB.RDXL39/.y|XQ06S' );
define( 'SECURE_AUTH_KEY',  '9hzLD?wH5(6bJ_<w2Sg65DlrFnyW1EpOI8[.=s^a5F8feT G!N_|L?p$X.&]!o6g' );
define( 'LOGGED_IN_KEY',    '/@_tvO!n(]*cPx6dR#J_ry*~I5?/>um%,Q(_q=)z(J?[pKcm1jlOQi7@X?^RPO^Z' );
define( 'NONCE_KEY',        'ZAG`yfy=g{HK4o@0WQ;$U? <:}]1p9yPjSTx.2 ?DpDJ-(J@>V}M +L:[32rsUpJ' );
define( 'AUTH_SALT',        'SjU?$.jTv=+y:lMw>9>i]qY%~-Y@%]i5|=;2/3kBXN]Y~Gz^9X.G1u4:[R&fU-]c' );
define( 'SECURE_AUTH_SALT', ':> papdoCnd{ bboubL}5C}1mW[uU   ;VVv_|Bamv40O4dFBt0}+U ug.n}IkBd' );
define( 'LOGGED_IN_SALT',   'aeA Hz/}HfO+7mD_paJ77NwAt9)kP%%BSD}Nhg~V@@W_3Bgv8Bp]FGlsG@;hBqTR' );
define( 'NONCE_SALT',       'NCZ6JgLC9b`*YnPsO|c1@T&WC97w;TEw7?%fQ7T:^<FS%<?UvxpI8%a0,_uRJ#Hk' );

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
define( 'WP_DEBUG', true );
// Enable Debug logging to the /wp-content/debug.log file
define( 'WP_DEBUG_LOG', true );
// Disable display of errors and warnings
define( 'WP_DEBUG_DISPLAY', false );
@ini_set( 'display_errors', 0 );

// Use dev versions of core JS and CSS files (only needed if you are modifying these core files)
define( 'SCRIPT_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
