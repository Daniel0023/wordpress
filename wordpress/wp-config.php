<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'test' );

/** MySQL database password */
define( 'DB_PASSWORD', 'daniel2310' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'YVj7#Zh_jVGM$]Es}`pXD9-c-{.4MN6(9H4NTp`qIz[ 9g7e`e5]/`=j t&0]D]&' );
define( 'SECURE_AUTH_KEY',  'n`q_15ECr&RH;Q(qydDdF4~vn2I!xFDKsg`0:T8W[(&J#/V3%C>%Wq##rSVvViFn' );
define( 'LOGGED_IN_KEY',    ';4`S==kl8|5]3F?K_L+gV!=YD0CAybc9D l)Y*18 >Anqnp(y1Kgnb4j=78}gY]y' );
define( 'NONCE_KEY',        'pqUc)O3_|VZ*Xy34~k@C1&P!nr2Rh?pO~{qZ<QAl5{2D@BX=`*A1z1C-N{[^<frw' );
define( 'AUTH_SALT',        'HGRP}r_<Te,52x9QueJNZv~0$wY]|$Hc:c=X.dE]c5$*]i;hOXT1 5*gO%$+!jn}' );
define( 'SECURE_AUTH_SALT', 'xUWA83gQB<JAPW{70w+}04Mrvi9M]XR--2yIX.?2_=#Z+vi>fOQ3kB{0;r[18bM[' );
define( 'LOGGED_IN_SALT',   'G{|lq|LiPJ=5=|G)|Os$~akU)_35$xt/@2B^rVFaBp0xr?0|b#`3@DmIs&RrH*JU' );
define( 'NONCE_SALT',       '9Hn`+>Ce`k/$Q9+8?qc<V(<+A9}z64BF+U[f](I)NK<&%.;qP-..g(0sLA`rrJH ' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
