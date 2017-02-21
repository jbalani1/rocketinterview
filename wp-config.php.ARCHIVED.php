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
define('DB_NAME', 'rocket_interview');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'jammin');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         '6-@[OL&$?VZ$AR`d9K=Hb%y-CJ/$p/@j09cbS|:WVEk-8<^x0VSw/}YX{kWS]|)!');
define('SECURE_AUTH_KEY',  'V*LMx4N@Bmy1xV*4Wr+(:$*8~N)_.CVPt{h?+#0Zc#,8Qfbsk(dVchN%6g2rimoT');
define('LOGGED_IN_KEY',    'eI+|u+$RB9aQg*p<W,e&+2a`bDTgv|+}TY.Ce5tI&VmCre2]u]?vQn#(wgPe,hxM');
define('NONCE_KEY',        '62ZJ%.lbYW5G0ts.D~^GI+Lt;|+-M)RuuT7%{|u;1f*dO-T8-Px((A[)BS8+*:V ');
define('AUTH_SALT',        'TWUUR+C5Nn0=fNB#|WJhh3+UCw<N%VI-~b:I?0hD.Cwth `s,LC)4K^!|~MHZt}8');
define('SECURE_AUTH_SALT', 'o++]-=Jl||dZi=*(0]cE?C^$3{ef+g&>#;1&+_Qm#.p*mrXd>KpxsPbx!VV$=2I+');
define('LOGGED_IN_SALT',   'nW!,qfRY@/~48}Gaj&-!C;*6+5,OHP2CD>2+/<?;-#w<Y$3NL=M<z(+69x`gg(^>');
define('NONCE_SALT',       ' ~}!_i(q4gVce<jol|{=TNCwuFe*SmHj?SrORu=Z77~Z1)ScNY<)g|l|pp*+S@mA');

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

define('WP_ALLOW_REPAIR', true)

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
