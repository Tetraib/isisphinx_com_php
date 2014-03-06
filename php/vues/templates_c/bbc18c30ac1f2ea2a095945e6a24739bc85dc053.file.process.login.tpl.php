<?php /* Smarty version Smarty-3.1.7, created on 2014-03-04 11:53:29
         compiled from "vues/templates/layouts/process.login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18472705375315b0a933b599-20972661%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bbc18c30ac1f2ea2a095945e6a24739bc85dc053' => 
    array (
      0 => 'vues/templates/layouts/process.login.tpl',
      1 => 1325832450,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18472705375315b0a933b599-20972661',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'page' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5315b0a946847',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5315b0a946847')) {function content_5315b0a946847($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" type="text/css" href="/styles/login.css">

<title>Document sans titre</title>
</head>

<body>



	<form id="authentification" name="authentification" method="post" action="/cmd/login.html">

		<?php if (isset($_smarty_tpl->tpl_vars['page']->value['connexion-erreur'])){?><p class="rouge"><?php echo $_smarty_tpl->tpl_vars['page']->value['connexion-erreur'];?>
</p><?php }?>
		<label>Login				
		<input name="email-login" type="text" value="" /></label>
		<label>Mot de passe			<input name="mdp-login" type="password" value="" /></label>
		<label>					<input name="submit-login" type="submit" value="Valider" class="bouton" /></label>
			

	</form>

</body>
</html><?php }} ?>