<?php
require_once('./src/model/front/home.php');

function homepage(){
    $posts = getLastCars();
    $datas = getLastOnSale();

    require('./src/templates/homepage.php');
}

