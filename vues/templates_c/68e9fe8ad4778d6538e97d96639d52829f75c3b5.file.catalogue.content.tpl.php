<?php /* Smarty version Smarty-3.1.7, created on 2014-03-04 12:18:13
         compiled from "vues/templates/backoffice/catalogue.content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9596527715315b675caf5f4-32453822%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '68e9fe8ad4778d6538e97d96639d52829f75c3b5' => 
    array (
      0 => 'vues/templates/backoffice/catalogue.content.tpl',
      1 => 1328697122,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9596527715315b675caf5f4-32453822',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'catalogue' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5315b6762d6cd',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5315b6762d6cd')) {function content_5315b6762d6cd($_smarty_tpl) {?><div>


	<ul id="catalogue" class="gammes">
	
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
		<li id="gamme-<?php echo $_smarty_tpl->tpl_vars['catalogue']->value['gammes']['ordre'][$_smarty_tpl->getVariable('smarty')->value['section']['gamme_index']['index']]['id-gamme'];?>
">
			<div class="gamme-lib ui-state-default">
				<span class="lib color-<?php echo $_smarty_tpl->tpl_vars['catalogue']->value['gammes']['ordre'][$_smarty_tpl->getVariable('smarty')->value['section']['gamme_index']['index']]['id-gamme'];?>
">
					<img class="puce" src="/medias/front/menu-puce-<?php echo $_smarty_tpl->tpl_vars['catalogue']->value['gammes']['ordre'][$_smarty_tpl->getVariable('smarty')->value['section']['gamme_index']['index']]['id-gamme'];?>
.png" align="&bull;" /><?php echo $_smarty_tpl->tpl_vars['catalogue']->value['gammes']['ordre'][$_smarty_tpl->getVariable('smarty')->value['section']['gamme_index']['index']]['lib-gamme'];?>

				</span>
				
				<span class="actions">
	
					
					<span class="groupe">
						<span class="ui-icon ui-icon-image"></span>
					</span>
					
					<span class="groupe">
						<span class="catalogue-lignes-add ui-icon ui-icon-plus" data-id="<?php echo $_smarty_tpl->tpl_vars['catalogue']->value['gammes']['ordre'][$_smarty_tpl->getVariable('smarty')->value['section']['gamme_index']['index']]['id-gamme'];?>
"></span>
						<form id="catalogue-lignes-add-form-<?php echo $_smarty_tpl->tpl_vars['catalogue']->value['gammes']['ordre'][$_smarty_tpl->getVariable('smarty')->value['section']['gamme_index']['index']]['id-gamme'];?>
" class="catalogue-lignes-add-form form-modal" data-id="<?php echo $_smarty_tpl->tpl_vars['catalogue']->value['gammes']['ordre'][$_smarty_tpl->getVariable('smarty')->value['section']['gamme_index']['index']]['id-gamme'];?>
" data-lib="<?php echo $_smarty_tpl->tpl_vars['catalogue']->value['gammes']['ordre'][$_smarty_tpl->getVariable('smarty')->value['section']['gamme_index']['index']]['lib-gamme'];?>
">
							<label for="catalogue-lignes-add-form-<?php echo $_smarty_tpl->tpl_vars['catalogue']->value['gammes']['ordre'][$_smarty_tpl->getVariable('smarty')->value['section']['gamme_index']['index']]['id-gamme'];?>
-libelle">Libellé (optionnel) :</label>
							<input id="catalogue-lignes-add-form-<?php echo $_smarty_tpl->tpl_vars['catalogue']->value['gammes']['ordre'][$_smarty_tpl->getVariable('smarty')->value['section']['gamme_index']['index']]['id-gamme'];?>
-libelle" type="text" value="" />		
						</form>
					</span>

					<span class="groupe">
						<a href="/admin/pages/gamme-<?php echo $_smarty_tpl->tpl_vars['catalogue']->value['gammes']['ordre'][$_smarty_tpl->getVariable('smarty')->value['section']['gamme_index']['index']]['id-gamme'];?>
.html"><span title="Éditer cette gamme ?" class="ui-icon ui-icon-pencil"></span></a>
					</span>
					
					
				</span>
								
				<span class="actions actions-messages">
					<span class="groupe ui-state-error">
						<span title="Erreurs" class="ui-icon ui-icon-alert"></span>
					</span>
					
				</span>
								
			</div>
			
			<ul id="ul-gamme-<?php echo $_smarty_tpl->tpl_vars['catalogue']->value['gammes']['ordre'][$_smarty_tpl->getVariable('smarty')->value['section']['gamme_index']['index']]['id-gamme'];?>
" class="lignes" data-id="">
			
			<?php if (!empty($_smarty_tpl->tpl_vars['catalogue']->value['lignes']['ordre'])){?><?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['ligne_index'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['ligne_index']);
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
				<li id="ligne-<?php echo $_smarty_tpl->tpl_vars['catalogue']->value['lignes']['ordre'][$_smarty_tpl->getVariable('smarty')->value['section']['ligne_index']['index']]['id-ligne'];?>
">
					<div class="ligne-lib ui-state-default">
						<span class="ui-icon ui-icon-grip-dotted-vertical grip"></span>
						
						<?php if ($_smarty_tpl->tpl_vars['catalogue']->value['lignes']['ordre'][$_smarty_tpl->getVariable('smarty')->value['section']['ligne_index']['index']]['lib-ligne']!=''){?><span class="lib"><?php echo $_smarty_tpl->tpl_vars['catalogue']->value['lignes']['ordre'][$_smarty_tpl->getVariable('smarty')->value['section']['ligne_index']['index']]['lib-ligne'];?>
</span>
						<?php }else{ ?><span class="lib vide">Aucun titre saisi</span>
						<?php }?>
						
						<span class="actions">
		
							<span class="groupe">
								<span class="catalogue-produits-add ui-icon ui-icon-plus" data-id="<?php echo $_smarty_tpl->tpl_vars['catalogue']->value['lignes']['ordre'][$_smarty_tpl->getVariable('smarty')->value['section']['ligne_index']['index']]['id-ligne'];?>
"></span>
								<form id="catalogue-produits-add-form-<?php echo $_smarty_tpl->tpl_vars['catalogue']->value['lignes']['ordre'][$_smarty_tpl->getVariable('smarty')->value['section']['ligne_index']['index']]['id-ligne'];?>
" class="catalogue-produit-add-form form-modal" data-id="<?php echo $_smarty_tpl->tpl_vars['catalogue']->value['lignes']['ordre'][$_smarty_tpl->getVariable('smarty')->value['section']['ligne_index']['index']]['id-ligne'];?>
" data-lib="<?php echo $_smarty_tpl->tpl_vars['catalogue']->value['lignes']['ordre'][$_smarty_tpl->getVariable('smarty')->value['section']['ligne_index']['index']]['lib-ligne'];?>
" data-token="<?php echo $_smarty_tpl->tpl_vars['catalogue']->value['lignes']['ordre'][$_smarty_tpl->getVariable('smarty')->value['section']['ligne_index']['index']]['token'];?>
">
									<label for="catalogue-produits-add-form-<?php echo $_smarty_tpl->tpl_vars['catalogue']->value['lignes']['ordre'][$_smarty_tpl->getVariable('smarty')->value['section']['ligne_index']['index']]['id-ligne'];?>
-libelle">Libellé (tel qu'affiché dans la fiche produit) :</label>
									<input id="catalogue-produits-add-form-<?php echo $_smarty_tpl->tpl_vars['catalogue']->value['lignes']['ordre'][$_smarty_tpl->getVariable('smarty')->value['section']['ligne_index']['index']]['id-ligne'];?>
-libelle" type="text" value="" />		
								</form>
							</span>
							
							<span class="groupe">
								<a href="/admin/pages/ligne-<?php echo $_smarty_tpl->tpl_vars['catalogue']->value['lignes']['ordre'][$_smarty_tpl->getVariable('smarty')->value['section']['ligne_index']['index']]['id-ligne'];?>
.html">
									<span class="catalogue-lignes-edit ui-icon ui-icon-pencil" data-id="<?php echo $_smarty_tpl->tpl_vars['catalogue']->value['lignes']['ordre'][$_smarty_tpl->getVariable('smarty')->value['section']['ligne_index']['index']]['id-ligne'];?>
"></span>
								</a>

								<span class="catalogue-lignes-delete ui-icon ui-icon-trash" data-id="<?php echo $_smarty_tpl->tpl_vars['catalogue']->value['lignes']['ordre'][$_smarty_tpl->getVariable('smarty')->value['section']['ligne_index']['index']]['id-ligne'];?>
"></span>
								<form id="catalogue-lignes-delete-form-<?php echo $_smarty_tpl->tpl_vars['catalogue']->value['lignes']['ordre'][$_smarty_tpl->getVariable('smarty')->value['section']['ligne_index']['index']]['id-ligne'];?>
" class="catalogue-lignes-delete-form form-modal" data-id="<?php echo $_smarty_tpl->tpl_vars['catalogue']->value['lignes']['ordre'][$_smarty_tpl->getVariable('smarty')->value['section']['ligne_index']['index']]['id-ligne'];?>
" data-lib="<?php echo $_smarty_tpl->tpl_vars['catalogue']->value['lignes']['ordre'][$_smarty_tpl->getVariable('smarty')->value['section']['ligne_index']['index']]['lib-ligne'];?>
" data-token="<?php echo $_smarty_tpl->tpl_vars['catalogue']->value['lignes']['ordre'][$_smarty_tpl->getVariable('smarty')->value['section']['ligne_index']['index']]['token'];?>
">
									<div class="messages ui-state-highlight"><p><span class="ui-icon ui-icon-info"></span>Cette suppression est définitive.</p></div>	
								</form>
								
							</span>
						
						</span>
								
								
					</div>
			
					<ul id="ul-ligne-<?php echo $_smarty_tpl->tpl_vars['catalogue']->value['lignes']['ordre'][$_smarty_tpl->getVariable('smarty')->value['section']['ligne_index']['index']]['id-ligne'];?>
" class="produits">
					
					<?php if (!empty($_smarty_tpl->tpl_vars['catalogue']->value['produits']['ordre'])){?><?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['produit_index'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['produit_index']);
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
						<li id="produit-<?php echo $_smarty_tpl->tpl_vars['catalogue']->value['produits']['ordre'][$_smarty_tpl->getVariable('smarty')->value['section']['produit_index']['index']]['id-produit'];?>
">
							<div class="produit-lib ui-state-default">
								<span class="ui-icon ui-icon-grip-dotted-vertical grip"></span>
								<span><?php echo $_smarty_tpl->tpl_vars['catalogue']->value['produits']['ordre'][$_smarty_tpl->getVariable('smarty')->value['section']['produit_index']['index']]['lib-produit'];?>
</span>
								
								<span class="actions">
									<span class="groupe">
										<span class="ui-icon ui-icon-image"></span>
									</span>
					
									<span class="groupe">
										<a href="/admin/pages/produit-<?php echo $_smarty_tpl->tpl_vars['catalogue']->value['produits']['ordre'][$_smarty_tpl->getVariable('smarty')->value['section']['produit_index']['index']]['id-produit'];?>
.html"><span title="Éditer ce produit ?" class="ui-icon ui-icon-pencil"></span></a>
										
										<span class="catalogue-produits-delete ui-icon ui-icon-trash" data-id="<?php echo $_smarty_tpl->tpl_vars['catalogue']->value['produits']['ordre'][$_smarty_tpl->getVariable('smarty')->value['section']['produit_index']['index']]['id-produit'];?>
"></span>
										<form id="catalogue-produits-delete-form-<?php echo $_smarty_tpl->tpl_vars['catalogue']->value['produits']['ordre'][$_smarty_tpl->getVariable('smarty')->value['section']['produit_index']['index']]['id-produit'];?>
" class="catalogue-lignes-delete-form form-modal" data-id="<?php echo $_smarty_tpl->tpl_vars['catalogue']->value['produits']['ordre'][$_smarty_tpl->getVariable('smarty')->value['section']['produit_index']['index']]['id-produit'];?>
" data-lib="<?php echo $_smarty_tpl->tpl_vars['catalogue']->value['produits']['ordre'][$_smarty_tpl->getVariable('smarty')->value['section']['produit_index']['index']]['lib-produit'];?>
" data-token="<?php echo $_smarty_tpl->tpl_vars['catalogue']->value['produits']['ordre'][$_smarty_tpl->getVariable('smarty')->value['section']['produit_index']['index']]['token'];?>
">
											<div class="messages ui-state-highlight">
												<p><span class="ui-icon ui-icon-info"></span>Cette suppression est définitive.</p>
											</div>	
										</form>
										
										
									</span>
								</span>
																
							</div>
						
						</li>
						
						<?php }?>
					
					<?php endfor; endif; ?><?php }?>
					
					</ul>
				</li>
				
				<?php }?>
			
			<?php endfor; endif; ?><?php }?>
			
			</ul>
			
		</li>
		
		<?php endfor; endif; ?>
	</ul>





</div>




<script>
	$(function() {

		$("#catalogue ul").each(function(index) {

			var liste_id = "#"+$(this).attr("id");
			
			$(this).sortable({
				axis			: 	'y',
				handle		:	'.grip',
				placeholder	:	"ui-state-highlight",
				start		:	function(e, ui){	ui.placeholder.height(ui.item.height());	},
				create		:	function(event, ui){	 t = setTimeout(function() { 	ordreUpdate(event, ui, liste_id);}, 100*index)},
				update		:	function(event, ui){								ordreUpdate(event, ui, liste_id);}
			});			
		});

	});
	
	function ordreUpdate(event, ui, liste_id) {
		
		order = new Array();
		
		var liste = $(liste_id);
		
		if(liste.hasClass("lignes")){
			
			liste.children('li').each(function(index) {
				id = $(this).attr("id");
				id = id.split('-')[1];
		  		order.push(id);
			}); 

			datas = "order[]="+order.join("&order[]=");	
					
			$.ajax({
				async		:	true,
				cache		:	false,
				data			: 	datas,
				dataType		:	"json",
				type			: 	"POST",
				url			: 	"/admin/ajax/catalogue.lignes.order.js",
				success		:	function(msg){	}
			});
			
		}

		if(liste.hasClass("produits")){
			
			liste.children('li').each(function(index) {
				id = $(this).attr("id");
				id = id.replace("produit-", "");
		  		order.push(id);
			}); 

			datas = "order[]="+order.join("&order[]=");	
					
			$.ajax({
				async		:	true,
				cache		:	false,
				data			: 	datas,
				dataType		:	"json",
				type			: 	"POST",
				url			: 	"/admin/ajax/catalogue.produits.order.js",
				success		:	function(msg){	}
			});
			
		}
		
		
	}		
	
	
</script><?php }} ?>