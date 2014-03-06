<?php /* Smarty version Smarty-3.1.7, created on 2014-03-02 06:07:03
         compiled from "vues/templates/backoffice/partenaires.content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5171219385312bc77366262-46502793%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3215af57f60f3e01c448c1a279132744de152c3b' => 
    array (
      0 => 'vues/templates/backoffice/partenaires.content.tpl',
      1 => 1326064908,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5171219385312bc77366262-46502793',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'datas' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5312bc7752404',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5312bc7752404')) {function content_5312bc7752404($_smarty_tpl) {?><div id="page" class="partenaires">

	<div id="tools" class="clearfix">
		<button class="partenaires-add" type="button">Ajouter un partenaire</button>
		<form id="partenaires-add-form" class="partenaires-add-form form-modal">
			<input type="hidden" id="partenaire-id" name="partenaire-id" value="<?php echo sha1($_SESSION['token']);?>
" />	
		</form>
		
	</div>

	<ul id="partenaires">

		<?php if (!empty($_smarty_tpl->tpl_vars['datas']->value['liste']['ordre'])){?>
	
			<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['index'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['index']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['index']['name'] = 'index';
$_smarty_tpl->tpl_vars['smarty']->value['section']['index']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['datas']->value['liste']['ordre']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['index']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['index']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['index']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['index']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['index']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['index']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['index']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['index']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['index']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['index']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['index']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['index']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['index']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['index']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['index']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['index']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['index']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['index']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['index']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['index']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['index']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['index']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['index']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['index']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['index']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['index']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['index']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['index']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['index']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['index']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['index']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['index']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['index']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['index']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['index']['total']);
?>
			<li id="partenaire_<?php echo $_smarty_tpl->tpl_vars['datas']->value['liste']['ordre'][$_smarty_tpl->getVariable('smarty')->value['section']['index']['index']]['id-partenaire'];?>
" class="partenaire clearfix">
				
				<span class="ui-icon ui-icon-grip-dotted-vertical grip"></span>
				
				<div class="groupe">
					<a href="/admin/partenaires/<?php echo $_smarty_tpl->tpl_vars['datas']->value['liste']['ordre'][$_smarty_tpl->getVariable('smarty')->value['section']['index']['index']]['id-partenaire'];?>
.html"><span class="ui-icon ui-icon-pencil"></span></a>
					<span class="partenaires-delete ui-icon ui-icon-trash" data-id="<?php echo $_smarty_tpl->tpl_vars['datas']->value['liste']['ordre'][$_smarty_tpl->getVariable('smarty')->value['section']['index']['index']]['id-partenaire'];?>
"></span>
					<form id="partenaires-delete-form-<?php echo $_smarty_tpl->tpl_vars['datas']->value['liste']['ordre'][$_smarty_tpl->getVariable('smarty')->value['section']['index']['index']]['id-partenaire'];?>
" class="partenaires-delete-form form-modal" data-id="<?php echo $_smarty_tpl->tpl_vars['datas']->value['liste']['ordre'][$_smarty_tpl->getVariable('smarty')->value['section']['index']['index']]['id-partenaire'];?>
" data-token="<?php echo $_smarty_tpl->tpl_vars['datas']->value['liste']['ordre'][$_smarty_tpl->getVariable('smarty')->value['section']['index']['index']]['token'];?>
">
						<div class="messages ui-state-highlight"><p><span class="ui-icon ui-icon-info"></span>Cette suppression est définitive.</p></div>	
					</form>
				</div>
							
				<div class="logo"><?php if ($_smarty_tpl->tpl_vars['datas']->value['liste']['ordre'][$_smarty_tpl->getVariable('smarty')->value['section']['index']['index']]['image-partenaire']!=''){?><?php echo stripslashes($_smarty_tpl->tpl_vars['datas']->value['liste']['ordre'][$_smarty_tpl->getVariable('smarty')->value['section']['index']['index']]['image-partenaire']);?>
<?php }else{ ?><img src="/medias/backoffice/partenaire-vide.gif" /><?php }?></div>
				<div class="infos"><?php echo stripslashes($_smarty_tpl->tpl_vars['datas']->value['liste']['ordre'][$_smarty_tpl->getVariable('smarty')->value['section']['index']['index']]['texte-partenaire']);?>
</div>
		
			</li>
			<?php endfor; endif; ?>
		
		<?php }?>
			
	</ul>


</div>





<script>
	$(function() {

		$("#partenaires").sortable({
				axis			: 	'y',
				handle		:	'.grip',
				placeholder	:	"ui-state-highlight",
				start		:	function(e, ui){	ui.placeholder.height(ui.item.height());	},
				create		:	function(event, ui){	ordreUpdate(event, ui);},
				update		:	function(event, ui){	ordreUpdate(event, ui);}
		});			
	});

	
	function ordreUpdate(event, ui) {
		

		datas = $("#partenaires").sortable( "serialize");	
				
		$.ajax({
			async		:	true,
			cache		:	false,
			data			: 	datas,
			dataType		:	"json",
			type			: 	"POST",
			url			: 	"/admin/ajax/partenaires.order.js",
			success		:	function(msg){	}
		});
		
		
	}		
	
	
</script><?php }} ?>