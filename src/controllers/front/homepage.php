<?php
require_once('./src/model/front/cars.php');

function homepage(){
    $posts = getCars();

    require('./src/templates/homepage.php');
}

