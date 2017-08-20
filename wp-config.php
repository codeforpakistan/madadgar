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
define('DB_NAME', 'musamamc_ss_dbname995');

/** MySQL database username */
define('DB_USER', 'musamamc_ss_d995');

/** MySQL database password */
define('DB_PASSWORD', 'LL1PI9w1HpdF');

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
define('AUTH_KEY', 'v<FkWWNbSu-S?R{ad{aUG-i$GCjQ&n-IkDybdo>oYRzmxw)Dg^WEfxalt/-S*Ix&Bv!/OxsQh!pXSVKkvTX@]SP(xtWOA=Jx_uk=cojBjl_(m$U*xd>(Ooj?zdooHp[d');
define('SECURE_AUTH_KEY', 'ca$Yw{SZzNN+UC$]Sp/EBJNvmQ;pHNWNlZrj@FJOT}U+al=D;ziB&q>Vecql/lVbR<mSjD)V*JcbYLYJCov/oTKnp?r^u-<Oq/mE!?po)Ai}P};A-rsqf__gQe<;Y?io');
define('LOGGED_IN_KEY', '<Ak&?M+ZKUSft$pq!E&>%-J/}+j$kz]f!XW+lrwf[Z+YmYPOp]liuQQE;F%|@pJEBxXY{=TcOq@CK+jqv{Rx%S($]_d)=mv]MJ{OHB/*QvbW^X%!mUUyhVK?jEat?l$T');
define('NONCE_KEY', 'ZsO<}U{[T=|kzrLZQd)=Jz@fsjQJ{%Byp^Fes)GF>L-mC|Sr*OIwoIA>jdw[&C;to)N>o_aoQqOEuHz}j%RGPAlTB%whtMO^*WarQKio/UycWTq+Sl[[Xg&gEw(X*v%K');
define('AUTH_SALT', '/hOmLZD%Fhz(!=duE-azar<jpNLPCI/VtvP@ktu;]Vv/@cZ)M<!MyjahWRuYDuxN]_OIbM%poZzc^iO$=U(/ncD!%-}V*DdLdHu!rG/-{aum)L)cXvyms]M@U_?e&<|X');
define('SECURE_AUTH_SALT', 'PJHN?qjDJ]/SZkzV)C@CDgIwArJ$^TxFcpeLNfxX&_zuj@$JW>v;pM%}h]%j;X]qsW)[rnCP-[-[ViT*=iN!feu-Nr!o}!&y+F|MM{!HQorMIBa{Hm-ZUc>TFSPpED*q');
define('LOGGED_IN_SALT', 'H]dK/Hc$O?UwQG})o)FNNIAaavWj<yr]X;_Go+_d)HNAJGM=[}[{}ZD^)M$A?FPX-XN_%t<]q>=ORTMt)Ekw!=}!JP;Fq@qWRF};]wGjoCTa^SZ!NEC!XIy|r+KjMDF=');
define('NONCE_SALT', 'rzgLr+EIxQjUhIJGrBC&!cD]|aszMKh??{-q&jqaapum)pVPrypxv>yQz*^_L]bP*=@jD?a<DAW)QHPK/=}%^->q*oto*X&WsTFW{OeVEK{)^[ruy?u[<=]COn-arD[B');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_rdoc_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
