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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'nect' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '|T/N@fy#@o@^]c#iG2ky=)&+vFuRP1s5[B~9>N+>id0ul]au@FvIaR #/rp P.&]' );
define( 'SECURE_AUTH_KEY',  'S(R+O3(pUel_o4V>(:}dBPt/dUwai6>saP-Q>]La)BuIN~Q2P(yFQ2ld){#g@y}Z' );
define( 'LOGGED_IN_KEY',    ')!97{}-M@nl#SLj6QA^GrGBr!k ?fCPjnUIhB0{@`42<>mq6zK-IW>!~C<l0l1Z!' );
define( 'NONCE_KEY',        '_K2p*UV=Tv4-RY?tB-F4t{ YA[PmJ`n;~LF%oxh+Eh9K%=xKk#%Jljusdlt6<YbG' );
define( 'AUTH_SALT',        'BZ&E?2o+DTqK_Af@W9`Z.({><_Om>Z;mlZbD{H3Bfi$68NE@Foj29tAl()<R0fY9' );
define( 'SECURE_AUTH_SALT', '@3_[/oqd^L86IgO-wEz1{2W+sL.gkYloh7aXv|52)26&=h0mLr8)W6 ,~#EU7?&v' );
define( 'LOGGED_IN_SALT',   'A5iJF8#9p,m}&2A<7~:.}QNvl96p$qN{ &[N3uJ=CP+eTeyv|(,iX.hNgz:0:9wK' );
define( 'NONCE_SALT',       '1g/6Uwkv_g)PA13nMOw3P99n+nQ:Mv!2cg)t=O9wJy,0u1}zC8 /d97H|;.&[vt2' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
