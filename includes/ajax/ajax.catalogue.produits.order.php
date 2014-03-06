<?php

	utilisateurs_check();

	$i = 0;
	while(!empty($_POST['order'][$i])){
		$req	= mysql_query("	UPDATE `produits` SET `ordre-produit` = '$i' WHERE `produits`.`id-produit` = '".mysql_real_escape_string($_POST['order'][$i])."';");
		echo mysql_affected_rows();
		$i++;
	}

?>