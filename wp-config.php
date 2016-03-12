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
define('DB_NAME', 'lds-db');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', '');

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
define('AUTH_KEY', 'xDC}j5It$$XiFl<kK_D4LN,YKEPdwpKLy+OoI+-W-&l8DBYUbkoe0(!gHNs(AQ H');
define('SECURE_AUTH_KEY', 'uWZ||l*,rO3#*s9@)G`-o&iZQyLGhnhB7{/`CnF,=I<2f{r~I>J&82OMa17&N+I2');
define('LOGGED_IN_KEY', '|_:C:}L=]6fwNbNJB~blj#|1DJJW`]FC>c}3{s UImfsx/D IVF#VVP/xC8VB&lT');
define('NONCE_KEY', 'Lq:e?pAwYynz4 YtQ*M)d2R-*(K5+-coe,^1tpQecg/I&kvSe-(L.=tF65jb^;e4');
define('AUTH_SALT', ':27xBu|Ikm^IWY3])bx)A|GY(WuA3%#T69LOk=(cj4+(-h~[&eeUh?+jsi8+}$Pk');
define('SECURE_AUTH_SALT', '{2_P6,L3=<5VdZ3Yas2EM,mBay{k,E>Us=hWAG>?q7kep>)WEe8> z|z=c99U[#H');
define('LOGGED_IN_SALT', 'H)!C/7Y^XbjJ;E=MOHR$VQ-Ze#`,#wKh2h@<!.gW_c.>V{|!O0O~}RDu$!qIgOC7');
define('NONCE_SALT', '_)I<+K)lrYDp/s)/P5^-F.&M.q`NiA._V@nTf0kxx252.QY4.Q@:NPDB)^^7s0kT');

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

