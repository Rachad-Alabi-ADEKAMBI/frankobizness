<?php

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
                window.location.replace('../login.php')
               </script>
            <?php }

            if (empty($errors)){

                session_start();

                $_SESSION['user'] = [
                    "username" =>$user['username'],
                    "role" => $user['admin']
                ];

                header("Location: .index.php?action=dashboard");
            }

            }
    }
    }