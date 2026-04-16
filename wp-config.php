<?php
define( 'WP_CACHE', true );

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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'portfolio' );

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
define( 'AUTH_KEY',         'u>b-0p(xY#}7Z>/(@H]RrAYHE@9,t#GW<W0ujO|X;/,Tf$21w}2XeMjYAa)VEs1)' );
define( 'SECURE_AUTH_KEY',  'S>J,[C@z4y]s{V=()7?9$?EJ|AaOlq-S6l&x?Jpt.w;]EJ)0Zo:2aJ$zi3=n?F6X' );
define( 'LOGGED_IN_KEY',    'ov3YLoD!LUU!oZ7yUQ1a@7M7y;wXi,kE05U_uj++vtW|(*m5NeqMZTOc23aet3(.' );
define( 'NONCE_KEY',        'j2X9Jk@`!*CtSW905r-#Z;Z-&Dg|E@%J1R9l5hVh`#,Yx%51(&l.KNw?Iroyu&u7' );
define( 'AUTH_SALT',        '6!2!+OvND&^GQz;DMgV(u Mlm$7A-3Bf%.ZH<AVReR&azdy*7DqYx3%?tWBuz1dM' );
define( 'SECURE_AUTH_SALT', '(hc;TEavHlEK4l&),=g~{>y+>xx?p.xoPw,@]YDR4[Q- p_3>D!Hf@.*Xc8qde#4' );
define( 'LOGGED_IN_SALT',   '!o<qPd6`4?X.BI5*QrJ((YI%}.ZXW;%ipBwd;,viePB9X|j[-z-<zI!JE<-pDa^T' );
define( 'NONCE_SALT',       '~mfd|/CkPjBhAy-N #lQs*a7WW^hQSgbuFI}2>+WN5_HI?5&A=0|D?z$;Nlw/^jt' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
