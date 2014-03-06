<?php

	utilisateurs_check();

	//	AJAX + JSON
	//	DONNEES FILTREES
	//	UTF8

	$result = array();

	if(!empty($_POST['idE'])){
	
		$datas['id']			= sha1(time()*rand(0,99999999999));
		$datas['lib']			= mysql_real_escape_string(strip_tags(@$_POST['lib']));
		$datas['idE']			= mysql_real_escape_string(strip_tags($_POST['idE']));
	
		$req = mysql_query("	INSERT INTO `lignes` (`id-ligne`, `lib-ligne`, `ordre-ligne`, `id-gamme-ligne`)
							VALUES ('".$datas['id']."', '".$datas['lib']."', '99', '".$datas['idE']."');") or die(mysql_error());
	
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