<?php

	utilisateurs_check();


	$result = array();

	if(!empty($_POST['id-page'])){
	

		$datas['id-page-meta']		= mysql_real_escape_string(strip_tags($_POST['id-page']));

		$datas['titre-meta'] 		= mysql_real_escape_string(strip_tags(@$_POST['titre-meta']));

		$datas['description-meta'] 	= mysql_real_escape_string(strip_tags(@$_POST['description-meta']));

		$datas['keywords-meta'] 	= mysql_real_escape_string(strip_tags(@$_POST['keywords-meta']));


		$req		= mysql_query("	DELETE FROM `isisphin`.`metas` WHERE `metas`.`id-page-meta` = '".$datas['id-page-meta']."'") or die(mysql_error());
									
		$req		= mysql_query("	INSERT INTO `isisphin`.`metas` (`id-page-meta`, `titre-meta`, `description-meta`, `keywords-meta`)
									VALUES ('".$datas['id-page-meta']."', '".$datas['titre-meta']."', '".$datas['description-meta']."', '".$datas['keywords-meta']."');") or die(mysql_error());

		$result['result']	= true;
		$result['reponse']	= "La page a été créée.";
		
	}else{
		$result['result']		= false;
		$result['reponse']		= "Un problème est survenu (#001).";
	}

	echo json_encode($result);
	
?>