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
define( 'DB_NAME', 'openai' );

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
define( 'AUTH_KEY',         'Vp;Mjb^_<nzM3nw2eY.xG[y0C_2hv:Pp{W@bh.o8|9tCh4Cn:e>s=P{f9[@I+Omg' );
define( 'SECURE_AUTH_KEY',  '?V6*7`,2Y{PoZu.0&5E7X`ddLd3KVdib2Oww[H3Zn~;d8vD(~u&i[k+WBN*Lc34 ' );
define( 'LOGGED_IN_KEY',    'm,(i3-Jpnt8+o.)OV&IUo|LpS9$+Q~vjtcJ5{^YSbSs^D>bM1pLrn5G;&<q:m6Xa' );
define( 'NONCE_KEY',        '-!n)vpPL.9,[z-E@5pCe!}bu4{{1kk2BHD*IJ/c=nany.F{1m3)e8fZm^8xD.dw*' );
define( 'AUTH_SALT',        'f5<E!o`X-ApUb+p_)`2jkdidOxAxEueyBByf:YpS 0ts57-(M&0f,m&mLx(,IDhE' );
define( 'SECURE_AUTH_SALT', '.Ex6,& mj.&-^i{5zD_;Up14j`,hbc#pF&?fpo&8/4m3?W{ZS<VnnbbPQRl;JFO;' );
define( 'LOGGED_IN_SALT',   'c]}(p?u]lX3sWGsBAwYQt`Ytw}EU<`z8Yh]$furEK)+5>t`~Vgpm_NRSR}#(}vJv' );
define( 'NONCE_SALT',       'BE/)}@`:x=fU3!Crfb[ <b)#R_;$Fha<9_VyeRO>Nai.:Tf[b4oMwN0BVVJ<[uNK' );

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
