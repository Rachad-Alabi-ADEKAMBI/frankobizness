<?php
// src/controllers/add_comment.php

require_once './src/model/back/dashboard.php';

function dashboard()
{
    /*	$name = null;
	if (!empty($input['name'])) {
    	$name = $input['name'];
	} else {
    	die('Les données du formulaire sont invalides.');
	}

	$success = createCategory($post, $name);
	if (!$success) {
    	die('Impossible d\'ajouter le commentaire !');
	} else {
    	//header('Location: index.php?action=post&id=' . $post);
		die('ok fait.');
	}
	*/

    require_once './src/templates/back/dashboard.php';
}