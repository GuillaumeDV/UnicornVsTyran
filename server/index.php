
<?php 
header("Access-Control-Allow-Origin: *");
require 'Router.php';
include_once 'Request.php';
include_once 'Router.php';
require 'db.php';

$router = new Router(new Request);

$router->get('/index', function() {
    $pdo = new PDO(DSN, USER, PASS, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
    if($pdo === false){
        echo "Connection error :" . $pdo->error_log();
    } else {
        $getAllDictateurs = ("SELECT name, citation, lien FROM dictateurs LEFT JOIN citations ON dictateurs.citation_id=citations.id RIGHT JOIN gifs ON dictateurs.gif_id=gifs.id");
        try {
            $sendRequest = $pdo->query($getAllDictateurs);
            $dictateurs = $sendRequest->fetchAll(PDO::FETCH_ASSOC);
            return json_encode($dictateurs);
        } catch (PDOException $e) {
        $error = $e->getMessage();
        }
    } 
});
