<?php

function getCar($id){
    $pdo = getConnexion();


      $req = $pdo->prepare(
        "SELECT *  FROM cars WHERE id = ?"
    );
    $req->execute(array($id));

    $row = $req->fetch();
    $post = [
        'id' => $row['id']
    ];

    return $post;
    }