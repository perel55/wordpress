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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '04W2ZDx11sW *zskBWCouN^q`X?~Qq#4+ WIoO]}_gk]xjK Q+ghH6@K_]nMj[{#' );
define( 'SECURE_AUTH_KEY',  '-/P4~/b*Z].ceBm-1^]L>TbKDS/;it_vI Pvb<[}G9@q+I:49=;jJq+=(dZwqIqj' );
define( 'LOGGED_IN_KEY',    '^!;Wvls.y&mA&+4FxM)+y!pWMB*rrYT,N(7/EbL!P?Na@xrE[>C: TvLsd[q*^22' );
define( 'NONCE_KEY',        'du}HGplslZ])(rn0M_qMz2!qw-PPVRK-aW~wuuS&ljl#>`vIz5R r^f7V#jo:xJf' );
define( 'AUTH_SALT',        'Pli{RG?#wzG/^}p8qe`kCanQw-op[q3T5ycu|;|WK#c:Bnx6t%w#E`~Kom/mK%wN' );
define( 'SECURE_AUTH_SALT', 'i^K6nW`6j&?b9mn6}Rp<q[mKRg3WJ14f?_2VGVwWuxt/6CYjqs6[X*gUf0!odl3N' );
define( 'LOGGED_IN_SALT',   '#Uv`%[WL#f?hB?a<bH!e[4GE#C=[dA!hB,<_ZzC2BUE]tf|nM4.[oY /vhA]!O<m' );
define( 'NONCE_SALT',       '<z_ZzR$;XXm#;m!qs5-:Gdzg)Yo g[v[kykE3R/~sK>D]rzVQX8HQ3]h~Rnev=Ti' );

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
