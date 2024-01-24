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
define( 'DB_NAME', 'html-telemedicine_db' );

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
define( 'AUTH_KEY',         'mobSdn]R7f|OnkveU1M V2nv(*a;Gg}PM<+H@yoZ,ejEyS?)|Ex,XMWqy;-o`jm|' );
define( 'SECURE_AUTH_KEY',  '4wR$ad^Cl+OJWG|wG8t(3fHkJ!F</Q|KPs}ks7EqPvd*0Q/M}@V!Gx(%&*EtJ9<S' );
define( 'LOGGED_IN_KEY',    'FQ)m1Y/k5MHg70,XEa+rL4=xSST]q4qAeThSgLNYo4y z{*b?J.ny?].!<ZBI^p<' );
define( 'NONCE_KEY',        'jw7j5J5b:i8H?ug=RI?wa]p_.S8VLJVc,Iz%0N<(X9:;6w[[*rR+&8!}-!+98Y=S' );
define( 'AUTH_SALT',        '/6*Cb2Y|;)fWA+/-;/E&C%[gdm[ T9$ns0es,3sXZ@Qlg_^q#RpnP`]_cgPU.qv&' );
define( 'SECURE_AUTH_SALT', 'M#@i]9hH-lkr!X&y?g_^3V>xQJ-U,E5QU&RZ4A%HsFGl[r]Lnx!0g#WF4a~-@(to' );
define( 'LOGGED_IN_SALT',   '.*>r;~)7@H-&Xw(s[L`iQPu]/MCY#X<;mTT2e{^GO=cni[R+HCj&C}|[]4A!c.!^' );
define( 'NONCE_SALT',       '|{{sAQ5_IWt:a+D[MVPY&9kX58comXxp9`|o%_vHcF`:3>%W&>l+rm|54KU~T=kt' );

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
