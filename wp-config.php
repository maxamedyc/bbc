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
    if (file_exists(dirname(____FILE__) . '/local.php')) {
        //Local database settings
        define( 'DB_NAME', 'dbname' );
        define( 'DB_USER', 'dbuser' );
        define( 'DB_PASSWORD', '123' );
        define( 'DB_HOST', 'localhost' );
    }else{
        Live database settings
        define( 'DB_NAME', 'moham643_universitydata' );
        define( 'DB_USER', 'moham643_wp371' );
        define( 'DB_PASSWORD', '657117' );
        define( 'DB_HOST', 'localhost' );
    }

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         'S;?_DIo`b=R#54F-ML[>F$T* YNKtnu4^:K@deFjtbRB&i[-s/PKA:wi<7-i_CX ');
define('SECURE_AUTH_KEY',  'omJ=hOo~:r8JE#[ udz~!tH.@mZBRuetTv@DwV&|4hzmeZ[X<TISV*2oo5W}#3j}');
define('LOGGED_IN_KEY',    'ASIqH1|Z>=c?j3n`F; ZwJ:P;l8,9:SSU+v}}|93>:IzuwwIF^*=+E~KQVuV.2MV');
define('NONCE_KEY',        'r|[4bq,pr1:M-P >(|tf]9has.5rW BB{A]&TGHD6]gN%>MN:Vr7lnv?M+RL~jrP');
define('AUTH_SALT',        '8ck^4V;,V6[=9?bp>&lk(s4pj-tI#0},+;P+:4+|d1S>6&{I5n]^PWh6GUjcgwUs');
define('SECURE_AUTH_SALT', 'OL.<LmU<,G<ui1a-j)-1e~{4fEUSa9iHDEypVOrOC@P|c7Ci(}uT1BnQJ6:FWyN{');
define('LOGGED_IN_SALT',   'iE-P:|1Z}vO1rp~<TkB~c@XjVm9x{;~{`pH&}+w_[L##qN 0xCr0 g>le1Qh/UL}');
define('NONCE_SALT',       'o(jwc/ZOSAoLk)|b|;5A~Gn3-xuaz,/~45M<!qL[^_3/C)]d(x/?+=8u_iNEna@E');

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
