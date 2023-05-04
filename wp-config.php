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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'ic026152_wp' );

/** MySQL database username */
define( 'DB_USER', 'ic026152_wp' );

/** MySQL database password */
define( 'DB_PASSWORD', 'vBa47wlKc3uN' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          'Zs-+w5i0tx8B;L.CL3Us}_lj$fu?`^R.!X7mVb!jx-Rj$+CO:T^{};M`[[6:$wSY' );
define( 'SECURE_AUTH_KEY',   '#!,`IHeT(!P8OsFtJrsN!k;34oq&z~T;B ikP11Ip2wuv_&IzYLoLbYZ+=<p;.1c' );
define( 'LOGGED_IN_KEY',     'fketXN:PS:iEC0~k4vCi%#><D0RZv<;ItL$a{wvG],{ 8<Bi+z`n+?K)y0^ gaS>' );
define( 'NONCE_KEY',         'rocmw9N2wug;%3Lqfvb2x U V(|AYu7[5-u_Zq~N>zFfU&1#P=i3g;&g?$^<5 1[' );
define( 'AUTH_SALT',         '2G^^<tza!C|33{to2}8(f8;9&9n!0}uv4vIMO &6)7{R=]9ocy!SNR*zT[NBF}$*' );
define( 'SECURE_AUTH_SALT',  'c{#Uf%QHEGZL!_-sfBO$v!J2B<gO{fraOqK_1^P+2ibZ<?c_j=zKF$BoQ[.1,UR+' );
define( 'LOGGED_IN_SALT',    '3Z0MOl8/ud-+6y9Kc##vjSD 8B;]VH=eSa~a $K+,4SnW%tvt}dABp:QtdM^WBuB' );
define( 'NONCE_SALT',        'JKQ^7!(*$>D>B>R^aW/4GRRA)uT&4D!CVFSH`[a[AS)d=QZ<9d et2*>bu2x}NC@' );
define( 'WP_CACHE_KEY_SALT', 'hwgB}%Mrg0ZJVO`HgnXNAUO7B!E MXNnqu4u:?X,@WIpb0=$34-|.A2=.UR~QzB4' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
