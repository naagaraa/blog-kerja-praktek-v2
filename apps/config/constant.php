<?php

/**
 * -----------------------------------------------------------------------------
 * Documentation @config
 * Author : Nagara
 * -----------------------------------------------------------------------------
 *
 * untuk set base_url atau membuat url rootnya dengan membuat definenya
 * kalian bisa membuat config sendiri atau Variabel global dengan
 * melakukan set up define.
 *
 * example root url :
 *
 * www.mycompany.com => pada live server
 * localhost/project => pada local server
 * 127.0.0.1/project => pada local serve
 * 192.168.1.12/project => pada local serve
 *
 * define('setnama', 'lokasi root server');
 *
 * example untuk set url asset :
 * define('assets', 'localhost/project/public );
 *
 * example untuk set url vendor:
 * define('vendor', 'localhost/project/vendor );
 *
 * example untuk set root url atau baseurl :
 * define('url', 'localhost/project/ );
 */

# config file .evnv untuk configurasi pada file
# apps/config/config.php

$configuration = [
    "APP_NAME" => $_ENV["APP_NAME"],
    "APP_HOST" => $_ENV["APP_HOST"],
    "APP_URL" => $_ENV["APP_URL"],
    "DB_HOST" => $_ENV["DB_HOST"],
    "DB_PORT" => $_ENV["DB_PORT"],
    "DB_NAME" => $_ENV["DB_NAME"],
    "DB_USERNAME" => $_ENV["DB_USERNAME"],
    "DB_PASSWORD" => $_ENV["DB_PASSWORD"],
];

//-------------------------------------Development----------------------------------------------//

// base-Url untuk asset
define('ASSET', $configuration['APP_HOST'] . $configuration['APP_NAME'] . '/public');
// base-Url untuk URL
define('URL', $configuration['APP_HOST'] . $configuration['APP_NAME'] . '/');
// base-url untuh path
define('BASEURL', $configuration['APP_HOST'] . $configuration['APP_NAME'] . '/');

//-------------------------------------/production-----------------------------------------------//

// // base-Url untuk asset
// define('ASSET', $configuration['APP_URL'] . '/public');
// // base-Url untuk URL
// define('URL', $configuration['APP_URL'] . '/');
// // base-url untuh path
// define('BASEURL', $configuration['APP_URL'] . '/');

// vendor-URL
$vendor = $_SERVER['DOCUMENT_ROOT'] . '/' . $configuration['APP_NAME'] . '/vendor/autoload.php';
define('vendor', $vendor);

// Constant untuk folder pada Controller
define('controller_user', 'user');
define('controller_admin', 'admin');

// dir vendor
$DIR_VENDOR = $_SERVER['DOCUMENT_ROOT'] . '/' . $configuration['APP_NAME'] . '/vendor' . '/';
$DIR_ROOT = $_SERVER['DOCUMENT_ROOT'] . '/' . $configuration['APP_NAME'];
define('DIR_VENDOR', $DIR_VENDOR);
define('DIR_ROOT', $DIR_ROOT);

// config folder upload
define("PathCover", $_SERVER['DOCUMENT_ROOT'] . '/' . $configuration['APP_NAME'] . '/upload/contents/cover/');
define("PathImage", $_SERVER['DOCUMENT_ROOT'] . '/' . $configuration['APP_NAME'] . '/upload/contents/image/');
define("PathImageAccount", $_SERVER['DOCUMENT_ROOT'] . '/' . $configuration['APP_NAME'] . '/upload/user/');

define("PathImageTheme", $_SERVER['DOCUMENT_ROOT'] . '/' . $configuration['APP_NAME'] . '/upload/theme/');

#Note
# super admin username root
# super admin password programmer1234
// =============================
# admin username programmer
# admin password nagara123
// ==============================
# marketing username andi
# marketing  password andi1234
