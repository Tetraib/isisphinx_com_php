<?php

	utilisateurs_check();

	//	AJAX + JSON
	//	DONNEES FILTREES
	//	UTF8

	$result = array();

	if(!empty($_POST['id'])){
	
		$datas['id']			= sha1(time()*rand(0,99999999999));
	
		$req = mysql_query("	INSERT INTO `partenaires` (`id-partenaire`, `lib-partenaire`, `texte-partenaire`, `image-partenaire`, `ordre-partenaire`)
							VALUES ('".$datas['id']."', '', '', '', '99');") or die(mysql_error());

		if(mysql_affected_rows()==1){
			$result['result']	= true;
			$result['reponse']	= "Le partenaire a été ajouté";
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