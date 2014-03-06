<?php

	utilisateurs_check();

	include("includes/admin.functions.php");

	$page['layout-id']	= "admin.layout.tpl";
	$page['tpl-id']	= "backoffice/home.content.tpl";
	$page['menu']		= "dashbord";
	
	switch($_GET['admin-id']){
	
		case "home.content" :
		
			header("Location: /admin/catalogue/");
			
			break;


		case "catalogue.content" :
		
			$page['menu']		= "catalogue";
			$page['tpl-id']	= "backoffice/catalogue.content.tpl";
			
			break;


		case "pages.content" :
		
			$page['menu']		= "pages";
			$page['tpl-id']	= "backoffice/pages.content.tpl";

			break;


		case "pages.edit" :
		
			$page['menu']		= "pages";
			$page['tpl-id']	= "backoffice/pages.edit.tpl";
		
			$datas['liste']	= pages_getInfos(@$_GET['id']);
			
			list($datas['liste']['type'], $datas['liste']['id']) = page_getType($_GET['id']);
			
			if($datas['liste']['type'] !== "page")	$page['menu']		= "catalogue";

			break;
			
			
		case "medias.content" :
		
			$page['menu']		= "medias";
			$page['tpl-id']	= "backoffice/medias.content.tpl";

			break;
	
	
		case "partenaires.content" :
		
			$page['menu']		= "partenaires";
			$page['tpl-id']	= "backoffice/partenaires.content.tpl";
					
			$datas['liste']	= partenaires_getList();

			break;

		case "partenaires.edit" :
		
			$page['menu']		= "partenaires";
			$page['tpl-id']	= "backoffice/partenaires.edit.tpl";
					
			$datas['liste']	= partenaires_getInfos(@$_GET['id']);

			break;
	


		default:
			
			break;
			
			
			
		
		
		
		
		}

?>