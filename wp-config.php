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
define( 'DB_NAME', 'u898566104_pratnya_wp171' );

/** MySQL database username */
define( 'DB_USER', 'u898566104_pratnya_wp171' );

/** MySQL database password */
define( 'DB_PASSWORD', '1rSX-bp71]' );

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
define( 'AUTH_KEY',         'stjxhnut68rj7k3vndaghc5pwaalv1njoxrlefawjutlkjmc2pk3urkfkgxcgw89' );
define( 'SECURE_AUTH_KEY',  'deppbvleay63ooudrqkni5pwrj8prnbuakpemwbsfcqbw4o376r64pw5ub9fph8o' );
define( 'LOGGED_IN_KEY',    'wjzfq93pue5fachtgffipm6rdemmeqq4jmtokvbfqyzrdcjmrwh0iekppejpuyy3' );
define( 'NONCE_KEY',        'tgoyzydsyvufovrg08gjoyjbp68cypxxl5zgqzikfrl9hb25qcxqoepxd1cuokth' );
define( 'AUTH_SALT',        'oy7fuffmczf7e5yovhitaodrv5cae0ggs0gfnobugikplwnba9ic9cpynmelulh9' );
define( 'SECURE_AUTH_SALT', 'czu4rqe822h7mupj3grne3iyrnf514jpcvsqzctqdhjfjxfqe3h5zun6kpsiw0a9' );
define( 'LOGGED_IN_SALT',   'vitayr837b9bufjbq8zh6opw1coerzuvdhjgcvaj1q8gfvyyrweljuf97w8dlxty' );
define( 'NONCE_SALT',       'kiemyoqmp5jltivynkn14bmismlluce85xbon86p1ufh4uonyuppnwkob032btjs' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpvi_';

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
