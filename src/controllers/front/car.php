<?php

require_once('./src/model/front/car.php');

function car($id){
    $data = getCar($id);
    //$comments = getComments($identifier);

    require_once('./src/templates/car.php');
}






