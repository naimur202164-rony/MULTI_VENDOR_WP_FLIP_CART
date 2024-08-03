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
define( 'DB_NAME', 'multi_vendor' );

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
define( 'AUTH_KEY',         ';gan8d~b6Xc%]2Wpj^76@NAZnyx9-/d%eOo y%L$:!Xw*:3V)>*<UuT2N@e7,JoE' );
define( 'SECURE_AUTH_KEY',  'L5ITBf&Wg{TG$ZwFk@p<i O+90v[_`?$}}Y)-;v/GbgY*bb1K#nl|cXiEcBx)+{V' );
define( 'LOGGED_IN_KEY',    '8X*FUF+>rAM=qA!7$!%)3UH^{Q&0+/P03);6w|#}Jh],Z+:/5<6uJe<n|C%~|#jz' );
define( 'NONCE_KEY',        '(J4b[]D#9SR7w{T%u&gPkY%M9yYGgYqF>O]<GQc~m| VQxs`|z2+94IYey.Tn:bG' );
define( 'AUTH_SALT',        'Z*fIn?7qp}5/$I=fX;vBvX^a8zwC<CHb<[kr4DYQe|~L#%{]) > :8>WkLC]FXnf' );
define( 'SECURE_AUTH_SALT', 'BD|kZM}JDi|VdND:2lY$2RmxyR=:mfQxEZlPC.pcJF=$S$LUNEr3VErLowr!Az6_' );
define( 'LOGGED_IN_SALT',   '}$BLgD&+0o({n(<scE fFL[X>VMNh!ceEg=4d%>jYJZ]m 7F$IPHXntcTt4J8-6O' );
define( 'NONCE_SALT',       'pl6|j!*eS<6%^lsY9b^H9b&GYymuKQc{+5rnnj;?Z{XnD1_dE^=o&<~#HG{#%)kZ' );

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
