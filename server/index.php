<?php 
header("Access-Control-Allow-Origin: *");
require 'Router.php';
include_once 'Request.php';
include_once 'Router.php';
require 'db.php';

$router = new Router(new Request);

$router->get('/api/index', function() {
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
        return $e->getMessage();
        }
    } 
});
/*
$router->post('/api/reponse', function() {
    if(isset($_POST)){
        $citation_id = $_POST['cit_id']; 
        $gif_id = $_POST['lien_id']; 

        $pdo = new PDO(DSN, USER, PASS, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
        if($pdo === false){
            echo "Connection error :" . $pdo->error_log();
        } else {
            try {
                $sendRequest = $pdo->query("SELECT * FROM dictateurs LEFT OUTER JOIN citations ON dictateurs.id=citations.cit_id");
                $dictateurs = $sendRequest->fetchAll(PDO::FETCH_ASSOC);
                foreach($dictateurs as $dictateur) {
                    if($dictateurs['id'] == $gif_id) {
                        if($dictateurs['id'] == $citation_id) {
                            return 'You Win! ' .'<br>' .'<img src="https://media.giphy.com/media/l2JdVSAGHuV3gkkms/giphy.gif"/>' .'<br>';
                        } else {
                            return 'Game OVER: ' .'<br>' .'<img src="https://media.giphy.com/media/fHc87TgyZjXgQumeFf/giphy.gif"/>' .'<br>';
                        }
                    }
                    
                }

            } catch (PDOException $e) {
                return $e->getMessage();
            }
            }
        } 
    return json_encode($_POST);
});

$router->get('/api/random', function() {
    $pdo = new PDO('mysql:host=localhost:8889;dbname=unicorn', 'root', 'root', [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
    if($pdo === false){
        echo "Connection error :" . $pdo->error_log();
    } else {
    $citations = ("SELECT * FROM citations");
        try {
            $sendRequest = $pdo->query($citations);
            $citations = $sendRequest->fetchAll(PDO::FETCH_ASSOC);
            $result = array_rand($citations, 1);
            return json_encode($citations[$result]);
        } catch (PDOException $e) {
        return $e->getMessage();
        }
    } 
});*/