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
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'mydb' );

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
define( 'AUTH_KEY',         'Yu}<TJu}ldX(:rp_}Zbpqu uOK-Tw3-Tu~5YBaO*IG*C>X:i@N}v~jZ )wD_fC^r' );
define( 'SECURE_AUTH_KEY',  'Cr?I*/u_{*w(aF)*4%GEj?iUq7}pB_^@u&YtU70=()*7^a`Tf9OJ!+-TGk2p8Lwb' );
define( 'LOGGED_IN_KEY',    'v%^?^&bztz !wcu:G(?EVJFQSdt:!Z ]ky6dgq}>XRRj6dk:rEp^ng^I2o)TZZ]$' );
define( 'NONCE_KEY',        '-.10_L$,,K#-)i4eH/|6hm$vmOw7Fe? 4]&wl4Nx[i^G-Gm~9sYh[g&|9Wh)WYcb' );
define( 'AUTH_SALT',        'yuy}q8+PfR=w>:nS#kCD|KY%|K#YaT&%~JnnRn[O #[p^s=7wf)|2-:Ew:]nUv>=' );
define( 'SECURE_AUTH_SALT', 'aQW`5!gC?/?8+5P_e{W%$oF}P3WdF< +iIPNVFN~Cg8P!,;j3_[aworj&-dKbl%q' );
define( 'LOGGED_IN_SALT',   '7`rgs).f-N%afI5H8Y*t`:V>8b!^7.hyxj+{NR U/c,6?M_ S<GT1^0N~jng%$=z' );
define( 'NONCE_SALT',       'miJ2Ob!A6}1f;^La`vv{G&5O LW5;2h O>4g9QAhJm}s W g/H#T<6/QDxroxu4J' );

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
