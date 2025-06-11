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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'naftagaz' );

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
define( 'AUTH_KEY',         '_0vk-^a.~NRZ4es2yd@VC|{*Qy4V?WiTS4C_WJU2Gilk)gpIfHu]BE_&-J|<z>)r' );
define( 'SECURE_AUTH_KEY',  'e>K:Dhk.;?%RR`o`N{)f-&L*8KwpxcbB[G9Gt]Qouf|X^RB=nrGp;6Rd!{clF}G^' );
define( 'LOGGED_IN_KEY',    '<|X{vJoT.sX.%Vbb&VF$1+?s(36qb8h~h{(wo5)[=#zHVq4c`1(*Gwr>Xg2u!Eht' );
define( 'NONCE_KEY',        'xG$#(?cam[kCDM?}hHy*+njb%yFyjzqplxzc0UQ^;KYOYAu]fA,[|<9]Hjdp{Hs/' );
define( 'AUTH_SALT',        '(krbBx<>33728.zr6$)&:Y, u8z4k8X<jQaAsK|V&~/-#Vy99NGOZQgk)5[I_Z8O' );
define( 'SECURE_AUTH_SALT', 'Ty~wjgBb+^Eirn,r,gdFY/&bkLTGM2Qi7WG5FhO>buF*O@vZuQfbpN(Rh-s:f]w2' );
define( 'LOGGED_IN_SALT',   '$RYPGS=nII)N=?+=#4yAp=!1lY20K;a`rE*:d6[6d+@uJ50SKr4WKOuD@m61 0+q' );
define( 'NONCE_SALT',       'QKz%U).0U8FM^v6USjFsnX>7HW3@DIG$Wj.1mg~8$XozrEQ.HIR]TId^pMS>49Bz' );

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
