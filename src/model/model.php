<?php

function getConnexion()
{
    return new PDO(
        'mysql:host=localhost; dbname=frankobizness; charset=UTF8',
        'root',
        ''
    );
}