<?php 
header("Access-Control-Allow-Origin: *");
require 'Router.php';
include_once 'Request.php';
include_once 'Router.php';
require 'db.php';

$router = new Router(new Request);

$router->get('/index', function() {
    $pdo = new PDO('mysql:host=localhost:8889;dbname=unicorn', 'root', 'root', [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
    if($pdo === false){
        echo "Connection error :" . $pdo->error_log();
    } else {
        $getAllDictateurs = ("SELECT name, citation, lien FROM dictateurs LEFT OUTER JOIN citations ON dictateurs.id=cit_id RIGHT OUTER JOIN gifs ON dictateurs.id=lien_id");
        try {
            $sendRequest = $pdo->query($getAllDictateurs);
            $dictateurs = $sendRequest->fetchAll(PDO::FETCH_ASSOC);
            return json_encode($dictateurs);
        } catch (PDOException $e) {
        $error = $e->getMessage();
        }
    } 
});