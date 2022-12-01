<?php
require_once './src/model/front/home.php';

function homepage()
{
    $posts = getLastCars();
    $datas = getLastOnSale();
    $items = getLastOnRent();

    require './src/templates/front/homepage.php';
}