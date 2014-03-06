<?php /* Smarty version Smarty-3.1.7, created on 2014-03-04 12:17:48
         compiled from "vues/templates/backoffice/pages.content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9702355175315b65c108057-53843937%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6a3930f8cf04710cbc7bdb041906f3787eef5b71' => 
    array (
      0 => 'vues/templates/backoffice/pages.content.tpl',
      1 => 1325683208,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9702355175315b65c108057-53843937',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'page' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5315b65c16779',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5315b65c16779')) {function content_5315b65c16779($_smarty_tpl) {?><div id="page" class="page-edit">

	
	<ul id="catalogue">
	
		<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']["index"])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']["index"]);
$_smarty_tpl->tpl_vars['smarty']->value['section']["index"]['name'] = "index";
$_smarty_tpl->tpl_vars['smarty']->value['section']["index"]['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['page']->value['institutionnelles']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']["index"]['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']["index"]['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["index"]['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']["index"]['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']["index"]['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["index"]['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']["index"]['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']["index"]['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']["index"]['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["index"]['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']["index"]['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']["index"]['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']["index"]['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']["index"]['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']["index"]['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["index"]['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']["index"]['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']["index"]['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']["index"]['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']["index"]['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']["index"]['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']["index"]['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']["index"]['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["index"]['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']["index"]['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["index"]['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']["index"]['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']["index"]['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["index"]['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']["index"]['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']["index"]['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']["index"]['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']["index"]['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']["index"]['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']["index"]['total']);
?>
	
		<li>
			<div class="gamme-lib ui-state-default">
		
				<span class="lib color-medisphinx">
					<?php echo $_smarty_tpl->tpl_vars['page']->value['institutionnelles'][$_smarty_tpl->getVariable('smarty')->value['section']['index']['index']]['lib'];?>

				</span>
					
				<span class="actions">
							
					<span class="groupe ui-corner-all">
						<span class="ui-icon ui-icon-image"></span>
					</span>
					
					<span class="groupe ui-corner-all">
						<a href="/admin/pages/page-<?php echo $_smarty_tpl->tpl_vars['page']->value['institutionnelles'][$_smarty_tpl->getVariable('smarty')->value['section']['index']['index']]['id'];?>
.html"><span class="ui-icon ui-icon-pencil" title="Éditer cette page ?"></span></a>
					</span>
						
				</span>
									
				<span class="actions actions-messages">
					<span class="groupe ui-state-error ui-corner-all">
							<span class="ui-icon ui-icon-alert" title="Erreurs"></span>
					</span>
				</span>
							
			</div>
		
		</li>
	
		<?php endfor; endif; ?>
	
	</ul>

</div><?php }} ?>