<?php

	utilisateurs_check();

	//	AJAX + JSON
	//	DONNEES FILTREES
	//	UTF8

	$result = array();

	if(!empty($_POST['id']) && !empty($_POST['token'])){
	
		$datas['id']			= mysql_real_escape_string(strip_tags($_POST['id']));
		$datas['token']		= mysql_real_escape_string(strip_tags($_POST['token']));
	
		$req 	= 	mysql_query("	DELETE FROM `lignes` 
								WHERE SHA1(CONCAT('".$_SESSION['token']."', `lignes`.`id-ligne`)) = '".$datas['token']."';") or die(mysql_error());
	
		if(mysql_affected_rows()==1){
			$result['result']	= true;
			$result['reponse']	= "La ligne a été créée";
		}
		else{
			$result['result']		= false;
			$result['reponse']		= "Un problème est survenu.";
		}	
			
	}	
	else {
		$result['result']		= false;
		$result['reponse']		= "Un problème est survenu (paramètres)";
	}

	echo json_encode($result);
	
?>