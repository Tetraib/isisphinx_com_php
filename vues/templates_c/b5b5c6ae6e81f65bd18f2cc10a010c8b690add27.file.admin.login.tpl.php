<?php /* Smarty version Smarty-3.1.7, created on 2012-01-06 06:30:32
         compiled from "vues/templates/layouts/admin.login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16119011244f0686f82d5b58-22860643%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b5b5c6ae6e81f65bd18f2cc10a010c8b690add27' => 
    array (
      0 => 'vues/templates/layouts/admin.login.tpl',
      1 => 1325827829,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16119011244f0686f82d5b58-22860643',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_4f0686f834c59',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f0686f834c59')) {function content_4f0686f834c59($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" type="text/css" href="/styles/login.css">

<title>Document sans titre</title>
</head>

<body>



	<form id="authentification" name="authentification" method="post" action="/admin/cmd/login.html">

		<label>Email				<input name="email-login" type="text" value="" /></label>
		<label>Mot de passe			<input name="mdp-login" type="password" value="" /></label>
		<label>					<input name="submit-login" type="submit" value="Valider" class="bouton" /></label>		

	</form>

</body>
</html><?php }} ?>