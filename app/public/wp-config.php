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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          ')%NR|bJdqM`CTQa}Wodc8]Kigo@PNNg+k^-$Pd2`V*cc$KE3Q6L,*sd<yaPp%fe:' );
define( 'SECURE_AUTH_KEY',   'NQRo1y~E)V-y3m|2)F&O0tVfq#.92{@z=H71jkDmmX!c~RBJ@K06N%rvQ^-Y<mZe' );
define( 'LOGGED_IN_KEY',     'eIpIQ&pKLMj:q/>@&0m^*Cl3`@1r(O$GKT,!XxG+uFG>aLaZ_N?7NrqX k2d%hSK' );
define( 'NONCE_KEY',         '[E:&CJ52Rsi[.J3w]C}Fh2ky7#KVS:D3oYIg#>}Xt,7+{9w_m+/%6A`ACejEWBHO' );
define( 'AUTH_SALT',         'z79L*/dA~<Yiqtpy[b:>{!h~:!:e.rRH D=+YjsH).FQUmt3wI[v6r]ui2&G>$@P' );
define( 'SECURE_AUTH_SALT',  '+p`i-yy{g&?9jjpU)@X-RSI$RKZh=Ww&_DYvvE?%eV98=!JR!$X_{j?Jl_)y%&pb' );
define( 'LOGGED_IN_SALT',    'okU=3rU@n| hM*rDjQ!X!&So:+]AW1r(`A ]eVDMfpuy@;RB&f(R{)@OANgovkEi' );
define( 'NONCE_SALT',        'X[>a{#8b!Z)b,fW_Q  FUX+H/cw-4h?>--C)@D9:bFst/xr4ce7DorBLxz6</pV@' );
define( 'WP_CACHE_KEY_SALT', '3mq 5`{`R@^7<}z&|2S29.c[eM[EUl}|>7_<Xl41^%I13Dd([XEv8HE*viX;Y7Ap' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
