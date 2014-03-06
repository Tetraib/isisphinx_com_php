<?php

// 	if($_SERVER["HTTP_HOST"] == "www.isisphinx.com"){

// 		$sql =	mysql_connect("localhost","isisphin","Isis125phinx");
// 				mysql_select_db("isisphin", $sql);
// 				mysql_query("SET NAMES 'utf8'", $sql);
	
// 	}
	
// 	else {

// 		$sql =	mysql_connect("mysql51-27.pro","serenadeasy","1z1izi");
// 				mysql_select_db("serenadeasy", $sql);
// 				mysql_query("SET NAMES 'utf8'", $sql);
	
// 	}
    $sql =	mysql_connect("us-cdbr-east-05.cleardb.net","b6f9e998211c4d","b20ced39");
			mysql_select_db("heroku_9115c2c754081c8", $sql);
			mysql_query("SET NAMES 'utf8'", $sql);
			
?>