<?php

require './vendor/autoload.php';

define('PROT', (!empty($_SERVER['HTTPS']) && strtolower($_SERVER['HTTPS'] == 'on')) ? 'https://' : 'http://');
define('ROOT_URL', PROT.$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF']).'/');
define('ROOT_PATH', __DIR__.'/');

try {
    $params = ['ctrl' => (!empty($_GET['p']) ? $_GET['p'] : 'Acceuil'), 'act' => (!empty($_GET['a']) ? $_GET['a'] : 'acceuil')];
    Engine\Router::run($params);
} catch (Exception $ex) {
    echo $ex->getMessage();
}

