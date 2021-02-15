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
define( 'DB_NAME', 'abhiraman' );

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
define( 'AUTH_KEY',         'v%-@qC|(6tQhS1F7j`|+&>0MIf5WI#sr+iEYku|nNzz&p_QRl0%hiS+=1ozU~Bn3' );
define( 'SECURE_AUTH_KEY',  '^GXr42lHL.^2X*`0Btx{ySiMVap1(klh}I_cYA{F;u@qf2Y `&lucaoR&[{O)ULQ' );
define( 'LOGGED_IN_KEY',    'V,[g1Ia*=?_mCS+B*p{ZGA[ 5o1~QMzob@0fT>Q0=NU5!,wZ4@%EqMLCuE!@_Ti`' );
define( 'NONCE_KEY',        '7BI2QT uy.G/HFf{/^SeR**XLjr-P*!q/ckTE>y{zg_-)UpTR_f7l^^)+aAS>_)!' );
define( 'AUTH_SALT',        ' k(1V5}BaIGEte2>?;BG/HB)4(>:J!|(/m5tMC;GexI{#Q|a[H2EGI1Hp@A%*:8K' );
define( 'SECURE_AUTH_SALT', 'h&~ lzC)=VfoZ+`Ch0d_4]Ij>]@]e$$6d:`e]9HXQDZ^I^1fprKxWT/KcLn+mm]j' );
define( 'LOGGED_IN_SALT',   'h72ty-iw3H-Pv[aSY>=LHRdSTrsSD)_]^*>=5C)2N1e}|Pqr&G9D.L{>}^}*G7!|' );
define( 'NONCE_SALT',       'CVH|`OE/o{tY_ag%zqvSO7:XsOUs,?IY/*8;oKdm4,(<<hS[^jJA~C?V0d{ZizAE' );

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
