<?php

	utilisateurs_check();

	$i = 0;
	while(!empty($_POST['order'][$i])){
		$req	= mysql_query("	UPDATE `lignes` SET `ordre-ligne` = '$i' WHERE `lignes`.`id-ligne` = '".mysql_real_escape_string($_POST['order'][$i])."';");
		echo mysql_affected_rows();
		$i++;
	}

?>