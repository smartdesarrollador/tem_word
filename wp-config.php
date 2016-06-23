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
define('DB_NAME', 'escuela_pacifico');

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
define('AUTH_KEY', '.cndOVg[uU%p|*?dWD|RX(E<%6$-{?KoOOS_8stR0v2l<)-O_Zv]&L}*B<#z)QL}'); // Cambia esto por tu frase aleatoria.
define('SECURE_AUTH_KEY', ',A0FYO0,.N9m%5+X0-}8^k^Ui<1}u:~H[nJBc_dTm&@6#h2S 5yZ3T^`7DS7@HT0'); // Cambia esto por tu frase aleatoria.
define('LOGGED_IN_KEY', 'jNY*$,`F@l+Gwb-Jy9=PxH?TfgZdE/$X^3W/.g&DA-;kb]f])zA7xH{&2x-7kyGP'); // Cambia esto por tu frase aleatoria.
define('NONCE_KEY', ';&?P[`R$],Cyo.3HTvVq^wEH?c,77-d6w@D-GgAkK9VH*shcFL|[zl!{o!f}*b8N'); // Cambia esto por tu frase aleatoria.
define('AUTH_SALT', 'TXIE4?$^&lRoU-z{eg6QBc:{EDIAxvYeVP<+jcnK; ifwf1Ksc!XXJKw!8Xm9+0`'); // Cambia esto por tu frase aleatoria.
define('SECURE_AUTH_SALT', 'f9Hj!UxUDY%QnFY--@Ua^41MN]54IX[n{-T{WVn!8K&<XW0>]x+6pXOvLj`l>-+T'); // Cambia esto por tu frase aleatoria.
define('LOGGED_IN_SALT', 'XMX^15WZXd3[DI0_R?Eg`bWgsQrDgi66LdjI.8CwG$Crs|$XCUGjs6h&n{T}-7od'); // Cambia esto por tu frase aleatoria.
define('NONCE_SALT', 'g=|!zJo`AN.H^s#?kCUF} Y.}Y)txpvRgs(IL;_Us<M]Y[NO:C ZmE)@Y0OZg|Xs'); // Cambia esto por tu frase aleatoria.

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

