<?php

	utilisateurs_check();

	//	AJAX + JSON
	//	DONNEES FILTREES
	//	UTF8

	$result = array();

	if(!empty($_POST['idE']) && !empty($_POST['lib'])){
	
		$datas['lib']			= mysql_real_escape_string(strip_tags($_POST['lib']));
		$datas['idE']			= mysql_real_escape_string(strip_tags($_POST['idE']));
	
		$req	=	mysql_query("	INSERT INTO `produits` (`id-produit`, `lib-produit`, `ordre-produit`, `id-ligne-produit`)
							VALUES (NULL , '".$datas['lib']."', '99', '".$datas['idE']."');") or die(mysql_error());
	
		if(mysql_affected_rows()==1){
			$result['result']	= true;
			$result['reponse']	= "Le produit a été créé";
			$result['id']		= mysql_insert_id();
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