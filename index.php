<?php
session_start();

require_once 'src/controllers/front/homepage.php';
require_once 'src/controllers/front/car.php';
require_once 'src/controllers/back/addCategory.php';
require_once 'src/controllers/front/loginPage.php';
require_once 'src/controllers/front/cars.php';
require_once 'src/controllers/front/register.php';
require_once 'src/controllers/front/forgotPassword.php';

require_once 'src/controllers/back/dashboard.php';

if (isset($_GET['action']) && $_GET['action'] !== '') {
    if ($_GET['action'] === 'car') {
        if (isset($_GET['id']) && $_GET['id'] > 0) {
            $id = $_GET['id'];
            car($id);
        } else {
            echo 'Erreur : aucun identifiant de billet envoyé';

            die();
        }
    } elseif ($_GET['action'] === 'addCategory') {
        /*if (isset($_GET['id']) && $_GET['id'] > 0) {
        	$name = $_GET['name'];

        	addCategory($name, $_POST);
    	} else {
        	echo 'Erreur : aucun identifiant de billet envoyé';

        	die;
    	}
		*/
        addCategory();
    } elseif ($_GET['action'] === 'login') {
        login();
    } elseif ($_GET['action'] === 'register') {
        register();
    } elseif ($_GET['action'] === 'dashboard') {
        dashboard();
    } elseif ($_GET['action'] === 'cars') {
        cars();
    } elseif ($_GET['action'] === 'forgotPassword') {
        forgotPassword();
    } elseif ($_GET['action'] === 'home') {
        homepage();
    } else {
        echo "Erreur 404 : la page que vous recherchez n'existe pas.";
    }
} else {
    homepage();
}