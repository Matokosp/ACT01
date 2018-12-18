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
define('DB_NAME', 'kleaner');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'r#1Q} bNH[vMA$Sdso{-BCR3RZx7/5*Kxi5gyZAK+N#8s!]Yh2ip/rsxO)WrR(i#');
define('SECURE_AUTH_KEY',  '8N:7mg 8&Qz*@^[Kv!4sY!3v_0[o/Vcz*T0=YJ|+J.T+rT)XTjfkeu@G,n1@@Fj ');
define('LOGGED_IN_KEY',    'jOW#YGNxvNJrzZAj*>&4+dOq7d LUuw2zGx-^]X]h;OmuI9VurQk~={7lIR^ucHi');
define('NONCE_KEY',        '.r4>UREiY/ClJr$hxp?eJQV8`[CsGd)|tro1>8g8DR!&a$ZODr-JgVqZA<io W*`');
define('AUTH_SALT',        'E$^rTG<TVh|M!L9U{*s#;G 5_(cQ>Wz@[hLs2z}PMf00@H?h-1Ryk/XerQgyoB|>');
define('SECURE_AUTH_SALT', 'S|#k@Ogd&,k0dWC)c7[u!3nh_saI8lEa6t5}&7sm,t)6T}mA+3w)}]/#qMCc{<6+');
define('LOGGED_IN_SALT',   'w#]4b5Mx/-m>Mp dyqH]@]p_:ptvQn-~f6<F+_)r;jF9m!Po6&$y2<1oW`fF=/.j');
define('NONCE_SALT',       '=$c1< RHpUtF$uRyL$v)AbH`6:R ~$G%%*j6+.+/k%QXU?mrD[Tewi|kR.kM>nzB');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'kl_';

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
