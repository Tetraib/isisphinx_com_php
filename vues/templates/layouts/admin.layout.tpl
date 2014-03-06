<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
	
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

			<title>Admin</title>
	
			<link rel="stylesheet" type="text/css" media="screen" href="/styles/yui-reset-min.css" />
			<link rel="stylesheet" type="text/css" media="screen" href="/styles/gs.css" />
			<link rel="stylesheet" type="text/css" media="screen" href="/styles/admin.css" />
			<link rel="stylesheet" type="text/css" media="screen" href="/styles/colors.css" />
			<link rel="stylesheet" type="text/css" media="screen" href="/styles/hacks.css" />
			
			<link rel="stylesheet" type="text/css" media="screen" href="/js/jquery-ui/css/blitzer/jquery-ui.css" />
			<script type="text/javascript" src="/js/jquery.js"></script>	
			<script type="text/javascript" src="/js/jquery-ui/js/jquery-ui.js"></script>	
			<script type="text/javascript" src="/js/jquery.cookie.js"></script>	
	
			<script type="text/javascript" src="/js/ui.admin.js"></script>	
			<script type="text/javascript" src="/js/admin.catalogue.js"></script>	
	
	</head>
	
	<body>
	
	
		<div id="contenair" class="container_24">
		
			<ul id="menu">
				
				<li class="dashboard{if $page['menu'] eq 'dashboard'} selected{/if}"><a href="/admin/">Tableau de bord</a></li>
				<li{if $page['menu'] eq 'catalogue'} class="selected"{/if}><a href="/admin/catalogue/">Catalogue</a></li>
				<li{if $page['menu'] eq 'pages'} class="selected"{/if}><a href="/admin/pages/">Pages</a></li>
				<li{if $page['menu'] eq 'medias'} class="selected"{/if}><a href="/admin/medias/">Médias</a></li>
				<li{if $page['menu'] eq 'partenaires'} class="selected"{/if}><a href="/admin/partenaires/">Partenaires</a></li>
				<li class="logout"><a href="/cmd/logout.html">Déconnexion</a></li>
		
			</ul>
			
			{include file=$page['tpl-id']}
	
		</div>
	
	</body>
	
</html>