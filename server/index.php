
<?php 
header("Access-Control-Allow-Origin: *");
require 'Router.php';
include_once 'Request.php';
include_once 'Router.php';
require 'db.php';

$router = new Router(new Request);

$router->get('/api/index', function() {
    $pdo = new PDO(DSN, USER, PASS, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
    if($pdo === false){
        echo "Connection error :" . $pdo->error_log();
    } else {
        $getAllDictateurs = ("SELECT * FROM dictateurs");
        //SELECT name, citation, lien FROM dictateurs LEFT OUTER JOIN citations ON dictateurs.id=cit_id RIGHT OUTER JOIN gifs ON dictateurs.id=lien_id
        try {
            $sendRequest = $pdo->query($getAllDictateurs);
            $dictateurs = $sendRequest->fetchAll(PDO::FETCH_ASSOC);
            var_dump($dictateurs);die;
            return json_encode($dictateurs);

        } catch (PDOException $e) {
        return $e->getMessage();
        }
    } 
});

$router->post('/api/reponse', function() {
    if(isset($_POST)){
        /*$citation_id = $_POST['cit_id']; // citations
        $dictateur_id = $_POST['dictateur_id'];*/ //citations
        $citation_id = $_POST['cit_id']; // citations
        $gif_id = $_POST['lien_id'];  //gifs
        
        $pdo = new PDO(DSN, USER, PASS, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
        if($pdo === false){
            echo "Connection error :" . $pdo->error_log();
        } else {
            try {
                $sendRequest = $pdo->query("SELECT * FROM citations");
                //$sendRequest = $pdo->query("SELECT * FROM dictateurs LEFT OUTER JOIN citations ON dictateurs.id=citations.cit_id");
                $citation = $sendRequest->fetchAll(PDO::FETCH_ASSOC);
                //$dictateur = $sendRequest->fetchAll(PDO::FETCH_ASSOC);
                /*foreach($citations as $citation){
                    if($citation['id'] == $citation_id){ */ //on ne peut pas prendre l'id de la table citation
                        foreach($dictateurs as dictateur) {
                            if($dictateur['id'] == $gif_id) {
                            if($dictateur['id'] == $citation_id
                        /*if($citation['dictateur_id'] == $dictateur_id){*/
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
        // Je recupere toutes mes citations . // ['1' => content(LoremIpsum), dictateur_id(1)]
        // Je boucle sur mes citations
        // Si citations_id = à $_POST[citation_id] alors // 1 => POST_Citation = 1
        // Je récupère son dictateur_id => 
        // Si dictateur_id est egal à $_POST['dictateur_id']
        // ALORS c'est GAGNE
        // SINON GAME OVER
    }
    return json_encode($_POST);
});

$router->get('/api/random', function() {
    $pdo = new PDO(DSN, USER, PASS, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
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
