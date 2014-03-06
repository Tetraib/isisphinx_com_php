<?php /* Smarty version Smarty-3.1.7, created on 2014-03-05 06:30:22
         compiled from "vues/templates/layouts/front.layout.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11603064615316b66ee2ff44-40468097%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '54af191c8e763192313dcea146048b624a7d8c46' => 
    array (
      0 => 'vues/templates/layouts/front.layout.tpl',
      1 => 1353677222,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11603064615316b66ee2ff44-40468097',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'datas' => 0,
    'page' => 0,
    'catalogue' => 0,
    'index_ul' => 0,
    'index_fait' => 0,
    'index_ligne' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5316b66f5a47b',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5316b66f5a47b')) {function content_5316b66f5a47b($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_s2u')) include '/home/isisphin/www/libs/Smarty/plugins/modifier.s2u.php';
?><!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		
        <title><?php if ($_smarty_tpl->tpl_vars['datas']->value['liste']['titre-meta']!=''){?><?php echo $_smarty_tpl->tpl_vars['datas']->value['liste']['titre-meta'];?>
<?php }else{ ?>Isisphinx<?php }?></title>
        <meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['datas']->value['liste']['description-meta'];?>
" />
        <meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['datas']->value['liste']['keywords-meta'];?>
" />
        
		<link rel="stylesheet" type="text/css" media="screen" href="/styles/yui-reset-min.css" />
		<link rel="stylesheet" type="text/css" media="screen" href="/styles/screen.css" />
		<link rel="stylesheet" type="text/css" media="screen" href="/styles/colors.css" />
		<link rel="stylesheet" type="text/css" media="screen" href="/styles/fonts/varela-regular/stylesheet.css" />
		
   
        
		<script type="text/javascript" src="/js/jquery.js"></script>	
		<script type="text/javascript" src="/js/ui.front.js"></script>
		
		<script type="text/javascript" src="/js/slides/slides.min.jquery.js"></script>
		<link rel="stylesheet" type="text/css" media="screen" href="/js/slides/css/global.css" />
		
		<script type="text/javascript" src="/js/jquery.textshadow.js"></script>
		<script type="text/javascript" src="/js/jquery.columnizer.min.js"></script>
		<script type="text/javascript" src="/js/jquery.autoclear.js"></script>
		
		<script type="text/javascript">
			var _gaq = _gaq || [];
			_gaq.push(['_setAccount', 'UA-28774374-1']);
			_gaq.push(['_trackPageview']);		
			(function() {
				var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
				ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
				var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
			})();
		</script>
	
	</head>
	
	<body>
		<div id="contenair">
			
			
			
			<div id="header">
				
				<ul id="navigation" class="clear">
					<li class="isisphinx-system<?php if ($_smarty_tpl->tpl_vars['page']->value['menu']=="isisphinx-system"){?> selected<?php }?>"><a href="/">ISISphinx System</a></li>
					<li class="entreprise<?php if ($_smarty_tpl->tpl_vars['page']->value['menu']=="entreprise"){?> selected<?php }?>"><a href="/entreprise.html">Entreprise</a></li>
					<li class="partenaires<?php if ($_smarty_tpl->tpl_vars['page']->value['menu']=="partenaires"){?> selected<?php }?>"><a href="/partenaires.html">Partenaires</a></li>
					<li class="contact<?php if ($_smarty_tpl->tpl_vars['page']->value['menu']=="contact"){?> selected<?php }?>"><a href="/contact.html">Contact</a></li>
					<li class="last-child capitalize">Solutions Informatiques Médicales par &amp; pour les médecins</li>
				</ul>
					
				<div id="slides">

					<a id="slides-mask-a" href="<?php echo $_smarty_tpl->tpl_vars['page']->value['slides'][0]['url'];?>
"><img id="slides-mask" src="/medias/front/slide-mask.png" alt="&nbsp;" /></a>
				
					<div class="slides_container">
						<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['index'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['index']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['index']['name'] = 'index';
$_smarty_tpl->tpl_vars['smarty']->value['section']['index']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['page']->value['slides']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
						<div id="slide-<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['index']['index']+1;?>
" class="slide">
							<a href="<?php echo $_smarty_tpl->tpl_vars['page']->value['slides'][$_smarty_tpl->getVariable('smarty')->value['section']['index']['index']]['url'];?>
"><img src="/medias/uploads/slides/<?php echo $_smarty_tpl->tpl_vars['page']->value['slides'][$_smarty_tpl->getVariable('smarty')->value['section']['index']['index']]['image'];?>
" alt="&nbsp;" /></a>
						</div>
						<?php endfor; endif; ?>
					</div>
				</div>
			</div>
				
			<div id="menu-holder">
					
				<div id="menu-wrap">	
					<ul id="menu" class="clear">
						<li id="menu-medisphinx"<?php if ($_smarty_tpl->tpl_vars['page']->value['menu']=="medisphinx"){?> class="selected"<?php }?>>
							<a href="/gammes/medisphinx.html" >
								<?php if ($_smarty_tpl->tpl_vars['page']->value['menu']=="medisphinx"){?>			<img class="menu-puce-selected" src="/medias/front/menu-puce-selected.png" alt="&bull;" />
								<?php }else{ ?>								<img class="menu-puce-medisphinx" src="/medias/front/menu-puce-medisphinx.png" alt="&bull;" />
								<?php }?>
								MediSphinx
							</a>
						</li>
						<li id="menu-isisinformatique"<?php if ($_smarty_tpl->tpl_vars['page']->value['menu']=="isisinformatique"){?> class="selected"<?php }?>>
							<a href="/gammes/isisinformatique.html" >
								<?php if ($_smarty_tpl->tpl_vars['page']->value['menu']=="isisinformatique"){?>	<img class="menu-puce-selected" src="/medias/front/menu-puce-selected.png" alt="&bull;" />
								<?php }else{ ?>								<img class="menu-puce-isisinformatique" src="/medias/front/menu-puce-isisinformatique.png" alt="&bull;" />
								<?php }?>
								IsisInformatique
							</a>
						</li>
						<li id="menu-isisphone"<?php if ($_smarty_tpl->tpl_vars['page']->value['menu']=="isisphone"){?> class="selected"<?php }?>>
							<a href="/gammes/isisphone.html" >
								<?php if ($_smarty_tpl->tpl_vars['page']->value['menu']=="isisphone"){?>			<img class="menu-puce-selected" src="/medias/front/menu-puce-selected.png" alt="&bull;" />
								<?php }else{ ?>								<img class="menu-puce-isisphone" src="/medias/front/menu-puce-isisphone.png" alt="&bull;" />
								<?php }?>
								IsisPhone
							</a>
						</li>
						<li id="menu-isisdesign"<?php if ($_smarty_tpl->tpl_vars['page']->value['menu']=="isisdesign"){?> class="selected"<?php }?>>
							<a href="/gammes/isisdesign.html" >
								<?php if ($_smarty_tpl->tpl_vars['page']->value['menu']=="isisdesign"){?>			<img class="menu-puce-selected" src="/medias/front/menu-puce-selected.png" alt="&bull;" />
								<?php }else{ ?>								<img class="menu-puce-isisdesign" src="/medias/front/menu-puce-isisdesign.png" alt="&bull;" />
								<?php }?>
								IsisDesign
							</a>
						</li>
						<li id="menu-isiservice" class="last-child<?php if ($_smarty_tpl->tpl_vars['page']->value['menu']=="isiservice"){?> selected<?php }?>">
							<a href="/gammes/isiservice.html" >
								<?php if ($_smarty_tpl->tpl_vars['page']->value['menu']=="isiservice"){?>			<img class="menu-puce-selected" src="/medias/front/menu-puce-selected.png" alt="&bull;" />
								<?php }else{ ?>								<img class="menu-puce-isiservice" src="/medias/front/menu-puce-isiservice.png" alt="&bull;" />
								<?php }?>
								IsiService
							</a>
						</li>
					</ul>
					
					<div id="sub-menu" class="clear">
						
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
						
							<?php $_smarty_tpl->tpl_vars["index_ul"] = new Smarty_variable("0", null, 0);?>
							<?php $_smarty_tpl->tpl_vars["index_fait"] = new Smarty_variable("0", null, 0);?>
							<?php $_smarty_tpl->tpl_vars["index_switch"] = new Smarty_variable("0", null, 0);?>

							<div id="sub-menu-<?php echo $_smarty_tpl->tpl_vars['catalogue']->value['gammes']['ordre'][$_smarty_tpl->getVariable('smarty')->value['section']['gamme_index']['index']]['id-gamme'];?>
" class="element is_<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['gamme_index']['index']+1;?>
_<?php echo $_smarty_tpl->tpl_vars['catalogue']->value['gammes']['count'][$_smarty_tpl->tpl_vars['catalogue']->value['gammes']['ordre'][$_smarty_tpl->getVariable('smarty')->value['section']['gamme_index']['index']]['id-gamme']];?>
">
								<ul id="sub-menu-<?php echo $_smarty_tpl->tpl_vars['catalogue']->value['gammes']['ordre'][$_smarty_tpl->getVariable('smarty')->value['section']['gamme_index']['index']]['id-gamme'];?>
-<?php echo $_smarty_tpl->tpl_vars['index_ul']->value;?>
" class="sub-menu-<?php echo $_smarty_tpl->tpl_vars['catalogue']->value['gammes']['ordre'][$_smarty_tpl->getVariable('smarty')->value['section']['gamme_index']['index']]['id-gamme'];?>
  clear">
								
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
											<ul id="sub-menu-<?php echo $_smarty_tpl->tpl_vars['catalogue']->value['gammes']['ordre'][$_smarty_tpl->getVariable('smarty')->value['section']['gamme_index']['index']]['id-gamme'];?>
-<?php echo $_smarty_tpl->tpl_vars['index_ul']->value;?>
" class="sub-menu-<?php echo $_smarty_tpl->tpl_vars['catalogue']->value['gammes']['ordre'][$_smarty_tpl->getVariable('smarty')->value['section']['gamme_index']['index']]['id-gamme'];?>
  clear">
										<?php }?>
									
									<li class="ligne-<?php echo $_smarty_tpl->tpl_vars['index_ligne']->value;?>
">
										<a href="/lignes/<?php echo $_smarty_tpl->tpl_vars['catalogue']->value['lignes']['ordre'][$_smarty_tpl->getVariable('smarty')->value['section']['ligne_index']['index']]['id-ligne'];?>
-<?php echo smarty_modifier_s2u($_smarty_tpl->tpl_vars['catalogue']->value['lignes']['ordre'][$_smarty_tpl->getVariable('smarty')->value['section']['ligne_index']['index']]['lib-ligne']);?>
.html"><?php echo nl2br(mb_strtoupper($_smarty_tpl->tpl_vars['catalogue']->value['lignes']['ordre'][$_smarty_tpl->getVariable('smarty')->value['section']['ligne_index']['index']]['lib-ligne'], 'UTF-8'));?>
</a>
								
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
.html"><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['catalogue']->value['produits']['ordre'][$_smarty_tpl->getVariable('smarty')->value['section']['produit_index']['index']]['lib-produit'], 'UTF-8');?>
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
							
							
														
						<?php endfor; endif; ?>

					</div>
					
				</div>
			</div>	
					
					
			<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['page']->value['tpl-id'], $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

						
			<div id="footer">
				
				<div id="footer-liens">
					<a href="/liens-utiles.html" class="first">Liens utiles</a>
					<a href="/mentions-legales.html">Mentions légales &amp; crédits</a>
					<a href="/vie-privee.html#">Protection vie privée</a>
				</div>
				
				<div id="footer-telephone">
					<span><img src="/medias/front/icon-telephone.gif" alt="&nbsp;" />STANDARD <span>09 70 40 80 09</span></span>
					<span>SERVICE COMMERCIAL <span>09 70 40 80 09</span></span>
					<span>SERVICE TECHNIQUE <span>09 70 40 80 09</span></span><br />
					<span>SAS ISISPHINX - 180, rue de Bondues - 59160 WAMBRECHIES - FRANCE</span>
				</div>          
				
			</div>
	
		</div>
		
		
	</body>
</html>
<?php }} ?>