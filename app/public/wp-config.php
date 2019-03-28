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

// ** MySQL settings ** //
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
define('AUTH_KEY',         'eTB9NUvQEPsyxeQqmT6PNWA/dgEemQFCjjVVyV/pXLMFdsakGOM9QEjSeSFqbiGO9/a/RJXPJ11HfEyaYsvvOA==');
define('SECURE_AUTH_KEY',  'BtDOFNl28HBommphVW8xyzbm5l3D4ymg62/zkHIiM7Z38w/md0hOjVzsWPcGpFzwZQLeZondbAIyItDj+scR2Q==');
define('LOGGED_IN_KEY',    'ogSUjjnieslnTFxBdPOAEC0VToekyYMtkVwJVHg7CccN7FOmKIvlEMZSR818w5fZMcTsp5WQsA8dtgAFKJeTIA==');
define('NONCE_KEY',        'rIRmJZWBOyccY21BttsFku5kYyrcMqgKC4CGDMFaI7zvrq3FXHALZ9s4iOPOZ/s9tqu+0srmY4Cw/pfb39TPvg==');
define('AUTH_SALT',        'rCor+mrg/TUyO+ZO7HL/J7xOXg2SOequVRn0/Y6cHTT5LozYZ419O8iqGA/GN3brdE0dp51c4x8as8Xj7u+eWg==');
define('SECURE_AUTH_SALT', 'zuPWrRScYrdSP3D+stzK/weV+Qu5sbIJDNq74BGxlZWGoQ78p931i0X4nuAcsds/0iFVzzwYAnuOX9a7joPJvw==');
define('LOGGED_IN_SALT',   '1gV1rf4OHzlwiq1YEF+Y5NfZ2LUZ9TylMuEdejjMBLVCtmau2lLGd3DozFqP72KDRto4Cn9vedVmsw4LyJ1JpQ==');
define('NONCE_SALT',       'r5leBDQLOblcPCd4oEVlltZRwUS1gs6tWFQ8stZsTYZLJhf85WGPhkIeWHYhwW30+XIOBMVVISJTSREs/y4hRg==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
