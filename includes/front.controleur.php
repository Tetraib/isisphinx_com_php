<?php


	$page['layout-id']	= "front.layout.tpl";
	$page['tpl-id']	= "front/home.content.tpl";
	$page['menu']		= "isisphinx-system";
	
	switch($_GET['page-id']){
	
		case "home.content" :
		
			$page['tpl-id']	= "front/page.generique.tpl";
			$page['menu']		= "isisphinx-system";
			$page['class']		= "isisphinx-system";
			
			$datas['liste']	= pages_getInfos("page-home");
			
			break;
			

		case "entreprise.content" :

			$page['tpl-id']	= "front/page.generique.tpl";
			$page['menu']		= "entreprise";
			$page['class']		= "entreprise";
			
			$datas['liste']	= pages_getInfos("page-entreprise");
			
			break;
			
	
		case "partenaires.content" :

			$page['tpl-id']	= "front/partenaires.content.tpl";
			$page['menu']		= "partenaires";
			
			$datas['liste']	= partenaires_getList();

			break;
			
	
		case "contact.content" :
			
			$page['message']	= false;
		
			if(isset($_POST['contact-message']) && ($_POST['contact-message'] !== "")){
				include("form.contact.php");
				$page['message']	= true;
			}
			
			$page['tpl-id']	= "front/contact.content.tpl";
			$page['menu']		= "contact";
			
			
			
			break;
		
		
		case "liens_utiles.content" :
		
			$page['tpl-id']	= "front/page.generique.tpl";
			$page['menu']		= "isisphinx-system";
			$page['class']		= "isisphinx-system";
			
			$datas['liste']	= pages_getInfos("page-liens_utiles");
			
			break;
			
		case "mentions_legales.content" :
		
			$page['tpl-id']	= "front/page.generique.tpl";
			$page['menu']		= "isisphinx-system";
			$page['class']		= "isisphinx-system";
			
			$datas['liste']	= pages_getInfos("page-mentions_legales");
			
			break;
			
		case "vie_privee.content" :
		
			$page['tpl-id']	= "front/page.generique.tpl";
			$page['menu']		= "isisphinx-system";
			$page['class']		= "isisphinx-system";
			
			$datas['liste']	= pages_getInfos("page-vie_privee");
			
			break;
			



		
		
		case "gammes.content" : 
		
			$datas['liste']	= pages_getInfos("gamme-".$_GET['id']);
			$datas['gamme']	= $catalogue['gammes']['id'][$_GET['id']];// var_dump($datas['gamme']); die();


			$page['tpl-id']	= "front/page.generique.tpl";
			$page['menu']		= $datas['gamme']['id-gamme'];
			$page['class']		= strip_tags($datas['gamme']['id-gamme']);
			$page['type']		= "gamme";
			
			
			$page['slides']	= pages_getSlides("gammes", $datas['gamme']['id-gamme']);
			
			break;


		case "lignes.content" :
		
			$datas['liste']	= pages_getInfos("ligne-".$_GET['id']);
			$datas['ligne']	= $catalogue['lignes']['id'][strip_tags($_GET['id'])];
			
			$datas['gamme']					= $catalogue['gammes']['id'][$datas['ligne']['id-gamme-ligne']]; //var_dump($datas['gamme']);
			$datas['produit']['id-gamme-produit']	= $datas['gamme']['id-gamme'];
			
			$datas['produit']['fiche'] = "";
			
			$page['tpl-id']	= "front/page.generique.tpl";
			$page['menu']		= $datas['gamme']['id-gamme'];
			$page['class']		= strip_tags($datas['gamme']['id-gamme']); 
			$page['type']		= "ligne";
			
			
			$page['slides']	= pages_getSlides("lignes", $datas['ligne']);
			
			break;
			
		
		
		
		case "produits.content" :
		
			$datas['liste']	= pages_getInfos("produit-".$_GET['id']);
			$datas['produit']	= $catalogue['produits']['id'][strip_tags($_GET['id'])];
			
			$datas['ligne']					= $catalogue['lignes']['id'][$datas['produit']['id-ligne-produit']];
			$datas['gamme']					= $catalogue['gammes']['id'][$datas['ligne']['id-gamme-ligne']];
			$datas['produit']['id-gamme-produit']	= $datas['gamme']['id-gamme'];
			
			$datas['produit']['fiche'] = "";
			
			if(file_exists("medias/uploads/fiches/fiche-".s2u($datas['produit']['lib-produit']).".pdf")){
			
				$datas['produit']['fiche'] = s2u($datas['produit']['lib-produit']).".pdf";
			
			}			
			
			$page['tpl-id']	= "front/page.generique.tpl";
			$page['menu']		= $datas['gamme']['id-gamme'];
			$page['class']		= strip_tags($datas['gamme']['id-gamme']);
			$page['type']		= "produit";
			
			
			$page['slides']	= pages_getSlides("produits", $datas['produit']);
			
			break;
			
		
		
		
			
	
	
	
	
		default:
		
			
			break;
			
			
			
		
		
		
		
		}

?>