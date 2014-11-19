<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */
if($_SERVER["Name"] != "prod-env"){
	include( dirname( __FILE__ ) . '/wp-config-local.php');
}
// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'site');

/** MySQL database username */
define('DB_USER', 'admin');

/** MySQL database password */
define('DB_PASSWORD', 'offline2610');

/** MySQL hostname */
define('DB_HOST', 'webeditavel-nc.cg3smsjs0baz.us-west-1.rds.amazonaws.com');

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
define('AUTH_KEY',         '_kluIQ~Yi8b.;%uW2U-B<.:)[bxA%7Z4jTR69:Zed>u4OSh7O[Zy=hpER.7.Hu%e');
define('SECURE_AUTH_KEY',  'I(|>tV=*_$Lqnoj:`KpkhI&k9B9t.)1QA.]|R1t;c|/Z2?1S!o^4q$3}-*iIz<Ni');
define('LOGGED_IN_KEY',    'z>CZ-eG0<:Rm?cfkorrZ6=?M2D0sPA@BLR`,aIL#7~|sHfR8^mC!_|A}etYw&ulT');
define('NONCE_KEY',        '/|7rK>g!Zj[ymG(}3 BMV/J*`A[1gwe+Y# I0TL%#{e+@W*Hl2Kb`I|W>k~]^U1o');
define('AUTH_SALT',        ':A$gZR/iJxC!-n6q+5|yHd|yV*0UesL-f,2`vJb-)6Dv2>w8f_~M=TN;[@.B/W_N');
define('SECURE_AUTH_SALT', '?w,UX8+syQ*/Co%hoJXuy<;o(,g*g2qfOvXJ`|9tJ;X6C#{dGcK)Q87cKBF|VfF9');
define('LOGGED_IN_SALT',   '*rmqao?fChxE.kg_r|~LX*a%K5Ia8`.2;]No{qsXKPi.ygMhrE?9B&i0&!w(VSe@');
define('NONCE_SALT',       'r6l h?-BF|LZ] n^n{Vvm(<[,dC2{b`UZ1pcTHLQG`bZUAfJ5$ch*.-Obbx^q.:m');

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
