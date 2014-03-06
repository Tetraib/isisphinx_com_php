<?php /* Smarty version Smarty-3.1.7, created on 2014-03-05 06:30:23
         compiled from "vues/templates/front/page.generique.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1890865895316b66f646108-67097918%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b224e370ad6c185031d0b2a13f0846e6d22f3a95' => 
    array (
      0 => 'vues/templates/front/page.generique.tpl',
      1 => 1329082754,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1890865895316b66f646108-67097918',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'page' => 0,
    'datas' => 0,
    'catalogue' => 0,
    'index_ul' => 0,
    'index_fait' => 0,
    'index_ligne' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5316b66fdc30f',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5316b66fdc30f')) {function content_5316b66fdc30f($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_s2u')) include '/home/isisphin/www/libs/Smarty/plugins/modifier.s2u.php';
if (!is_callable('smarty_modifier_toList')) include '/home/isisphin/www/libs/Smarty/plugins/modifier.toList.php';
?><div id="page" class="<?php echo $_smarty_tpl->tpl_vars['page']->value['class'];?>
">

	<div id="fiche" class="partie clear">
		<div class="sidebar">
			
			<div class="logo">
				<img src="/medias/front/logo.gif" alt="IsiSphinx" />
			</div>
			
			<div class="paragraphes"><?php echo $_smarty_tpl->tpl_vars['datas']->value['liste']['paragraphes-page'];?>
</div>
			
		</div>
		
		<div class="content">
		
			<div class="titre">
				<h1 class="color-<?php echo $_smarty_tpl->tpl_vars['page']->value['class'];?>
">
					<?php echo $_smarty_tpl->tpl_vars['datas']->value['liste']['titre-page'];?>

					<?php if ($_smarty_tpl->tpl_vars['datas']->value['liste']['soustitre-page']!=''){?><span><?php echo $_smarty_tpl->tpl_vars['datas']->value['liste']['soustitre-page'];?>
</span><?php }?>
				</h1>
			</div>	
			
			<div class="contenu">
				<?php echo $_smarty_tpl->tpl_vars['datas']->value['liste']['texte-page'];?>

			</div>
	
		</div>
	
	</div>

	
	
	<?php if ($_smarty_tpl->tpl_vars['page']->value['type']=="gamme"){?>
	<div id="gamme-liste" class="partie clear">
				
		<p class="titre">
			<span class="lib color-<?php echo $_smarty_tpl->tpl_vars['page']->value['class'];?>
"><?php echo $_smarty_tpl->tpl_vars['datas']->value['gamme']['lib-gamme'];?>
</span>
		</p>
		
		
	
		<div >
			
					<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['gamme_index'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['gamme_index']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['gamme_index']['name'] = 'gamme_index';
$_smarty_tpl->tpl_vars['smarty']->value['section']['gamme_index']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['catalogue']->value['gammes']['ordre']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['gamme_index']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['gamme_index']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['gamme_index']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['gamme_index']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['gamme_index']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['gamme_index']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['gamme_index']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['gamme_index']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['gamme_index']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['gamme_index']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['gamme_index']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['gamme_index']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['gamme_index']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['gamme_index']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['gamme_index']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['gamme_index']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['gamme_index']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['gamme_index']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['gamme_index']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['gamme_index']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['gamme_index']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['gamme_index']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['gamme_index']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['gamme_index']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['gamme_index']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['gamme_index']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['gamme_index']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['gamme_index']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['gamme_index']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['gamme_index']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['gamme_index']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['gamme_index']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['gamme_index']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['gamme_index']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['gamme_index']['total']);
?>
												
						<?php if ($_smarty_tpl->tpl_vars['catalogue']->value['gammes']['ordre'][$_smarty_tpl->getVariable('smarty')->value['section']['gamme_index']['index']]['id-gamme']==$_smarty_tpl->tpl_vars['datas']->value['gamme']['id-gamme']){?>						
												
						<div>
						
							<?php $_smarty_tpl->tpl_vars["index_ul"] = new Smarty_variable("0", null, 0);?>
							<?php $_smarty_tpl->tpl_vars["index_fait"] = new Smarty_variable("0", null, 0);?>
							<?php $_smarty_tpl->tpl_vars["index_switch"] = new Smarty_variable("0", null, 0);?>

							<ul id="ul-<?php echo $_smarty_tpl->tpl_vars['index_ul']->value;?>
" class="element is_3_<?php if ($_smarty_tpl->tpl_vars['catalogue']->value['gammes']['count'][$_smarty_tpl->tpl_vars['catalogue']->value['gammes']['ordre'][$_smarty_tpl->getVariable('smarty')->value['section']['gamme_index']['index']]['id-gamme']]-$_smarty_tpl->tpl_vars['index_fait']->value>5){?>5<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['catalogue']->value['gammes']['count'][$_smarty_tpl->tpl_vars['catalogue']->value['gammes']['ordre'][$_smarty_tpl->getVariable('smarty')->value['section']['gamme_index']['index']]['id-gamme']];?>
<?php }?> clear">
							
							<?php $_smarty_tpl->tpl_vars["index_ligne"] = new Smarty_variable("0", null, 0);?>
							<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['ligne_index'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['ligne_index']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ligne_index']['name'] = 'ligne_index';
$_smarty_tpl->tpl_vars['smarty']->value['section']['ligne_index']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['catalogue']->value['lignes']['ordre']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ligne_index']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['ligne_index']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ligne_index']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ligne_index']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['ligne_index']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ligne_index']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['ligne_index']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['ligne_index']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['ligne_index']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ligne_index']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['ligne_index']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['ligne_index']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['ligne_index']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['ligne_index']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['ligne_index']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ligne_index']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['ligne_index']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['ligne_index']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['ligne_index']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['ligne_index']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['ligne_index']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['ligne_index']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['ligne_index']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ligne_index']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ligne_index']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ligne_index']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['ligne_index']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ligne_index']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ligne_index']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['ligne_index']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ligne_index']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['ligne_index']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ligne_index']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['ligne_index']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['ligne_index']['total']);
?>
				
								<?php if ($_smarty_tpl->tpl_vars['catalogue']->value['lignes']['ordre'][$_smarty_tpl->getVariable('smarty')->value['section']['ligne_index']['index']]['id-gamme-ligne']==$_smarty_tpl->tpl_vars['catalogue']->value['gammes']['ordre'][$_smarty_tpl->getVariable('smarty')->value['section']['gamme_index']['index']]['id-gamme']){?>

									<?php if ($_smarty_tpl->tpl_vars['index_fait']->value==5){?>
										<?php $_smarty_tpl->tpl_vars["index_fait"] = new Smarty_variable("0", null, 0);?>
										<?php $_smarty_tpl->tpl_vars["index_ul"] = new Smarty_variable($_smarty_tpl->tpl_vars['index_ul']->value+1, null, 0);?>
										</ul>
										<ul id="ul-<?php echo $_smarty_tpl->tpl_vars['index_ul']->value;?>
" class="element is_3_<?php if ($_smarty_tpl->tpl_vars['catalogue']->value['gammes']['count'][$_smarty_tpl->tpl_vars['catalogue']->value['gammes']['ordre'][$_smarty_tpl->getVariable('smarty')->value['section']['gamme_index']['index']]['id-gamme']]-$_smarty_tpl->tpl_vars['index_fait']->value>5){?>5<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['catalogue']->value['gammes']['count'][$_smarty_tpl->tpl_vars['catalogue']->value['gammes']['ordre'][$_smarty_tpl->getVariable('smarty')->value['section']['gamme_index']['index']]['id-gamme']];?>
<?php }?> clear">
									<?php }?>
		

								<li class="ligne-<?php echo $_smarty_tpl->tpl_vars['index_ligne']->value;?>
">
									<?php echo $_smarty_tpl->tpl_vars['catalogue']->value['lignes']['ordre'][$_smarty_tpl->getVariable('smarty')->value['section']['ligne_index']['index']]['lib-ligne'];?>

									<ul>
									
									<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['produit_index'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['produit_index']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['produit_index']['name'] = 'produit_index';
$_smarty_tpl->tpl_vars['smarty']->value['section']['produit_index']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['catalogue']->value['produits']['ordre']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['produit_index']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['produit_index']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['produit_index']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['produit_index']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['produit_index']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['produit_index']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['produit_index']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['produit_index']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['produit_index']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['produit_index']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['produit_index']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['produit_index']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['produit_index']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['produit_index']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['produit_index']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['produit_index']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['produit_index']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['produit_index']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['produit_index']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['produit_index']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['produit_index']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['produit_index']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['produit_index']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['produit_index']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['produit_index']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['produit_index']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['produit_index']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['produit_index']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['produit_index']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['produit_index']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['produit_index']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['produit_index']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['produit_index']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['produit_index']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['produit_index']['total']);
?>
						
										<?php if ($_smarty_tpl->tpl_vars['catalogue']->value['produits']['ordre'][$_smarty_tpl->getVariable('smarty')->value['section']['produit_index']['index']]['id-ligne-produit']==$_smarty_tpl->tpl_vars['catalogue']->value['lignes']['ordre'][$_smarty_tpl->getVariable('smarty')->value['section']['ligne_index']['index']]['id-ligne']){?>
										<li>
											<a href="/produits/<?php echo $_smarty_tpl->tpl_vars['catalogue']->value['produits']['ordre'][$_smarty_tpl->getVariable('smarty')->value['section']['produit_index']['index']]['id-produit'];?>
-<?php echo smarty_modifier_s2u($_smarty_tpl->tpl_vars['catalogue']->value['produits']['ordre'][$_smarty_tpl->getVariable('smarty')->value['section']['produit_index']['index']]['lib-produit']);?>
.html"><?php echo $_smarty_tpl->tpl_vars['catalogue']->value['produits']['ordre'][$_smarty_tpl->getVariable('smarty')->value['section']['produit_index']['index']]['lib-produit'];?>
</a>
										
										</li>
										
										<?php }?>
									
									<?php endfor; endif; ?>
									</ul>
								</li>
								
								<?php $_smarty_tpl->tpl_vars["index_ligne"] = new Smarty_variable($_smarty_tpl->tpl_vars['index_ligne']->value+1, null, 0);?>
								<?php $_smarty_tpl->tpl_vars["index_fait"] = new Smarty_variable($_smarty_tpl->tpl_vars['index_fait']->value+1, null, 0);?>
								<?php }?>
																												
							<?php endfor; endif; ?>
						
							</ul>
						</div>
							
						<?php }?>	
													
					<?php endfor; endif; ?>


		</div>
				
	</div>
	<?php }?>
	



	
	<?php if ($_smarty_tpl->tpl_vars['page']->value['type']=="ligne"){?>
	<div id="gamme-liste" class="partie clear">
				
		<p class="titre">
			<span class="lib color-<?php echo $_smarty_tpl->tpl_vars['page']->value['class'];?>
"><?php echo $_smarty_tpl->tpl_vars['datas']->value['gamme']['lib-gamme'];?>
</span>
		</p>
		
		
	
		<div >
			
					<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['gamme_index'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['gamme_index']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['gamme_index']['name'] = 'gamme_index';
$_smarty_tpl->tpl_vars['smarty']->value['section']['gamme_index']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['catalogue']->value['gammes']['ordre']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['gamme_index']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['gamme_index']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['gamme_index']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['gamme_index']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['gamme_index']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['gamme_index']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['gamme_index']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['gamme_index']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['gamme_index']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['gamme_index']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['gamme_index']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['gamme_index']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['gamme_index']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['gamme_index']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['gamme_index']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['gamme_index']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['gamme_index']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['gamme_index']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['gamme_index']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['gamme_index']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['gamme_index']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['gamme_index']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['gamme_index']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['gamme_index']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['gamme_index']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['gamme_index']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['gamme_index']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['gamme_index']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['gamme_index']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['gamme_index']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['gamme_index']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['gamme_index']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['gamme_index']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['gamme_index']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['gamme_index']['total']);
?>
												
						<?php if ($_smarty_tpl->tpl_vars['catalogue']->value['gammes']['ordre'][$_smarty_tpl->getVariable('smarty')->value['section']['gamme_index']['index']]['id-gamme']==$_smarty_tpl->tpl_vars['datas']->value['gamme']['id-gamme']){?>						
												
						<div>
						
							<?php $_smarty_tpl->tpl_vars["index_ul"] = new Smarty_variable("0", null, 0);?>
							<?php $_smarty_tpl->tpl_vars["index_fait"] = new Smarty_variable("0", null, 0);?>
							<?php $_smarty_tpl->tpl_vars["index_switch"] = new Smarty_variable("0", null, 0);?>

							<ul id="ul-<?php echo $_smarty_tpl->tpl_vars['index_ul']->value;?>
" class="element is_3_1 clear">
							
							<?php $_smarty_tpl->tpl_vars["index_ligne"] = new Smarty_variable("0", null, 0);?>
							<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['ligne_index'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['ligne_index']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ligne_index']['name'] = 'ligne_index';
$_smarty_tpl->tpl_vars['smarty']->value['section']['ligne_index']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['catalogue']->value['lignes']['ordre']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ligne_index']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['ligne_index']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ligne_index']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ligne_index']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['ligne_index']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ligne_index']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['ligne_index']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['ligne_index']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['ligne_index']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ligne_index']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['ligne_index']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['ligne_index']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['ligne_index']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['ligne_index']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['ligne_index']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ligne_index']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['ligne_index']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['ligne_index']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['ligne_index']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['ligne_index']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['ligne_index']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['ligne_index']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['ligne_index']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ligne_index']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ligne_index']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ligne_index']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['ligne_index']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ligne_index']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ligne_index']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['ligne_index']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ligne_index']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['ligne_index']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ligne_index']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['ligne_index']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['ligne_index']['total']);
?>
							
				
								<?php if ($_smarty_tpl->tpl_vars['catalogue']->value['lignes']['ordre'][$_smarty_tpl->getVariable('smarty')->value['section']['ligne_index']['index']]['id-ligne']==$_smarty_tpl->tpl_vars['datas']->value['ligne']['id-ligne']){?>

									<?php if ($_smarty_tpl->tpl_vars['index_fait']->value==5){?>
										<?php $_smarty_tpl->tpl_vars["index_fait"] = new Smarty_variable("0", null, 0);?>
										<?php $_smarty_tpl->tpl_vars["index_ul"] = new Smarty_variable($_smarty_tpl->tpl_vars['index_ul']->value+1, null, 0);?>
										</ul>
										<ul id="ul-<?php echo $_smarty_tpl->tpl_vars['index_ul']->value;?>
" class="element is_3_1 clear">
									<?php }?>
		

								<li class="ligne-<?php echo $_smarty_tpl->tpl_vars['index_ligne']->value;?>
">
									<?php echo $_smarty_tpl->tpl_vars['catalogue']->value['lignes']['ordre'][$_smarty_tpl->getVariable('smarty')->value['section']['ligne_index']['index']]['lib-ligne'];?>

									<ul>
									
									<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['produit_index'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['produit_index']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['produit_index']['name'] = 'produit_index';
$_smarty_tpl->tpl_vars['smarty']->value['section']['produit_index']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['catalogue']->value['produits']['ordre']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['produit_index']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['produit_index']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['produit_index']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['produit_index']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['produit_index']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['produit_index']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['produit_index']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['produit_index']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['produit_index']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['produit_index']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['produit_index']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['produit_index']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['produit_index']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['produit_index']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['produit_index']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['produit_index']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['produit_index']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['produit_index']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['produit_index']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['produit_index']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['produit_index']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['produit_index']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['produit_index']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['produit_index']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['produit_index']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['produit_index']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['produit_index']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['produit_index']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['produit_index']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['produit_index']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['produit_index']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['produit_index']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['produit_index']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['produit_index']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['produit_index']['total']);
?>
						
										<?php if ($_smarty_tpl->tpl_vars['catalogue']->value['produits']['ordre'][$_smarty_tpl->getVariable('smarty')->value['section']['produit_index']['index']]['id-ligne-produit']==$_smarty_tpl->tpl_vars['catalogue']->value['lignes']['ordre'][$_smarty_tpl->getVariable('smarty')->value['section']['ligne_index']['index']]['id-ligne']){?>
										<li>
											<a href="/produits/<?php echo $_smarty_tpl->tpl_vars['catalogue']->value['produits']['ordre'][$_smarty_tpl->getVariable('smarty')->value['section']['produit_index']['index']]['id-produit'];?>
-<?php echo smarty_modifier_s2u($_smarty_tpl->tpl_vars['catalogue']->value['produits']['ordre'][$_smarty_tpl->getVariable('smarty')->value['section']['produit_index']['index']]['lib-produit']);?>
.html"><?php echo $_smarty_tpl->tpl_vars['catalogue']->value['produits']['ordre'][$_smarty_tpl->getVariable('smarty')->value['section']['produit_index']['index']]['lib-produit'];?>
</a>
										
										</li>
										
										<?php }?>
									
									<?php endfor; endif; ?>
									</ul>
								</li>
								
								<?php $_smarty_tpl->tpl_vars["index_ligne"] = new Smarty_variable($_smarty_tpl->tpl_vars['index_ligne']->value+1, null, 0);?>
								<?php $_smarty_tpl->tpl_vars["index_fait"] = new Smarty_variable($_smarty_tpl->tpl_vars['index_fait']->value+1, null, 0);?>
								<?php }?>
																												
							<?php endfor; endif; ?>
						
							</ul>
						</div>
							
						<?php }?>	
													
					<?php endfor; endif; ?>


		</div>
				
	</div>
	<?php }?>
	



	
	<?php if ($_smarty_tpl->tpl_vars['page']->value['type']=="produit"&&!empty($_smarty_tpl->tpl_vars['datas']->value['liste']['descriptif-page'])){?>
	<div id="descriptif" class="partie clear">
		
		<div class="sidebar">
			
			<div class="paragraphes"><p class="gris">DÉSCRIPTIF</p></div>
			
		</div>
		
		<div class="content">
		
			<ul class="liste">
				<?php echo smarty_modifier_toList($_smarty_tpl->tpl_vars['datas']->value['liste']['descriptif-page']);?>

			</ul>
	
			<?php if ($_smarty_tpl->tpl_vars['datas']->value['produit']['fiche']!=''){?>
			<a href="/medias/uploads/fiches/fiche-<?php echo $_smarty_tpl->tpl_vars['datas']->value['produit']['fiche'];?>
" class="fiche-btn"><img src="/medias/front/fiche-btn.gif" alt="Téléchargez cette fiche en version imprimable" /></a>
			<?php }?>
		</div>
		
	</div>
	<?php }?>



</div><?php }} ?>