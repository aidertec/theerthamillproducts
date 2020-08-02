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
define( 'DB_NAME', 'theerthamillproducts_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'Q}b?l/z}#%H|$g[2Zp=S}IsPkrZ1>-BJ6c)SC+@UN&K_q}F:L|cyh0(JOC>s+o ^' );
define( 'SECURE_AUTH_KEY',  'iF4Hn~/=`vE(Ju#>{b(-o{!Y}CyMW4[h=UVg0I] /xs|+r6f$.gvwY].t3@0d@[!' );
define( 'LOGGED_IN_KEY',    'tGP6R|XEmX;`rJj9SilpHQZ{&v<kv(y~&S#iC1:RN9c).l3dY[*<n6j0PfgJn,do' );
define( 'NONCE_KEY',        ';[=r?VEZ$%,#RyDTQE^30?/JsnIQ2.6U@{!o5>bulV=W/Hie5P;kivj+7ooVKZ<J' );
define( 'AUTH_SALT',        'g+z}@L*9YV,W|P/6gTM#@00_GxkjYe3F|L)R=8[_r,~*Ua3PWW_!E[n}5y~)h*go' );
define( 'SECURE_AUTH_SALT', 'i7=IRBX]4}),H{dpeJ7qPNw,a|ij,BAApUW|_gChkglkRA ^}oFAse7E@P(PRXH!' );
define( 'LOGGED_IN_SALT',   'Mv];zX;w>D(PXG~b]i@/N8f,9$C1KU0(6*QLh6O7m+WuVw!{g-Jic}48|~vxu4h:' );
define( 'NONCE_SALT',       'GJ.r:hC8dhBhS2BjFW#S_DZG3L]W#zO4Z:oj1@pDU6^gacB;3Fjz8gAh~*~Qv+QZ' );

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
