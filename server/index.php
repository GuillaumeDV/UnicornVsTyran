
<?php 
header("Access-Control-Allow-Origin: *");
require 'Router.php';
include_once 'Request.php';
include_once 'Router.php';

$router = new Router(new Request);

$router->get('/index', function() {
    $pdo = new PDO(DSN, USER, PASS, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);


    $array = ['plop','plop2','plop3','plop4'];
    return json_encode($array);
});

