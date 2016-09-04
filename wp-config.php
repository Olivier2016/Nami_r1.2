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
define('DB_NAME', ( getenv('ProjectNami.DBName') ? getenv('ProjectNami.DBName') : 'ninjasql1'));

/** MySQL database username */
define('DB_USER', ( getenv('ProjectNami.DBUser') ? getenv('ProjectNami.DBUser') : 'ninjaadm@ninjasql1'));

/** MySQL database password */
define('DB_PASSWORD', ( getenv('ProjectNami.DBPass') ? getenv('ProjectNami.DBPass') : 'N1njaadm'));

/** MySQL hostname */
define('DB_HOST', ( getenv('ProjectNami.DBHost') ? getenv('ProjectNami.DBHost') : 'ninjasql1.database.windows.net'));

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'wIM!a%t:rrYVY`,a-E;e(u|;&AXXLY_lD/$Ahf~K 417(5?r1tt;e<umzPkN]O>c');
define('SECURE_AUTH_KEY',  'a+}xR,bg9_Zr-0$e8U|z5CE4Wrg&~zL%0^4qa=Dm0 vjAx/Ybz|V*En3|,3MO~{!');
define('LOGGED_IN_KEY',    '4P%k%P~V7qztsLj-2y76spyJVKhORs#nbx9f^-rs*MMlEarR9AnVj/WS?kblW;)4');
define('NONCE_KEY',        '<4y7Bs_d/7:Q@w~8jWAuBj>>tr0xj}3Cc?g4U%OZ|cz%W9w/})V7M-D,tM?mQ6bJ');
define('AUTH_SALT',        ',J,:f?^~9]E_&*hT3q2i(Xr7n3wSKPewiAz<5/X&:zsItroI32A32]~;9e?:A!Gt');
define('SECURE_AUTH_SALT', 'q$Svi7A,g32o!~F3&HELab)],34OSU$4mJK|N2+afm[elZb:%|jEaFJxxvO+]!Vm');
define('LOGGED_IN_SALT',   'y)|i9JD]!jSq*X+t(ZGd(jzp]*(Xn{IUQ75;5[{Kl+|@mvH^pCYVG}XW5U<(pu<q');
define('NONCE_SALT',       ' IqE:|A(t}oGP8x<|,>F;y2S4=Az5kK}{qA3L (UM)+2<K]Q-d5$I/?4M`u)]NT;');
define('WP_HOME','http://ninjaapp01.azurewebsites.net'); 
define('WP_SITEURL','http://ninjaapp01.azurewebsites.net'); 
/**
define('WP_HOME','http://blueninja.decagone.net'); 
define('WP_SITEURL','http://blueninja.decagone.net'); 
*/
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
