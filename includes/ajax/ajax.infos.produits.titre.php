<?php

	utilisateurs_check();

	//	AJAX + JSON
	//	DONNEES FILTREES
	//	UTF8

	$result = array();

	if(!empty($_POST['titre'])){
		$result['result']		= true;
		$result['reponse']		= s2u($_POST['titre']);
	
	}

	echo json_encode($result);
	
?>