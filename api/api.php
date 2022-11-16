<?php
 session_start();
//local
$pdo = new PDO('mysql:dbname=sezam;host=localhost', 'root', '');
function getConnexion(){
    return new PDO("mysql:host=localhost; dbname=frankobizness; charset=UTF8", "root", "");
}


//production
/*
function getConnexion(){
    return new PDO("mysql:host=localhost; dbname=adra7128_sezam; charset=UTF8", "adra7128_adra7128", "g@RT@iOQ0Amn");
}

$pdo = new PDO('mysql:dbname=adra7128_sezam;host=localhost', 'adra7128_adra7128', 'g@RT@iOQ0Amn');
*/
$error = array('error' => false);
$action = '';

if (isset($_GET['action'])) {
    $action = $_GET['action'];
}




function str_random($length){
        $alphabet="0123456789qwertyuiopasdfghjklzxcvbnmQWERTYUIOPASDFGHJKLZXCVBNM";

        return substr(str_shuffle(str_repeat($alphabet, $length)), 0, $length);
    }

    // obtenir le titre de la page
    function PageName() {
        return substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1);
      }

      $current_page = PageName();

    //controle des input
    function verifyInput($inputContent){
        $inputContent = htmlspecialchars(
            $inputContent
        );

        $inputContent = trim($inputContent);

        return $inputContent;
    }


    function getReceipt($receipt_id){
        $pdo = getConnexion();
        $req = $pdo->prepare("SELECT *  FROM receipts WHERE id = ?");
        $req->execute(array($receipt_id));
        $datas = $req->fetchAll(PDO::FETCH_ASSOC);
        $req->closeCursor();
        sendJSON($datas);
        return $datas;
    }

    function getCars(){
        $pdo = getConnexion();
        $req = $pdo->prepare("SELECT *  FROM cars ORDER BY id DESC");
        $req->execute(array());
        $datas = $req->fetchAll(PDO::FETCH_ASSOC);
        $req->closeCursor();
        sendJSON($datas);
        return $datas;
    }

    function getLastAdded(){
    $pdo = getConnexion();
    $req = $pdo->prepare("SELECT *  FROM cars ORDER BY id DESC
    LIMIT 3");
    $req->execute();
    $datas = $req->fetchAll(PDO::FETCH_ASSOC);
    $req->closeCursor();
    sendJSON($datas);
    return $datas;
}

function getLastSaleAdded(){
    $pdo = getConnexion();
    $req = $pdo->prepare("SELECT *  FROM cars
    WHERE category = ? ORDER BY id DESC
    LIMIT 3");
    $req->execute(array('A vendre'));
    $datas = $req->fetchAll(PDO::FETCH_ASSOC);
    $req->closeCursor();
    sendJSON($datas);
    return $datas;
}

function getLastRentAdded(){
    $pdo = getConnexion();
    $req = $pdo->prepare("SELECT *  FROM cars
    WHERE category = ? ORDER BY id DESC
    LIMIT 3");
    $req->execute(array('A louer'));
    $datas = $req->fetchAll(PDO::FETCH_ASSOC);
    $req->closeCursor();
    sendJSON($datas);
    return $datas;
}

function getLastSold(){
    $pdo = getConnexion();
    $req = $pdo->prepare("SELECT *  FROM cars
    WHERE category = 'A vendre' AND status = 'Non disponible'
    ORDER BY id DESC LIMIT 3");
    $req->execute();
    $datas = $req->fetchAll(PDO::FETCH_ASSOC);
    $req->closeCursor();
    sendJSON($datas);
    return $datas;
}





function newCar(){
    $pdo = getConnexion();
    if (!empty ($_POST)){
        $errors = array ();
            if (empty ($_POST['name'])) {
                $errors['name'] = 'Nom non valide';
            }

            if (empty ($_POST['price'])) {
                $errors['price'] = 'Veuillez definir le prix';
            }

            if (empty ($_POST['color'])) {
                $errors['color'] = 'Veuillez definir la mesure';
            }

            if (empty ($_POST['date'])) {
                $errors['date'] = "Veuillez definir la date";
            }

            if (empty ($_POST['brand_name'])) {
                $errors['brand_name'] = "Veuillez definir la marque";
            }

            if (empty ($_POST['category'])) {
                $errors['category'] = "Veuillez definir l'action";
            }

            if (empty ($_POST['year'])) {
                $errors['year'] = "Veuillez definir l'annee";
            }


            $_SESSION['ingredient'] = [
                "name" => verifyInput($_POST['name']),
                ];


            if(!empty($errors)){ ?>
                      <ul>
            <?php foreach ($errors as $error): ?>
            <li style="color: red"><?= $error; ?></li>
            <?php endforeach;?>
        </ul>
            <?php }


            if(empty($errors)){
                          $name = verifyInput($_POST['name']);
                          $price = verifyInput($_POST['price']);
                          $description = verifyInput($_POST['description']);
                          $year = verifyInput($_POST['description']);
                          $category = verifyInput($_POST['category']);
                          $color = verifyInput($_POST['color']);
                          $brand_name = verifyInput($_POST['brand_name']);
                          $status = 'onsale';

                           //On insere dans la table cars
                    $sql = $pdo->prepare('INSERT INTO cars SET  date_of_insertion = NOW(),
                         name = ?, price = ?, description = ?, year = ?, category = ?, color = ?,
                         brand_name = ?, status = ?');

                    $sql->execute(array($name, $price, $description, $year, $category,
                $color, $brand_name, $status ));
               ?>
                    <script>
                        alert('Nouveau vehicule ajoute avec succes');
                     //   window.location.replace('../inventory.php');
                    </script>
               <?php
    }
    }
}

function searchCar(){
    $pdo = getConnexion();
    if (!empty ($_POST)){
            if(!empty ($_POST['category'])) {
                $category = verifyInput($_POST['category']);
            }

            if(!empty ($_POST['min_price'])) {
                $min_price = verifyInput($_POST['min_price']);
            }

            if(!empty ($_POST['max_price'])) {
                $max_price['max_price'] = verifyInput($_POST['max_price']);
            }

                        $req = $pdo->prepare('SELECT * FROM cars WHERE category = ? AND price < ? AND price > ?');
                        $req->execute(array($category, $min_price, $max_price));
                        $datas = $req->fetchAll(PDO::FETCH_ASSOC);
                        $req->closeCursor();
                        sendJSON($datas);
                        return $datas;
    }
}

function login(){
    if(!empty($_POST)){
        $pdo = getConnexion();

        $errors = array ();

        if(isset($_POST['username'], $_POST['pass'])
            &&!empty($_POST['username'] && !empty($_POST['pass']))
            ){

            $sql = "SELECT * FROM `users` WHERE `username` = ?";

            $query = $pdo -> prepare($sql);

            $query->execute([verifyInput($_POST['username'])]);

            $user = $query->fetch();

            if(!$user){
                $errors['username'] = 'Utilisateur/mot de passe incorrect';
            }

            if(!password_verify($_POST['pass'], $user['pass'])){
                $errors['pass'] = 'Utilisateur/mot de passe incorrect';
            }

            if(!empty($errors)){?>

               <script>
                alert('Veuillez verifier vos identifiants');
               </script>
            <?php }

            if (empty($errors)){

                session_start();

                $_SESSION['user'] = [
                    "username" =>$user['username'],
                    "role" => $user['admin']
                ];

                header("Location: ../dashboard.php");
            }

            }
    }
}


if($action == 'login'){
    login();
}

    function sendJSON($infos)
    {
        header("Access-Control-Allow-Origin: *");
        header("Content-Type: application/json");
        echo json_encode($infos, JSON_UNESCAPED_UNICODE);
    }