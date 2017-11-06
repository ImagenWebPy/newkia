<?php

/**
 * ARCHIVO DE CONFIGURACIONES
 * @author "Raul Ramirez" <raul.chuky@gmail.com>
 * @version 1 2017-07-17
 */
// Always provide a TRAILING SLASH (/) AFTER A PATH
$host = getHost();
switch ($host) {
    case 'gardenusados.com.py':
        define('URL', 'http://www.kia.com.py/');
        define('DB_USER', 'web');
        define('DB_PASS', 'WebG@rdenMKT');
        define('DB_NAME', 'kia_site');
        break;
    case 'www.gardenusados.com.py':
        define('URL', 'http://www.kia.com.py/');
        define('DB_USER', 'web');
        define('DB_PASS', 'WebG@rdenMKT');
        define('DB_NAME', 'kia_site');
        break;
    case 'localhost':
        define('URL', 'http://localhost/v2-kia/');
        define('DB_USER', 'root');
        define('DB_PASS', '');
        define('DB_NAME', 'kia_site');
        break;
    default :
        define('URL', 'http://192.168.90.195/v2-kia/');
        define('DB_USER', 'root');
        define('DB_PASS', '');
        define('DB_NAME', 'kia_site');
        break;
}
define('LIBS', 'libs/');

define('DB_TYPE', 'mysql');
define('DB_HOST', 'localhost');

// The sitewide hashkey, do not change this because its used for passwords!
// This is for other hash keys... Not sure yet
define('HASH_GENERAL_KEY', 'MixitUp200');

// This is for database passwords only
define('HASH_PASSWORD_KEY', '!@123456789ABCDEFGHIJKLMNOPRSTWYZ[¿]{?}<->');

//Constantes varias
define('SITE_TITLE', 'Kia Motors :: ');
define('ADMIN_TITLE', 'Administrador Usados :: ');
define('TITLE_ADMIN', 'Institucional Admin :: ');
define('THUMB_MENU', URL . 'public/img/vehiculos/imagenes/thumb-menu/');
define('VEHICLE_LOGO', URL . 'public/img/vehiculos/logos/');
define('CANT_REG', 9);

define('META_SITENAME', 'Kia Motors Garden Automotores S.A.');

function getHost() {
    $host = $_SERVER['HTTP_HOST'];
    return $host;
}
