<?php /* Smarty version Smarty-3.1.7, created on 2014-03-03 06:02:41
         compiled from "vues/templates/front/contact.content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:204996754353140cf180db66-81310450%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '50b5a6170d45826c19dd6feba079323dc62b4914' => 
    array (
      0 => 'vues/templates/front/contact.content.tpl',
      1 => 1328716748,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '204996754353140cf180db66-81310450',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'page' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_53140cf18613f',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53140cf18613f')) {function content_53140cf18613f($_smarty_tpl) {?><div id="page" class="contact clear">


	<?php if ($_smarty_tpl->tpl_vars['page']->value['message']==false){?>

	<form class="clear" method="post" action="/contact.html" id="formulaire-contact">
		
		<fieldset id="formulaire-gauche" class="sidebar">
		
			<p class="introduction">Vos coordonnées</p>
			
			<select class="required" name="contact-civilite" id="contact-civilite">
				<option value="">Civilité*</option>
				<option value="Mlle">Mlle</option>
				<option value="Mme">Mme</option>
				<option value="M.">M.</option>
			</select>
			
			<input type="text" class="ac required default" value="Prénom*" name="contact-prenom" id="contact-prenom" autocomplete="off">
			
			<input type="text" class="ac required default" value="Nom*" name="contact-nom" id="contact-nom" autocomplete="off">
						
			<input type="text" class="ac default" value="Code postal" name="contact-code_postal" id="contact-code_postal" autocomplete="off">
			
			<input type="text" class="ac required default" value="E-mail*" name="contact-email" id="contact-email" autocomplete="off">

			<input type="text" class="ac default" value="Téléphone" name="contact-telephone" id="contact-telephone" autocomplete="off">
			
			<p>* Champs obligatoires</p>
			
		</fieldset>
		
		<fieldset id="formulaire-droite" class="content">
		
			<h1>Contact</h1>
		
			<p class="introduction petit mb">
			
				<span class="blanc ligne">SAS ISISPHINX - 180, rue de Bondues - 59160 WAMBRECHIES - FRANCE</span>
				
				<span class="ligne">Pour nous envoyer un mail : <a class="grand" href="mailto:system@isisphinx.com" target="_blank">system@isisphinx.com</a></span>
				
				<span class="ligne">STANDARD <span class="blanc grand">09 70 40 80 09</span> SERVICE COMMERCIAL <span class="blanc grand">09 70 40 80 09</span> SERVICE TECHNIQUE <span class="blanc grand">09 70 40 80 09</span></span>
			
			</p>

			<input type="text" class="required" value="Objet de votre message" name="contact-objet" id="contact-objet" autocomplete="off">
			
			<p class="introduction petit mt">Votre message*</p>
			
			<textarea class="required" name="contact-message" id="contact-message"></textarea>
		
			<input type="submit" value="Envoyer" class="envoyer" name="contact-envoyer" id="contact-envoyer" autocomplete="off">
	
		</fieldset>
			
	</form>
	
	<?php }else{ ?>
	
	<div class="sidebar">
	</div>
	
	
	<div class="content">
	
		<p>Votre message a été envoyé</p>
	
	</div>
	
	
	<?php }?>
	
</div><?php }} ?>