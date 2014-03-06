<?php /* Smarty version Smarty-3.1.7, created on 2014-03-04 23:16:56
         compiled from "vues/templates/front/partenaires.content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1142631609531650d844d539-93726571%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a61a81710be10edb4fafcea51e377ed51161adfd' => 
    array (
      0 => 'vues/templates/front/partenaires.content.tpl',
      1 => 1329083799,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1142631609531650d844d539-93726571',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'datas' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_531650d84e7a9',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_531650d84e7a9')) {function content_531650d84e7a9($_smarty_tpl) {?><div id="page" class="partenaires">

	<div class="clear">
	
		<div class="logo">
			<img src="/medias/front/logo.gif" alt="IsiSphinx" />
		</div>

		<div class="content">
			<h1>Partenaires</h1>
		</div>
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
		<li class="partenaire clear">
												
			<div class="logo"><?php echo stripslashes($_smarty_tpl->tpl_vars['datas']->value['liste']['ordre'][$_smarty_tpl->getVariable('smarty')->value['section']['index']['index']]['image-partenaire']);?>
</div>
			<div class="infos"><?php echo stripslashes($_smarty_tpl->tpl_vars['datas']->value['liste']['ordre'][$_smarty_tpl->getVariable('smarty')->value['section']['index']['index']]['texte-partenaire']);?>
</div>
	
		</li>
		<?php endfor; endif; ?>
		
		<?php }?>
	
	</ul>


</div><?php }} ?>