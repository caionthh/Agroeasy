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
define( 'DB_NAME', 'wordpressdb' );

/** MySQL database username */
define( 'DB_USER', 'wordpress' );

/** MySQL database password */
define( 'DB_PASSWORD', 'agrodb2021' );

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
define( 'AUTH_KEY',         'iVe]sL,GnFjg#Sc5jAF5KVRP20;|j[8O($%*7zNPXFZ]bP.cD.P~)uhM1`Nqy9L.' );
define( 'SECURE_AUTH_KEY',  'E>O~<3kV{$$JptlVt_pxs{leQC>alM%#CiZNg}}9e46VxagWzLdovmb:tt0KS#1T' );
define( 'LOGGED_IN_KEY',    'BUk]A6.&I7u}1OTFn6|4t`X)JOP8du#~^GvB8-i3;aOa&)|R!7iPzQ/LQ66x9Bfn' );
define( 'NONCE_KEY',        'gg$BE[huWi=AH`?4M_H6*#+Q@po4<<2|6/:0c^,=vN?ZvXM{Z?qaD?1DQ`c%B~Dm' );
define( 'AUTH_SALT',        '`c&w{1R=^cw:e76Rp_=){YcZUI^>XE[XV-08wtdwlc^dya}/(i`uHPk4e`@t-3-3' );
define( 'SECURE_AUTH_SALT', 'r=8`8X=qN5@?%@y+{.H$i]{qm%0dH+ph;cGO8^H9rv4_Z4B0W%Ya&O/WGZfI|s!K' );
define( 'LOGGED_IN_SALT',   '#Vc!ats1oVdUdVZZt~8c)R83)KS+g~#>E0Zl<yzXu<4rY5cE[M,It8}iIF`M9GC+' );
define( 'NONCE_SALT',       '}cTY!.m[wR944`<1/W`P7;Cy}I789V^)ZwvSr:k?n:GcU+;=(j*[%Gh{2~v6o43 ' );

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
