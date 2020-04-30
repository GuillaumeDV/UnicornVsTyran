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

$router->post('/api/reponse', function() {
    //recuperer les entrées de l'utilisateur (string)
    return json_encode($_POST);
    if(isset($_POST['reponse'])) {
    $pdo = new PDO('mysql:host=localhost:8889;dbname=unicorn', 'root', 'root', [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
        if($pdo === false){
            echo "Connection error :" . $pdo->error_log();
        } else {
            $query = $pdo->query('SELECT * FROM dictateurs');
            $dictateurs = $query->fetchAll(PDO::FETCH_ASSOC);
            }   
            try {
                if($_SERVER['REQUEST_METHOD']=="POST"){
                    if ($_POST["cit_id"]== $_POST["citat"])
                    //prepare request
                    $getIdDictateurs = $request->prepare("SELECT * FROM dictateurs WHERE id=:id");
                    $request->execute([
                        'id'=>$_POST['id']
                    ])}
                return json_encode($_POST['reponse']);
                // suivant la reponse, je fais ceci ce la
            //return reponse
            } catch (PDOException $e) {
                return $e->getMessage();
            }
    }   
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
});