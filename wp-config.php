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
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'Rl1JeqSTMCdEfZfWe2/V4NAz+8eqzSwT0tO8L4rH7R48YnjKhC6kbwbB1Xtbj4XZbrWwTNDdz0STLCJxEt3WCw==');
define('SECURE_AUTH_KEY',  'fYYODeaZkVfozz1mpjHKFkXc++dn2ELD5WrLevts3rCFsPdxwVt9qx8rxHl/tflTUBYqcHF+2C9s1YHRU6DD4w==');
define('LOGGED_IN_KEY',    'qId5IKZ+B2JTDJes7+oW/Bu6JAtLtG8C9+dJ9MNLyJ2yDAqyAUPNe9aOCBdtz0fQzQ9eZ/O4T54oGYW4ymOAcw==');
define('NONCE_KEY',        '0A/xOqPnbqfy5LIi2qUrcKL8Qw99NNoc/99rLp1o+FbbQNiD4AC8dOgTmanwN1lW/GRr3epJOIlH7fyiwwS8rw==');
define('AUTH_SALT',        'Y1tbGZVBt7USlsXm912JlQuCS3TL1+ckYih/8t36wXiBX/R0sJtYUd7rMN77DM7EPYxVojkIHe5c5cvDxtmAVg==');
define('SECURE_AUTH_SALT', 'PtMYP0MZ0iiR/eCrFrm+jz/6F6/qWG8aIDyamw6Lb0mrNIyYX2ySilUuUQC+PMpBHkc5I/r73b99VkImcpY4VQ==');
define('LOGGED_IN_SALT',   'lfrM/JbLZCYtdAWN9E7HmO7GQwJa+uJpKB8RNbjF+rNzeskv+i8PGSHFpxqk1lCHNGE+C2keVP7UrVuR9HD5HA==');
define('NONCE_SALT',       'F6bIjKdHY/K2C6YxdOWzJPbqBaLkq7cBw939zMsGUzt1He1wn4g9vVapPbq4R3B9GFpHuW9bUsTM75E+AeM2GQ==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
