<?php

	utilisateurs_check();

	$i = 0;
	while(!empty($_POST['partenaire'][$i])){
		$req	= mysql_query("	UPDATE `partenaires` SET `ordre-partenaire` = '$i' WHERE `partenaires`.`id-partenaire` = '".mysql_real_escape_string($_POST['partenaire'][$i])."';");
		echo mysql_affected_rows();
		$i++;
	}

?>