<?php

require_once './src/model/front/car.php';

function car($id)
{
    $data = getCar($id);
    $info = getSeller($id);

    require_once './src/templates/car.php';
}