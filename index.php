<?php


	if (get_magic_quotes_gpc()) {
		function stripslashes_gpc(&$value){
		    $value = stripslashes($value);
		}
		array_walk_recursive($_GET, 'stripslashes_gpc');
		array_walk_recursive($_POST, 'stripslashes_gpc');
		array_walk_recursive($_COOKIE, 'stripslashes_gpc');
		array_walk_recursive($_REQUEST, 'stripslashes_gpc');
	}


	error_reporting(E_ALL);
	ini_set("display_errors", 1);
	
	ini_set('session.use_trans_sid', 0);
	session_save_path("_sessions/");
	session_start();	
	
	if(!isset($_SESSION['token']))		$_SESSION['token'] = sha1(time()*rand(0,99999));
	
	
	require_once('libs/Smarty/Smarty.class.php');
	require_once('includes/inc.functions.php');
	require_once('includes/inc.bdd.php');
	

	$smarty = new Smarty();

	$page	= array();
	
	$page['URI']	 					= ""; 
	$page['color'] 					= "base"; 
	$page['layout-id']					= "front.layout.tpl";
	$page['type']						= "page";
	
	$page['institutionnelles'][0]['id']	= "home";
	$page['institutionnelles'][0]['lib']	= "Accueil";
	$page['institutionnelles'][1]['id']	= "entreprise";
	$page['institutionnelles'][1]['lib']	= "Entreprise";
	$page['institutionnelles'][2]['id']	= "liens_utiles";
	$page['institutionnelles'][2]['lib']	= "Liens utiles";
	$page['institutionnelles'][3]['id']	= "mentions_legales";
	$page['institutionnelles'][3]['lib']	= "Mentions légales &amp; crédits";
	$page['institutionnelles'][4]['id']	= "vie_privee";
	$page['institutionnelles'][4]['lib']	= "Protection vie privée";
	
	
	$page['slides']	= pages_getSlides();
	

	$datas	= array();

	$catalogue			= array();
	$catalogue['gammes'] 	= gammes_getList(); 
	$catalogue['lignes'] 	= lignes_getList(); 
	$catalogue['produits'] 	= produits_getList();
	

	foreach ($catalogue['gammes']['ordre'] as $k_gammes => $v_gammes) { 
	
		if(@count($catalogue['lignes']['ordre']) >0){
		
			$nombre 	= 0;
			$gamme_id = $catalogue['gammes']['ordre'][$k_gammes]['id-gamme'];
			
			foreach ($catalogue['lignes']['ordre'] as $k_lignes => $v_lignes) { 
			
				if($catalogue['lignes']['ordre'][$k_lignes]['id-gamme-ligne'] == $gamme_id) $nombre++;
			
			}
			
			$catalogue['gammes']['count'][$gamme_id] = $nombre;
			
		}
		
	}


	if(isset($_SESSION['utilisateur']) &&  $_SESSION['utilisateur']['level-utilisateur'] > 0){
		$utilisateur = $_SESSION['utilisateur'];
	}

	
	if(isset($_SESSION['connexion-erreur'])){
		$page['connexion-erreur'] 	= $_SESSION['connexion-erreur'];
		unset($_SESSION['connexion-erreur']);
	}

	if(isset($_GET['process-id'])){
	
		switch($_GET['process-id']){

		

			case "layout.login" :
			
				$page['layout-id']	= "process.login.tpl";
			
			break;
			

	
			case "cmd.login" :
			
				utilisateurs_connexion($_POST['email-login'],$_POST['mdp-login']);
				utilisateurs_check();
				
				header("Location: /admin/");
				die();

			break;

	
			case "cmd.logout" :
				
				utilisateurs_deconnexion();
				session_destroy();
				header("Location: /");
				

			break;

				
				
			default : 
			
				die();

		}


	}
	
	else if((isset($_GET['ajax-id'])) && (!empty($_GET['ajax-id']))){

		$ajax_id	= "ajax.".$_GET['ajax-id'].".php";
		
		if(@file_exists("includes/ajax/".$ajax_id))	{	include("includes/ajax/".$ajax_id);	}
		else 									header("HTTP/1.0 404 Not Found");
		
		die();
		
	}
	
	
	else if(isset($_GET['admin-id'])){

		//if($_SERVER['HTTP_HOST'] !== "88.175.36.200") die("module non chargé");
		include("includes/admin.controleur.php");
	
	}	
	
	else if(isset($_GET['page-id'])){
				
		include("includes/front.controleur.php");

	}	



	$smarty->assign("page", $page);
	$smarty->assign("datas", $datas);
	$smarty->assign("catalogue", $catalogue);

	$smarty->compile_check = true;
	$smarty->force_compile = true;

	$smarty->template_dir	= 'vues/templates/';
	$smarty->compile_dir 	= 'vues/templates_c/';
	$smarty->config_dir 	= 'vues/configs/';
	$smarty->cache_dir 		= 'vues/cache/';
		
	$smarty->display('layouts/'.$page['layout-id']);
	
	//mysql_close($ddb);
	

?>