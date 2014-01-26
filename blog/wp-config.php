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

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'justhum_blog');

/** MySQL database username */
define('DB_USER', 'justhum_blog');

/** MySQL database password */
define('DB_PASSWORD', 'SkP7f1n81b');

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
define('AUTH_KEY',         'ebexsmmzkapywgt93pplvdppp3ahlcw8m9ex5twlttyckbdgc0qjmggc8gk8mghy');
define('SECURE_AUTH_KEY',  '1r2vqa6acttizzeg8l4crsafvzrwlm2dfafvs0s7fhgzgeqodtoitwjlhkjzurrp');
define('LOGGED_IN_KEY',    'eob1hk0tilhrjpuncqmogsdstvnb2palsxspmnrsxkdqlsldwpnjce8wkhcgsps2');
define('NONCE_KEY',        'gls1e2swqpic60uxhuawhbmsgllv9bipbuzu8tbx0kmawmgnpdjdfwi1sxa81enm');
define('AUTH_SALT',        'ea6gmnuseno4qobwyia8galh1p9wlwhmgit2zh6q1pvzwdnlrhx1yvifi7di78mo');
define('SECURE_AUTH_SALT', '2qridqh0qbq6ur8cfmfjdpgpsgbhxu7j75tufurix5bqhna2kif9fo2mml7kxvky');
define('LOGGED_IN_SALT',   'ns4h2omktv2l6newdamyv8htmgcejfjxpwyfa2srcceodosigu5kpia45aeykoen');
define('NONCE_SALT',       '0sxtyvhdxdvqthsjq8mou5cau6lobf4lampeakua0pxgnyipbluxz331a8hvm6ro');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress.  A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define ('WPLANG', '');

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
