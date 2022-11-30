<?php

function getCar($id)
{
    $pdo = getConnexion();

    $req = $pdo->prepare('SELECT *  FROM cars WHERE id = ?');
    $req->execute([$id]);

    $row = $req->fetch();
    $post = [
        'id' => $row['id'],
        'seller_id' => $row['seller_id'],
        'year' => $row['year'],
        'rate' => $row['rate'],
        'price' => $row['price'],
        'name' => $row['name'],
        'color' => $row['color'],
        'brand' => $row['brand_name'],
        'pic1' => $row['pic1'],
        'pic2' => $row['pic2'],
        'pic3' => $row['pic3'],
        'pic4' => $row['pic4'],
        'description' => $row['description'],
    ];

    return $post;
}

function getSeller($id)
{
    $pdo = getConnexion();

    $req = $pdo->prepare('SELECT *  FROM cars
     WHERE id = ?');
    $req->execute([$id]);
    $data = $req->fetch();
    $seller_id = $data['seller_id'];
    $req->closeCursor();

    $req = $pdo->prepare('SELECT *  FROM users WHERE id = ?');
    $req->execute([$seller_id]);

    $row = $req->fetch();
    $info = [
        'first_name' => $row['first_name'],
        'last_name' => $row['last_name'],
        'phone_code' => $row['phone_code'],
        'phone_number' => $row['phone_number'],
        'email' => $row['email'],
        'verification' => $row['verification'],
        'pic' => $row['pic'],
    ];

    return $info;
}