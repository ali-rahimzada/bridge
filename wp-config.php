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
define( 'DB_NAME', 'wp_test' );

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
define( 'AUTH_KEY',         't^0?gUFO.WJFzQBcUK-@P,2 %MSs&TGrRBB#`$5SQP]q@V1ndUs/?zkes#X!yBqJ' );
define( 'SECURE_AUTH_KEY',  'D^)0}Aak{n`(oY9=2-`hW/DIdN>P:bV6kr8.!}m$(XiPQ#HmtFN;Mo%d%/$(@f-c' );
define( 'LOGGED_IN_KEY',    ' I`mxO^3pvIEk[^2VA?jQCtm&$W9N&*<Ucfk]F6s:rYT5k@tlW)ZWAwAB&7tchwF' );
define( 'NONCE_KEY',        'XZ<(2$q6-0qHn#BLlDK(bP%Uv)Gvy(+3DefIPqo_;{w)~DCPe5,~@XZ.5C<1ker1' );
define( 'AUTH_SALT',        'jq_ox:`36IWfd7&$;RnQWu#.LM,m9`sM#YDO,53PLz%$Q*{)=p!-Co*|c(j!*`|`' );
define( 'SECURE_AUTH_SALT', '2PAVg:!]{E(x>@TBSX>UEcULG|u!EA5+~&}a%-UMDelghnS^]9>zE4Z4e%<>aN;m' );
define( 'LOGGED_IN_SALT',   '%U;/i`r1hc( -H755qZ1R8iD$uV5,K$8%g=xOXFNNhl} *WZSS4Ue$](n!0ZsR$r' );
define( 'NONCE_SALT',       'H`Lp1W$UsYeCxiALQ)`RH 3&XC#< _qMb5`=b[l)GnTZw|/MZA9w5CLK|Qr*jFgO' );

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
