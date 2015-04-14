<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress_vb');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '<L@JKO$G(CqE-g.b>d52P%-(g-,#}tNqb-hg8+&XCO6aT*z:_r`qnLOIP>)>|[:I');
define('SECURE_AUTH_KEY',  'X(xS 0*6]hUCcGMJpk{2&]+2u7j_V~jYT2x pI}o1PrwNn^n:icO5Gu{J{#>SR<Z');
define('LOGGED_IN_KEY',    'T,h,vL`5MStby$s$V*/nZ]Eu+yeA7c(R!(m O2(-+_@%a(}tL-XA=4#yOV0@{`K8');
define('NONCE_KEY',        'Ev8vc,l1)kcn?R7Z8pS+WJvIm4&u9xm*ae:V*^%~^B8O.^6QQ&Y8AL<^lprl&CZF');
define('AUTH_SALT',        'F63_y<i<;MRCoe9|03VDmL<L?yzwz|5_99-Q^2#%Eya&qw+9Vhp+W8eAS35- -F&');
define('SECURE_AUTH_SALT', '*B*:fMFz/v8~@A>e%3kgPUG66-Y4IO~Y;`^gSZ7,jZu~;%>oMYT14W#ScJx9[?-f');
define('LOGGED_IN_SALT',   'VZ/wVlt~`Sq-)Ie]F:$e5X-|-x-c)TbVyN%_dEhEk`fYU}F|q=F2/:o_2-u`mCG4');
define('NONCE_SALT',       'EwHx8{s.u50/9-Hq7=*U.ca|6dDM69?x_grQ_4G%O _q~`-vU-Pw[<v8i76tu#rT');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
