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
/** The name of the database for WordPress */
define('DB_NAME', 'brainwisedb');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'DRN+sQ6bXD-PT_SRs`Q<Mb!Sz.DsT}d*5/AoPnIad*87!ssYF+xm/v5*Zm*l<E)Q');
define('SECURE_AUTH_KEY',  ':exLaY(yhes)>BX.)>C M(9V){%ize)s[-fE]zs&Kvs!8Zr<t!;x/Q@Ln^B*CnDR');
define('LOGGED_IN_KEY',    '.+ficQQjE:L9XIK1w1#E}x,yD2Pt+c0wG(P4Z{|9L` MyWiA&,cO)}=]={PZFP}[');
define('NONCE_KEY',        'gc,>ojlEm<YqdnGmWGy!]n4/?,.$K> T!Iv;J2674}qzGSuW4NJITRfPuQOKgV@$');
define('AUTH_SALT',        'g9@y1Co=o^1~AC1ZaPVDHNpm=L!TyfR)oF-=DzDQjv%R_ZRH?MWw5L6cW|-OLW>T');
define('SECURE_AUTH_SALT', 'It9Q~Cc6+oCz_pB^]T,IT3xT?z&n~`O{<Fd6[>0*ttkZ1$J9&l_8X~m.dU}p+;er');
define('LOGGED_IN_SALT',   '/rv&&80Cb&Asa5,V*56Ff6f{R5>B^M5ak/U{gfL!qLk_]JOO~YdsU7%~r|QR0)}@');
define('NONCE_SALT',       '.Cx)}qFaqEUD!Vt~8;;FX)J5~*z&V;~c!U?(Id8UES?Qr40SwzC(:q#d;8>a`uYS');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
