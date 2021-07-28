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
define( 'DB_NAME', 'wordpress-bootstrap' );

/** MySQL database username */
define( 'DB_USER', 'yasmina' );

/** MySQL database password */
define( 'DB_PASSWORD', 'yasmina' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '}~G^p*^_}R69hDTRW3eNA]aeeaII#>Ive}I^G%:L{&T?dg7yH)MBcNq2]i,dw;dQ' );
define( 'SECURE_AUTH_KEY',  'X|r79*axNI+L`8maWGh)<~LA>?5,EAd1-xPI,p2H*A&^U<tWL TVMgAJl9]^i))t' );
define( 'LOGGED_IN_KEY',    'a@E5j!O4r;tE|@%i1CWDJn|wmFs1+B=%3i$b?}LR!F?ms$5+)ub]O}NoX}k? m%[' );
define( 'NONCE_KEY',        '7W+mHEQBo2+qp^|_RQ!}{,{{LzN|K@.4-I%A<_)<EfRoR^<Vsd1YnhHuES<moO$4' );
define( 'AUTH_SALT',        'A<|#Z)Y>M MXi944[K+5e?2rOhGpzci?Zh?uDGR#`rkzhm3V^OA@&{b|F2r~imGD' );
define( 'SECURE_AUTH_SALT', 'YJ2m,(Uf@d!^}=PMf&pfyL{*Xrc{wA2gSwJg PA9XJx`8Tf[(XN=M*=,qq%bH}@:' );
define( 'LOGGED_IN_SALT',   '|MV/*<(t.);]jR9ErPk@?|?vJ2e!y,MWlbX2!PreAw@rz)rlYjUK~a?YYa}`PyRX' );
define( 'NONCE_SALT',       'I#iEKtt-{xa ZP)U7@Oi,M[rIjWW56gMP6iN{9!o(Pf^O%C#/<kfvdb;#D>P-OaS' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
