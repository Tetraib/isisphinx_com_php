<?php

	utilisateurs_check();

	//	AJAX + JSON
	//	DONNEES FILTREES
	//	UTF8

	$result = array();

	if(!empty($_POST['id']) && !empty($_POST['token'])){
	
		$datas['id']			= mysql_real_escape_string(strip_tags($_POST['id']));
		$datas['lib']			= mysql_real_escape_string(strip_tags(htmlspecialchars(@$_POST['lib'],ENT_QUOTES,"UTF-8")));
		$datas['token']		= mysql_real_escape_string(strip_tags($_POST['token']));
	
		$req 	= 	mysql_query("	UPDATE 	`lignes` 
								SET 		`lib-ligne` = '".$datas['lib']."' 
								WHERE 	`lignes`.`id-ligne` = '".$datas['id']."'
								AND		SHA1(CONCAT('".$_SESSION['token']."', `lignes`.`id-ligne`)) = '".$datas['token']."';") or die(mysql_error());
	
		if(mysql_affected_rows()==1){
			$result['result']	= true;
			$result['reponse']	= "La ligne a été créée";
		}
		else{
			$result['result']		= false;
			$result['reponse']		= "Aucun changement n'a été apporté.";
		}	
			
	}	
	else {
		$result['result']		= false;
		$result['reponse']		= "Un problème est survenu (paramètres)";
	}

	echo json_encode($result);
	
?>