<?php

function getConnexion(){
    return new PDO("mysql:host=localhost; dbname=frankobizness; charset=UTF8", "root", "");
}

function getCars(){

    $pdo = getConnexion();

      $req = $pdo->query(
        "SELECT *  FROM cars ORDER BY id DESC"
    );

    $posts = [];
    while (($row = $req->fetch())) {
        $data = [
            'id' => $row['id']
        ];

        $posts[] = $data;

    }
        return $posts;
    }