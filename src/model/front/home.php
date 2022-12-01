<?php
require_once './src/model/model.php';

function getLastCars()
{
    $pdo = getConnexion();

    $req = $pdo->query('SELECT *  FROM cars
    WHERE status = "Disponible" ORDER BY id DESC LIMIT 3');

    $posts = [];
    while ($row = $req->fetch()) {
        $data = [
            'id' => $row['id'],
            'name' => $row['name'],
            'category' => $row['category'],
            'description' => $row['description'],
            'year' => $row['year'],
            'rate' => $row['rate'],
            'color' => $row['color'],
            'price' => $row['price'],
            'pic1' => $row['pic1'],
            'pic2' => $row['pic2'],
            'pic3' => $row['pic3'],
            'pic4' => $row['pic4'],
        ];

        $posts[] = $data;
    }
    return $posts;
}

function getLastOnSale()
{
    $pdo = getConnexion();

    $req = $pdo->query('SELECT *  FROM cars
    WHERE category = "A vendre" ORDER BY id DESC LIMIT 3');

    $datas = [];
    while ($row = $req->fetch()) {
        $data = [
            'id' => $row['id'],
            'name' => $row['name'],
            'category' => $row['category'],
            'description' => $row['description'],
            'year' => $row['year'],
            'rate' => $row['rate'],
            'color' => $row['color'],
            'price' => $row['price'],
            'pic1' => $row['pic1'],
            'pic2' => $row['pic2'],
            'pic3' => $row['pic3'],
            'pic4' => $row['pic4'],
        ];

        $datas[] = $data;
    }
    return $datas;
}

function getLastOnRent()
{
    $pdo = getConnexion();

    $req = $pdo->query('SELECT *  FROM cars
    WHERE category = "A louer" AND status ="Disponible" ORDER BY id DESC LIMIT 3');

    $items = [];
    while ($row = $req->fetch()) {
        $data = [
            'id' => $row['id'],
            'name' => $row['name'],
            'category' => $row['category'],
            'description' => $row['description'],
            'year' => $row['year'],
            'rate' => $row['rate'],
            'color' => $row['color'],
            'price' => $row['price'],
            'pic1' => $row['pic1'],
            'pic2' => $row['pic2'],
            'pic3' => $row['pic3'],
            'pic4' => $row['pic4'],
        ];

        $items[] = $data;
    }
    return $items;
}