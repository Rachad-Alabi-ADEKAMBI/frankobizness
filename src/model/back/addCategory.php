<?php
// src/model/comment.php
/*
function getConnexion(){
    return new PDO("mysql:host=localhost; dbname=frankobizness; charset=UTF8", "root", "");
}
*/

function createCategory(string $post, string $name)
{
	$pdo = getConnexion();
	$sql = $pdo->prepare(
    	'INSERT INTO categories(category_name) VALUES(?)'
	);
	$affectedLines = $sql->execute([$post, $name]);

	return ($affectedLines > 0);
}

