<?php
/** 
 * Configuración básica de WordPress.
 *
 * Este archivo contiene las siguientes configuraciones: ajustes de MySQL, prefijo de tablas,
 * claves secretas, idioma de WordPress y ABSPATH. Para obtener más información,
 * visita la página del Codex{@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} . Los ajustes de MySQL te los proporcionará tu proveedor de alojamiento web.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** Ajustes de MySQL. Solicita estos datos a tu proveedor de alojamiento web. ** //
/** El nombre de tu base de datos de WordPress */
define('DB_NAME', 'bamboo');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'kevin');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', 'kevin123');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8');

/** Cotejamiento de la base de datos. No lo modifiques si tienes dudas. */
define('DB_COLLATE', '');

/**#@+
 * Claves únicas de autentificación.
 *
 * Define cada clave secreta con una frase aleatoria distinta.
 * Puedes generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress}
 * Puedes cambiar las claves en cualquier momento para invalidar todas las cookies existentes. Esto forzará a todos los usuarios a volver a hacer login.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'L,p7>)$08C9uD3#*3C)61 +E|?;crn?%b5/;kw.u@Z)~B[.,k,bt18%VeivBLhon');
define('SECURE_AUTH_KEY',  '4nkF+]ob+V1v{!uGk+?+%}so7!X{A5ls|`yFEOert$Ym!YfZ|VSPp^{|qp9B9j-r');
define('LOGGED_IN_KEY',    'E8LtVWb]FyX3Z|Ok[%#!bIOz8j$A}+r-X3B><|r;hulsfC+`>6YhHW$bk/V</cQ8');
define('NONCE_KEY',        'J@Oh/1ksrMl(Q4(O0k^y&I{Fn{R-4u1q+2n=]kj4ieE*SI3UPL;PZ86%ZfW>,1h`');
define('AUTH_SALT',        '.bLQpt>mP0T:-+)+{^rBdC1aw1ug#H)1+&-RnFb#39be|RpPhe-/sTKs(,39|hGq');
define('SECURE_AUTH_SALT', ']hA=1$0UC/BSQnHdnODg3/?X^[R,((=7%09%9^k~LI1|^Pf*SXNQlk#*+~+|Bj-b');
define('LOGGED_IN_SALT',   '`y{=K.%Pyd5V3NAQO:bAGtK1wT!8H=(Z^U5+]U#9[Aw+|,]fzJ*c<H7Y}46e+X:9');
define('NONCE_SALT',       '12Ay,S|fv5/6/LrNq 81MQiKc=_QL@55)M9u8{6H%*J{;QH`2Uz7l~C:j,dy%(lv');

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'wp_';


/**
 * Para desarrolladores: modo debug de WordPress.
 *
 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.
 * Se recomienda encarecidamente a los desarrolladores de temas y plugins que usen WP_DEBUG
 * en sus entornos de desarrollo.
 */
define('WP_DEBUG', false);

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

