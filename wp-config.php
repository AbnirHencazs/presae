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
define( 'DB_NAME', 'presae' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'ALAala123,.-' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define('AUTH_KEY',         '|O?a[Fsfl4S.6NQV7p44aM 4vz;Jh[8GD]EBdKY<:`yaN;E-vd)}jV;*u,r Ob#n');
define('SECURE_AUTH_KEY',  'b<S~;i*~HJ$6S-xf#^]:Awsi1P(+cYA8hOJ5(&0D2ql6&~fH&^7`Vn5Gnk*L&oLZ');
define('LOGGED_IN_KEY',    'V;uHT`Fl].C09[o+?RkqQ%dJi2;hA3D8.ky]6jIMZ)-`#Job[bbJsk|JI!d{)~Fk');
define('NONCE_KEY',        'p@W:Hp)}EOsEnAekKA1<JD!E^b`)ee::x1jP}_]?1k.L!?-8w39MrEx:MZX^UYlk');
define('AUTH_SALT',        'PdgTUpVfKKld-@2o6u1><[T3z^gF2>03R=[R4mueK?aj:a]lM>NXuW %/|P#;EN+');
define('SECURE_AUTH_SALT', '(B0SyK4/D|McCvV-<~{_-Imlo]$AC(TtQKJIGsr+al{3agtpjKQ{;;7m S0L.Vu2');
define('LOGGED_IN_SALT',   'ao &$qw%+Qc2fv{g@@36g8UZuH!-Hs)4Djj(z3`0 nbv z+f*AageANBWb(6YjZ1');
define('NONCE_SALT',       '7;@K4;,jqR|]U[FAnE-&$$AH$h|cMfAm8{L+!)~ZH%!29+Q|W/C;HVXfHR[bP7zo');

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
