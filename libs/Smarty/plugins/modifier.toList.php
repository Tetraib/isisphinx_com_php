<?php
/**
 * Smarty plugin
 * @package Smarty
 * @subpackage plugins
 */


/**
 * Smarty string to url
 *
 * Type:     modifier<br>
 * Name:     s2u<br>
 * @author   developpez.com>
 * @param string
 * @return string
 */
 
function smarty_modifier_toList($text){

	$text = trim($text);
	
	if(!empty($text)){
		
		$text = explode("\n",$text);

		foreach($text as $k => $v){
			$text[$k] = trim($text[$k]);
			if(strlen($v) < 3)	unset($text[$k]);
		}
		
		$text = implode("</li><li>",$text);	
		$text = "<li>".$text."</li>";
	
	}
	else 		$text = "";



	return $text;

}	

?>
