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

define( 'DB_NAME', "wt-lichtenberg-dup" );


/** MySQL database username */

define( 'DB_USER', "root" );


/** MySQL database password */

define( 'DB_PASSWORD', "cimdata" );


/** MySQL hostname */

define( 'DB_HOST', "localhost" );


/** Database Charset to use in creating database tables. */

define( 'DB_CHARSET', 'utf8' );


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

define('AUTH_KEY',         'c:E7vR29KLP0?W5-p;gpUh3Hq|(h~?treY[iC.;f=#Q(r /<<hVxD>/!/C)cD7mV');

define('SECURE_AUTH_KEY',  '+|Wq^uO!}]%?A[1~b75=)sbM<?;%>{Gs%n|@|B8YB0[j||f-VzTyduLBL!_&>DKC');

define('LOGGED_IN_KEY',    '?7)np+v=|vg~hWPQ ~c958^z;)ua8xC=xAUNrI&%QQwb-DX-fP.DimYTP+@rh_/$');

define('NONCE_KEY',        '+Xcjc-$3+#B{Mb,s z4J]q )Wqn1J9g]|0E]WMXr={W98s^%2~MbVH|I&X=|6q/N');

define('AUTH_SALT',        'Z*+-oKL],&umFuE{Gz4ck=8?9s57=0F<Y&g,-C~G_sfH%d.NVaYkaQ;CC-i0G|,?');

define('SECURE_AUTH_SALT', '|KJ,FlaFs)oCAmasBJv*Pw9SH?[/CU%:O/<ee!wX2,sk#u_$#Dj1; eABOk!zClD');

define('LOGGED_IN_SALT',   'mOt?Fv.2?j7zC]nMdmlo++$I}9,@wjEvA;|F!U F^(+!L*,kUNK-UeF%d+j`b+;x');

define('NONCE_SALT',       '%e:,PdBOGDTkH~ESxsq#@d|PJIz,H?`Grd_O4M~:#+Bv2r-ZmI[[kN#^4Uncwz5P');


/**#@-*/


/**

 * WordPress Database Table prefix.

 *

 * You can have multiple installations in one database if you give each

 * a unique prefix. Only numbers, letters, and underscores please!

 */

$table_prefix = 'dbvq_';


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

