<?php

	utilisateurs_check();

	//	AJAX + JSON
	//	DONNEES FILTREES
	//	UTF8

	include("libs/htmlpurifier/HTMLPurifier.includes.php");
	include("includes/htmlpurifier.config.php");


	$result = array();

	if(!empty($_POST['id-partenaire'])){
	

		$purifier1 					= new HTMLPurifier($config_clear);
		$datas['id-partenaire'] 			= mysql_real_escape_string($purifier1->purify($_POST['id-partenaire']));

		$purifier4 					= new HTMLPurifier($config_pages_texte);
		$datas['texte-partenaire'] 		= mysql_real_escape_string($purifier4->purify(@$_POST['texte-partenaire']));

		$purifier6 					= new HTMLPurifier($config_pages_paragraphes);
		$datas['image-partenaire'] 		= mysql_real_escape_string($purifier6->purify(@$_POST['image-partenaire']));

					
		$req		= mysql_query("	UPDATE 	`partenaires` 
								SET 		`texte-partenaire` 				= '".$datas['texte-partenaire']."',
										`image-partenaire` 				= '".$datas['image-partenaire']."'
								WHERE 	`partenaires`.`id-partenaire` 	= '".$datas['id-partenaire']."';") or die(mysql_error());
			

		if(mysql_affected_rows() == 1) {
				$result['result']	= true;
				$result['reponse']	= "La page a été modifiée.";
		}else{						
				$result['result']		= false;
				$result['reponse']		= "Aucun changement n'a été apporté à la page.";

		}
		
	}else{
		$result['result']		= false;
		$result['reponse']		= "Un problème est survenu (#001).";
	}

	echo json_encode($result);
	
?>