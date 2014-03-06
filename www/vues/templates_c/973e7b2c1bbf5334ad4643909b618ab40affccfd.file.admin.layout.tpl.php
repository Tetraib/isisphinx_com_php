<?php /* Smarty version Smarty-3.1.7, created on 2014-03-04 12:35:54
         compiled from "vues/templates/layouts/admin.layout.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18369379355315ba9a2301b8-75658830%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '973e7b2c1bbf5334ad4643909b618ab40affccfd' => 
    array (
      0 => 'vues/templates/layouts/admin.layout.tpl',
      1 => 1326064984,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18369379355315ba9a2301b8-75658830',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'page' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5315ba9a3479d',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5315ba9a3479d')) {function content_5315ba9a3479d($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

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
				
				<li class="dashboard<?php if ($_smarty_tpl->tpl_vars['page']->value['menu']=='dashboard'){?> selected<?php }?>"><a href="/admin/">Tableau de bord</a></li>
				<li<?php if ($_smarty_tpl->tpl_vars['page']->value['menu']=='catalogue'){?> class="selected"<?php }?>><a href="/admin/catalogue/">Catalogue</a></li>
				<li<?php if ($_smarty_tpl->tpl_vars['page']->value['menu']=='pages'){?> class="selected"<?php }?>><a href="/admin/pages/">Pages</a></li>
				<li<?php if ($_smarty_tpl->tpl_vars['page']->value['menu']=='medias'){?> class="selected"<?php }?>><a href="/admin/medias/">Médias</a></li>
				<li<?php if ($_smarty_tpl->tpl_vars['page']->value['menu']=='partenaires'){?> class="selected"<?php }?>><a href="/admin/partenaires/">Partenaires</a></li>
				<li class="logout"><a href="/cmd/logout.html">Déconnexion</a></li>
		
			</ul>
			
			<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['page']->value['tpl-id'], $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	
		</div>
	
	</body>
	
</html><?php }} ?>