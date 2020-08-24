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
define('AUTH_KEY',         '1GOgir85ZQyHYAvAyT6F2l5KXY+9jXz84H6yHNbMNLhyqxN5jxmPMVU6xdiJ+ljuto1ehWf0gv9L9Z11trnKRg==');
define('SECURE_AUTH_KEY',  'HO5w3vllj1wRUfscaMArBCbybsVIJsldPuB7yX1hfWVHhNXxxFPoDm05ymthcvJFNGTS3JnHqbutalOPw6pKgA==');
define('LOGGED_IN_KEY',    'k2vy0ft61Zf/ek5o1GTviiwWt4BrGVDoyRttabSnD0XAf31OC+57XMOxPqY+UIGGkBrF+JW5aSw8wx/n+XN0gQ==');
define('NONCE_KEY',        'Z5ZNf8lypADHyDmtV9m3JRN9EzB+DbyGLyJgW6xkticRJKa5x0mCQ20y89Vw+xmgSYpiRbYeknT9hcYhMIlzeA==');
define('AUTH_SALT',        'zY6yXN8IS+uQ3OkskhivESK1m2WfffuSjQWIYz+4D+BGUgPfF0UA13i1Wd11UyPSunMTYEk82533MAHdRDh+Pw==');
define('SECURE_AUTH_SALT', 'BU9m2VUE2zg4+XWxm5NecY53ekCQAasQcRQMh1sfvFDgX5dQQQVHt8I7EHIsHxWl6no1Ji+7U4Jvgtv/XK4BfA==');
define('LOGGED_IN_SALT',   'fmetdn+VCXjXpsWW89+2o0hKiVekvlvL5rDZrhU0NsX5jJWmBOKxthT8anCUHaDcG1IRixTGE4cHZ2ldxXmsIQ==');
define('NONCE_SALT',       'UJ5axrvJG2pl8dGZ3mRV+azhGK10bd85hBiBEWmpnzGn56VRAclaK+YH6QfMpo/MqcpA6HlkiZSNHn/5YqBQnw==');

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
