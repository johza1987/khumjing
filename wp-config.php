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
define('WP_CACHE', true); //Added by WP-Cache Manager
define( 'WPCACHEHOME', 'C:\xampp\htdocs\khumjing\wp-content\plugins\wp-super-cache/' ); //Added by WP-Cache Manager
define('DB_NAME', 'khumjing');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '1');

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
define('AUTH_KEY',         '_um(GqC)i;<iCI@X/V(,|*Y__,~A( a_.,/_Y0c4e.ZXb9Eg.Vfsq_~4`s@LcXDG');
define('SECURE_AUTH_KEY',  '4r85y@-)!z{A*eT*vl9$> jc-#IwcR4-]7N18dMr=?$X7s^I>{JwG*VJ*>eO-@?j');
define('LOGGED_IN_KEY',    't8AeUT# Sm6(HO*7:#KjyLscC/?-ahrCvNA6}$g]Y#qtg:P4cXJBi/*22;=w?+b!');
define('NONCE_KEY',        'iG/?Hg_hIH{&P9MAyT)K|K*MIjaEUnJz8bHcOvN;K=M^~(MBo_g>5B)JT-FhacmX');
define('AUTH_SALT',        'ccU(DZ:nKRTOKQv3v[[Y8QhJw$q_w2<>gKy]<X||J[uwBaEnQLCQr+XfCzMbVR,,');
define('SECURE_AUTH_SALT', 'h(F@;,u.yzthOChT+ QsrJ{hPZ&$oYC~L&{7Yg|C,xc@mNHXY$Y53_Vz__GkfKJ,');
define('LOGGED_IN_SALT',   'k%L+Mp`}oSyyV(9i=ub^4JD:~#)_W||<?S.?T|j`Ck.Vd.^+>o]J9^]zo|bS_oY=');
define('NONCE_SALT',       '-~N+B*#EQ[+&L8 5dxqMKz=V^).OV,UbltA&+b<Bk-d2KhNJ~P)oN0>kE4[fWJk;');

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
