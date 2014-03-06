<?php


	/* ---------------------------------------------------------------------------------------------------- */	
	
	function utilisateurs_check($level=10){
		
		$delay	= 60*24;
		$level	= abs($level);
	
		if(@$_SESSION['utilisateur']['level-utilisateur'] > $level){
		
			
			if(@$_SESSION['utilisateur']['time-utilisateur']+60*$delay > time()){
				$_SESSION['utilisateur']['time-utilisateur'] = time();
				return true;
			}
			else {
				$_SESSION['connexion-erreur']				= "Vous avez été automatiquement déconnecté après $delay minutes d'inactivité";
				utilisateurs_deconnexion();
				die();
			}
				
		}else{
			utilisateurs_deconnexion();
			die();
		}	
		
	}
	
	function utilisateurs_connexion($email=NULL, $mdp=NULL){
	
		
		$array 	= array();
		
		$email	= mysql_real_escape_string(strip_tags($email));
		$mdp		= mysql_real_escape_string(strip_tags($mdp));
		
		$req		= mysql_query("	SELECT 	*
								FROM		`utilisateurs`
								WHERE	`email-utilisateur` = '$email'
								AND		`mdp-utilisateur` 	= '$mdp'
								LIMIT 	1;") or die(mysql_error());
		
		
		if(mysql_affected_rows()==1)	{
			$array 								= mysql_fetch_array($req);
			$_SESSION['utilisateur'] 				= $array;
			$_SESSION['utilisateur']['time-utilisateur'] = time();
		}
		
		else{
			$_SESSION['connexion-erreur'] = "Votre login ou votre mot de passe est invalide.";
			header("Location: /login.html");
			die();	
		}
	}
	
	function utilisateurs_deconnexion(){

		unset($_SESSION['utilisateur']);
		header("Location: /login.html");
		die();	

	}


	/* ---------------------------------------------------------------------------------------------------- */	
	

	function gammes_getList(){
	
		$req = mysql_query("	SELECT 	*
							FROM 	`gammes`
							ORDER BY 	`ordre-gamme`") or custom_die(mysql_error());
														
		$i		= 0;
		$array 	= array();
		
		while($temp = mysql_fetch_array($req)){
			
			$temp['token']	= sha1($_SESSION['token'].$temp['id-gamme']);
			$array['id'][$temp['id-gamme']] 	= $temp;
			$array['ordre'][$i]				= $temp;
			$i++;

		}
	
		return $array;
	}
	
	

	function lignes_getList(){
	
		$req = mysql_query("	SELECT 	*
							FROM 	`lignes`
							ORDER BY 	`ordre-ligne`") or custom_die(mysql_error());
														
		$i		= 0;
		$array 	= array();
		
		while($temp = mysql_fetch_array($req)){
			
			$temp['token']	= sha1($_SESSION['token'].$temp['id-ligne']);
			$array['id'][$temp['id-ligne']] 	= $temp;
			$array['ordre'][$i]				= $temp;
			$i++;

		}
	
		return $array;

	}

	function lignes_updateLib($id, $lib){
	
		$req = @mysql_query("UPDATE `lignes` SET `lib-ligne` = '$lib' WHERE `lignes`.`id-ligne` = $id;");
		return true;	
	
	}




	function produits_getList(){
	
		$req = mysql_query("	SELECT 	*
							FROM 	`produits`
							ORDER BY 	`ordre-produit`") or custom_die(mysql_error());
														
		$i		= 0;
		$array 	= array();
		
		while($temp = mysql_fetch_array($req)){
			
			$temp['token']	= sha1($_SESSION['token'].$temp['id-produit']);
			$array['id'][$temp['id-produit']] 	= $temp;
			$array['ordre'][$i]				= $temp;
			$i++;

		}
	
		return $array;

	}


	function produits_updateLib($id, $lib){
	
		$req = @mysql_query("UPDATE `produits` SET `lib-produit` = '$lib' WHERE `produits`.`id-produit` = $id;");
		return true;	
	
	}


	function partenaires_getList(){
	
		$req = mysql_query("	SELECT 	*
							FROM 	`partenaires`
							ORDER BY 	`ordre-partenaire`") or custom_die(mysql_error());
														
		$i		= 0;
		$array 	= array();
		
		while($temp = mysql_fetch_array($req)){
			
			$temp['token']	= sha1($_SESSION['token'].$temp['id-partenaire']);			
			$array['id'][$temp['id-partenaire']] 	= $temp;
			$array['ordre'][$i]				= $temp;
			$i++;

		}
	
		return $array;
	}
	



	function partenaires_getInfos($id=NULL){

		if($id == NULL)	custom_404_admin("Cette page n'existe pas. (ID)");

		$id	= mysql_real_escape_string($id);

		$req = mysql_query("	SELECT 	*
							FROM 	`partenaires`
							WHERE  	`id-partenaire` = '".$id."'
							LIMIT 1") or custom_die(mysql_error());
														
		if(mysql_affected_rows() !== 1) custom_404_admin("Cette page n'existe pas. (ID)");
		
		$i		= 0;
		$array 	= array();
		
		
		$temp = mysql_fetch_array($req);
			
		$temp['token']	= sha1($_SESSION['token'].$temp['id-partenaire']);
		if(is_file("medias/uploads/partenaires/".$temp['image-partenaire']))		$temp['image']	= true;
		else															$temp['image']	= false;	
				
		return $temp;
	}
	



	function pages_getInfos($index=NULL){
		
		$temp = array();

		if($index == NULL)	custom_404_admin("Cette page n'existe pas. (ID)");

		list($type, $id) = page_getType($index);
				
		$req		= mysql_query("	SELECT 	*
								FROM 	`pages`
								WHERE	`id-page` = '$type-$id'
								LIMIT	1") or die(mysql_error());
								
		if(mysql_affected_rows() > 0){
	
			$temp = mysql_fetch_array($req);
						
				$req2		= mysql_query("	SELECT 	*
											FROM 	`metas`
											WHERE	`id-page-meta` = '".$temp['id-page']."'
											LIMIT	1") or die(mysql_error());
			
				if(mysql_affected_rows() > 0){
						
					$temp2 = mysql_fetch_array($req2);
					
					$temp['titre-meta'] 		= $temp2['titre-meta'];
					$temp['description-meta'] 	= $temp2['description-meta'];
					$temp['keywords-meta'] 		= $temp2['keywords-meta'];
								
				}
				
				else{

					$temp['titre-meta'] 		= "";
					$temp['description-meta'] 	= "";
					$temp['keywords-meta'] 		= "";
									
				}
			
			return $temp;
		
		}
		
		else {
					
			$temp['id-page'] 			= $index;
			$temp['titre-page'] 		= "";
			$temp['soustitre-page'] 		= "";
			$temp['texte-page'] 		= "";
			$temp['descriptif-page'] 	= "";
			$temp['paragraphes-page'] 	= "";
			$temp['images-page'] 		= "";

			$temp['titre-meta'] 		= "";
			$temp['description-meta'] 	= "";
			$temp['keywords-meta'] 		= "";
	
			switch($type){
			
				case "ligne" :
				
					$catalogue['lignes'] 	= lignes_getList();
					$temp['titre-page'] 	= $catalogue['lignes']['id'][$id]['lib-ligne'];
		
					break;

				case "produit" :
				
					$catalogue['produits'] 	= produits_getList();
					$temp['titre-page'] = $catalogue['produits']['id'][$id]['lib-produit'];
		
					break;
			}	
		
		
			
			return $temp;
		}

	}




	function pages_getSlides($type=NULL, $array=NULL){
	
		$slides	= array();
		$base 	= "medias/uploads/slides/";
	
		switch($type){
	
			case "gammes" :
				
				$z = 0;
				$slides[$z]['image']	= "gamme-".$array."/slide-".$array.".jpg";
				$slides[$z]['url']		= "/gammes/".$array.".html";
				$slides[$z]['lib']		= "";
				$z++;
				
				for($i=0; $i<65; $i++){
				
					$fichier 	= "gamme-".$array."/slide-".$array."-".$i.".jpg";
					
					if(file_exists($base.$fichier)){
						
						$slides[$z]['image']	= "gamme-".$array."/slide-".$array.".jpg";
						$slides[$z]['url']		= "/gammes/".$array.".html";
						$slides[$z]['lib']		= "";
						$z++;
					
					}
				
				}
				
			
				break;

			case "lignes" :


				$z = 0;

				$fichier	= "lignes-".$array['id-gamme-ligne']."/slide-".s2u($array['lib-ligne']).".jpg";


				if(file_exists($base.$fichier)){
					$slides[$z]['image']	= $fichier;
					$slides[$z]['url']	= "/lignes/".$array['id-produit']."-".s2u($array['lib-produit']).".html";
					$slides[$z]['lib']	= "";
					$z++;
				}
				

				for($i=0; $i<65; $i++){
					$fichier	= "gamme-".$array['id-gamme-ligne']."/slide-".s2u($array['lib-ligne'])."-".$i.".jpg";
					if(file_exists($base.$fichier)){
						$slides[$z]['image']	= $fichier;
						$slides[$z]['url']	= "/lignes/".$array['id-produit']."-".s2u($array['lib-produit']).".html";
						$slides[$z]['lib']	= "";
						$z++;
					}
				}
				
				if(sizeof($slides) == 0)	{ $slides = pages_getSlides("gammes", $array['id-gamme-ligne']);}

			
				break;
	
	
			case "produits" :


				$z = 0;

				$fichier	= "gamme-".$array['id-gamme-produit']."/slide-".s2u($array['lib-produit']).".jpg";


				if(file_exists($base.$fichier)){
					$slides[$z]['image']	= $fichier;
					$slides[$z]['url']	= "/produits/".$array['id-produit']."-".s2u($array['lib-produit']).".html";
					$slides[$z]['lib']	= "";
					$z++;
				}
				

				for($i=0; $i<65; $i++){
					$fichier	= "gamme-".$array['id-gamme-produit']."/slide-".s2u($array['lib-produit'])."-".$i.".jpg";
					if(file_exists($base.$fichier)){
						$slides[$z]['image']	= $fichier;
						$slides[$z]['url']	= "/produits/".$array['id-produit']."-".s2u($array['lib-produit']).".html";
						$slides[$z]['lib']	= "";
						$z++;
					}
				}
				
				if(sizeof($slides) == 0)	{ $slides = pages_getSlides("gammes", $array['id-gamme-produit']);}
				
			//	var_dump($slides);
			//	var_dump(pages_getSlides("gammes", $array['id-gamme-produit']));
			//	die();

			
				break;
	
	
	
	
			default :
		
				$slides[0]['image']	= "gamme-medisphinx/slide-medisphinx.jpg";
				$slides[0]['url']	= "/gammes/medisphinx.html";
				$slides[0]['lib']	= "";
				
				$slides[1]['image']	= "gamme-isisinformatique/slide-isisinformatique.jpg";
				$slides[1]['url']	= "/gammes/isisinformatique.html";	
				$slides[1]['lib']	= "";
				
				$slides[2]['image']	= "gamme-isisphone/slide-isisphone.jpg";
				$slides[2]['url']	= "/gammes/isisphone.html";
				$slides[2]['lib']	= "";
				
				$slides[3]['image']	= "gamme-isisdesign/slide-isisdesign.jpg";
				$slides[3]['url']	= "/gammes/isisdesign.html";
				$slides[3]['lib']	= "";
				
				$slides[4]['image']	= "gamme-isiservice/slide-isiservice.jpg";
				$slides[4]['url']	= "/gammes/isiservice.html";
				$slides[4]['lib']	= "";
				
				break;
		
		}
		
		return $slides;
	
	
	
	
	
	}














	function page_getType($index){
	
		$index 		= strip_tags($index);
		$id_tab 	= explode("-", $index, 2);
				
		if(sizeof($id_tab) !==2)	custom_404_admin("Cette page n'existe pas. (Paramètres)");
			
		switch($id_tab[0]){
		
			case "gamme":
			case "ligne":
			case "produit":
			case "page":
				break;
				
			default :
				custom_404_admin("Cette page n'existe pas. (Paramètres)");
				die();
				
		}
		
		return $id_tab;
	
	}




	function custom_404($str){
	
		die($str);
	
	
	}

	function custom_die($str){
	
		die($str);
	
	}



	
function s2u($text){

	$text = html_entity_decode($text, ENT_QUOTES, 'UTF-8');


	$a = array(	'----------', '---------', '--------', '-------', '------', '-----', '----', '---', '--', ' - ',
				'À', 'Á', 'Â', 'Ã', 'Ä', 'Å', 'Æ', 'Ç', 'È', 'É', 'Ê', 'Ë', 'Ì', 'Í', 'Î', 'Ï', 'Ð',
				'Ñ', 'Ò', 'Ó', 'Ô', 'Õ', 'Ö', 'Ø', 'Ù', 'Ú', 'Û', 'Ü', 'Ý', 'ß', 'à', 'á', 'â', 'ã',
				'ä', 'å', 'æ', 'ç', 'è', 'é', 'ê', 'ë', 'ì', 'í', 'î', 'ï', 'ñ', 'ò', 'ó', 'ô', 'õ',
				'ö', 'ø', 'ù', 'ú', 'û', 'ü', 'ý', 'ÿ', 'Ā', 'ā', 'Ă', 'ă', 'Ą', 'ą', 'Ć', 'ć', 'Ĉ',
				'ĉ', 'Ċ', 'ċ', 'Č', 'č', 'Ď', 'ď', 'Đ', 'đ', 'Ē', 'ē', 'Ĕ', 'ĕ', 'Ė', 'ė', 'Ę', 'ę',
				'Ě', 'ě', 'Ĝ', 'ĝ', 'Ğ', 'ğ', 'Ġ', 'ġ', 'Ģ', 'ģ', 'Ĥ', 'ĥ', 'Ħ', 'ħ', 'Ĩ', 'ĩ', 'Ī', 'ī',
				'Ĭ', 'ĭ', 'Į', 'į', 'İ', 'ı', 'Ĳ', 'ĳ', 'Ĵ', 'ĵ', 'Ķ', 'ķ', 'Ĺ', 'ĺ', 'Ļ', 'ļ', 'Ľ', 'ľ',
				'Ŀ', 'ŀ', 'Ł', 'ł', 'Ń', 'ń', 'Ņ', 'ņ', 'Ň', 'ň', 'ŉ', 'Ō', 'ō', 'Ŏ', 'ŏ', 'Ő', 'ő', 'Œ',
				'œ', 'Ŕ', 'ŕ', 'Ŗ', 'ŗ', 'Ř', 'ř', 'Ś', 'ś', 'Ŝ', 'ŝ', 'Ş', 'ş', 'Š', 'š', 'Ţ', 'ţ', 'Ť', 
				'ť', 'Ŧ', 'ŧ', 'Ũ', 'ũ', 'Ū', 'ū', 'Ŭ', 'ŭ', 'Ů', 'ů', 'Ű', 'ű', 'Ų', 'ų', 'Ŵ', 'ŵ', 'Ŷ', 
				'ŷ', 'Ÿ', 'Ź', 'ź', 'Ż', 'ż', 'Ž', 'ž', 'ſ', 'ƒ', 'Ơ', 'ơ', 'Ư', 'ư', 'Ǎ', 'ǎ', 'Ǐ', 'ǐ',
				'Ǒ', 'ǒ', 'Ǔ', 'ǔ', 'Ǖ', 'ǖ', 'Ǘ', 'ǘ', 'Ǚ', 'ǚ', 'Ǜ', 'ǜ', 'Ǻ', 'ǻ', 'Ǽ', 'ǽ', 'Ǿ', 'ǿ');


	$b = array(	'-', '-', '-', '-', '-', '-', '-', '-', '-', '-',
				'A', 'A', 'A', 'A', 'A', 'A', 'AE', 'C', 'E', 'E', 'E', 'E', 'I', 'I', 'I', 'I', 'D', 'N', 'O',
				'O', 'O', 'O', 'O', 'O', 'U', 'U', 'U', 'U', 'Y', 's', 'a', 'a', 'a', 'a', 'a', 'a', 'ae', 'c',
				'e', 'e', 'e', 'e', 'i', 'i', 'i', 'i', 'n', 'o', 'o', 'o', 'o', 'o', 'o', 'u', 'u', 'u', 'u',
				'y', 'y', 'A', 'a', 'A', 'a', 'A', 'a', 'C', 'c', 'C', 'c', 'C', 'c', 'C', 'c', 'D', 'd', 'D',
				'd', 'E', 'e', 'E', 'e', 'E', 'e', 'E', 'e', 'E', 'e', 'G', 'g', 'G', 'g', 'G', 'g', 'G', 'g',
				'H', 'h', 'H', 'h', 'I', 'i', 'I', 'i', 'I', 'i', 'I', 'i', 'I', 'i', 'IJ', 'ij', 'J', 'j', 'K',
				'k', 'L', 'l', 'L', 'l', 'L', 'l', 'L', 'l', 'L', 'l', 'N', 'n', 'N', 'n', 'N', 'n', 'n', 'O', 'o',
				'O', 'o', 'O', 'o', 'OE', 'oe', 'R', 'r', 'R', 'r', 'R', 'r', 'S', 's', 'S', 's', 'S', 's', 'S',
				's', 'T', 't', 'T', 't', 'T', 't', 'U', 'u', 'U', 'u', 'U', 'u', 'U', 'u', 'U', 'u', 'U', 'u', 'W',
				'w', 'Y', 'y', 'Y', 'Z', 'z', 'Z', 'z', 'Z', 'z', 's', 'f', 'O', 'o', 'U', 'u', 'A', 'a', 'I', 'i',
				'O', 'o', 'U', 'u', 'U', 'u', 'U', 'u', 'U', 'u', 'U', 'u', 'A', 'a', 'AE', 'ae', 'O', 'o');
	
	$text = str_replace($a, $b, $text);

	$text = mb_strtolower(preg_replace(array('/[^a-zA-Z0-9 \'-]/', '/[ -\']+/', '/^-|-$/'), array('', '-', ''), $text));

	return $text;

}	




?>