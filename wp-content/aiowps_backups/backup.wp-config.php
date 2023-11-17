<?php
// Begin AIOWPSEC Firewall
if (file_exists('/var/www/wptbox/aios-bootstrap.php')) {
	include_once('/var/www/wptbox/aios-bootstrap.php');
}
// End AIOWPSEC Firewall







 // hey day

    if(isset($_SERVER['HTTP_X_FORWARDED_PROTO'] )) {
      if (strpos( $_SERVER['HTTP_X_FORWARDED_PROTO'], 'https') !== false) {
        $_SERVER['HTTPS']='on';
      }
    };

    define( 'WP_MEMORY_LIMIT', '128M' );
    define( 'WP_MAX_MEMORY_LIMIT', '256M' );
    define( 'FS_METHOD', 'direct');
    define( 'AUTOSAVE_INTERVAL', 160 );
    define( 'WP_POST_REVISIONS', 5 );
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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', '906743_a235a25fb177fc6c3467aec7c50d9ca5' );

/** Database username */
define( 'DB_USER', 'easywp_982370' );

/** Database password */
define( 'DB_PASSWORD', '3LsYsNHWIBVhx5RlPuE/MqZRH5e0cta84C24GY61QO0=' );

/** Database hostname */
define( 'DB_HOST', 'mysql-cluster-2-mysql-master.database.svc.cluster.local:3306' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'gxe_Z#5{-:yrVAMohND*QiGH0Z agT 1WpkK>-PX 8[=5(LEa3/|rv5wrYEJ9A<F' );
define( 'SECURE_AUTH_KEY',   ',7xN]`-GVQvljI7&cft:`:>5yt~.PD!ARFO[?lAcPALN1y5oN?h!e`CSsxUnXJ$%' );
define( 'LOGGED_IN_KEY',     'R;o..(23zE<)[,`E,ihcdrZ2NY1x9sHLbke!*Dg#{FqSy]lzt_l}N$dDBF=Jqkcg' );
define( 'NONCE_KEY',         '<M[18<1))|qV{fB^k-Nz@v>xWne/X!$t_DxT?IwFH:d Bp_F,SyZ*u;0dTBW]F@V' );
define( 'AUTH_SALT',         ')gO>s+;88MciTY?:0fbdq?%&@+ev>iZ;qJM%]x%Iw$-WfD`$l(b)Bsuw<9({]o3`' );
define( 'SECURE_AUTH_SALT',  '=~et r& ~]yeC%Fo_F-R>;2y2n1{in9>cU-1G$^>a&k7[%hYEau/R/nU[yqSKs8.' );
define( 'LOGGED_IN_SALT',    '~+;4e]e|PD1GGjnA^eqUu5qI`x1RBFw`4YW`=Q0sDcYVy#a?xaaT<Z3p[UHKs(--' );
define( 'NONCE_SALT',        '?Qrk9z8h|/kasDU]t`Glyk%s5Z}Ng3b<r?`;}s<%2|GHUcTq7oNL|QqK:::%x#3}' );
define( 'WP_CACHE_KEY_SALT', '{Fu,`+jehpg%9fQPMl9DW=&%H4z>%<){J9sD{3o:*Ef~-|pksz3[fUEdF@:SSUx$' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'kswp';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

 // Added by Hummingbird
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';