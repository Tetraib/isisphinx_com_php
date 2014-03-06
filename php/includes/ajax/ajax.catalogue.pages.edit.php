<?php

	utilisateurs_check();

	//	AJAX + JSON
	//	DONNEES FILTREES
	//	UTF8

	include("libs/htmlpurifier/HTMLPurifier.includes.php");
	include("includes/htmlpurifier.config.php");


	$result = array();

	if(!empty($_POST['id-page'])){
	

		$purifier1 				= new HTMLPurifier($config_clear);
		$datas['id-page'] 			= mysql_real_escape_string($purifier1->purify($_POST['id-page']));

		$purifier2 				= new HTMLPurifier($config_clear);
		$datas['titre-page'] 		= mysql_real_escape_string($purifier2->purify(@$_POST['titre-page']));

		$purifier3 				= new HTMLPurifier($config_clear);
		$datas['soustitre-page'] 	= mysql_real_escape_string($purifier3->purify(@$_POST['soustitre-page']));


		$purifier4 				= new HTMLPurifier($config_pages_texte);
		$datas['texte-page'] 		= mysql_real_escape_string($purifier4->purify(@$_POST['texte-page']));

		$purifier5 				= new HTMLPurifier($config_clear);
		$datas['descriptif-page'] 	= mysql_real_escape_string($purifier5->purify(@$_POST['descriptif-page']));

		$purifier6 				= new HTMLPurifier($config_pages_paragraphes);
		$datas['paragraphes-page'] 	= mysql_real_escape_string($purifier6->purify(@$_POST['paragraphes-page']));

		$purifier7 				= new HTMLPurifier($config_pages_images);
		$datas['images-page'] 	= mysql_real_escape_string($purifier7->purify(@$_POST['images-page']));

		list($type, $id) = page_getType($datas['id-page']);
				
		$req			= mysql_query("	SELECT 	*
									FROM 	`pages` 
									WHERE 	`id-page` = '".$datas['id-page']."' 
									LIMIT 	1;") or die(mysql_error());
		
		if(mysql_affected_rows() == 1){
		
					
			$req		= mysql_query("	UPDATE 	`pages` 
									SET 		`titre-page` 		= '".$datas['titre-page']."',
											`soustitre-page` 	= '".$datas['soustitre-page']."',
											`texte-page` 		= '".$datas['texte-page']."',
											`descriptif-page` 	= '".$datas['descriptif-page']."',
											`paragraphes-page` 	= '".$datas['paragraphes-page']."',
											`images-page` 		= '".$datas['images-page']."' 
									WHERE 	`pages`.`id-page` 	= '".$datas['id-page']."';") or die(mysql_error());
			
			if(mysql_affected_rows() == 1) {
				if($type == "ligne") lignes_updateLib($id, $datas['titre-page']);
				if($type == "produit") produits_updateLib($id, $datas['titre-page']);
			
				$result['result']	= true;
				$result['reponse']	= "La page a été créée.";
			}else{						
				$result['result']		= false;
				$result['reponse']		= "Aucun changement n'a été apporté à la page.";
			}

		}else{
			
			$req		= mysql_query("	INSERT INTO `pages` (`id-page`, `titre-page`, `soustitre-page`, `texte-page`, `descriptif-page`, `paragraphes-page`, `images-page`)
									VALUES ('".$datas['id-page']."', '".$datas['titre-page']."', '".$datas['soustitre-page']."', '".$datas['texte-page']."', '".$datas['descriptif-page']." ', '".$datas['paragraphes-page']."', '".$datas['images-page']."')") or die(mysql_error());
				
			if(mysql_affected_rows() == 1) {
				if($type == "ligne") lignes_updateLib($id, $datas['titre-page']);
				if($type == "produit") produits_updateLib($id, $datas['titre-page']);
			
				$result['result']	= true;
				$result['reponse']	= "La page a été modifiée.";
			}else{						
				$result['result']		= false;
				$result['reponse']		= "Aucun changement n'a été apporté à la page.";
			}
		
		}
		
	}else{
		$result['result']		= false;
		$result['reponse']		= "Un problème est survenu (#001).";
	}

	echo json_encode($result);
	
?>