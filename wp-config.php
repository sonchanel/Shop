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
define( 'DB_NAME', 'cuahang' );

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
define( 'AUTH_KEY',         'N<)ooOQ]4j1ulxY7NN[k*;zAt|OT.7w&EN+Jr$SyW-i/E-zP^[<^$I[N,9n%`xoj' );
define( 'SECURE_AUTH_KEY',  'Yv|AST-jiE#P?t<4H14G/+5&)C7Jl~zY_Bj.7qbljLkZJV(M3eDUc>1t.kl~Lhk;' );
define( 'LOGGED_IN_KEY',    'n!!6:[9*~]--7E_=1Qn}|7gN?QIWA;NLF%Znm/x?]$Cot?)!os:&_Ex/YUP@8)H`' );
define( 'NONCE_KEY',        '@Z&:#iAHF&ACOQEIc]yuv?VP&P{-:PzO&eq#6kpsxo,lOpHyZeRodq!5MBKp^32A' );
define( 'AUTH_SALT',        'qq9R&F61a1dW[9HOwwv~~uD#23y go74[kpZf 2+l%#oa)f7x{>>jDMmd(A%369c' );
define( 'SECURE_AUTH_SALT', ')b?Yq0@#S_{j{eta6,uX-hW]`>R5vb(U`^.Y)CR_h4mXiZtgPNBs0|)^>9@G))k4' );
define( 'LOGGED_IN_SALT',   'vQi4/OH]A:}oLOyb{[11?:vPF~j5K#H/ rigS3b:}[}aB#-mH9U[u[eTQ}$(9*ve' );
define( 'NONCE_SALT',       '4m%}4{nn<Ltg)FmToRP7V>3qYv7`56~hG]rGaPrB}:h:Y5SAj`5%-uD%Qt.WwXPU' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'ch_';

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
