<?php /* Smarty version Smarty-3.1.7, created on 2014-03-04 12:35:54
         compiled from "vues/templates/backoffice/pages.edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10616195875315ba9a351dd2-16018016%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '32ef91f996d2c4724a64a0545b1811481654a8cc' => 
    array (
      0 => 'vues/templates/backoffice/pages.edit.tpl',
      1 => 1336264447,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10616195875315ba9a351dd2-16018016',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'datas' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5315ba9a52452',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5315ba9a52452')) {function content_5315ba9a52452($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_s2u')) include '/home/isisphin/www/libs/Smarty/plugins/modifier.s2u.php';
?><div id="page" class="page-edit">

	<form id="metas-edit" name="metas-edit" class="form-edit">

		<input type="hidden" id="id-page-meta" name="id-page-meta" value="<?php echo $_smarty_tpl->tpl_vars['datas']->value['liste']['id-page'];?>
" />

		<label>Meta Titre</label>
		<input type="text" id="titre-meta" name="titre-meta" value="<?php echo $_smarty_tpl->tpl_vars['datas']->value['liste']['titre-meta'];?>
" />

		<label>Meta Description</label>
		<input type="text" id="description-meta" name="description-meta" value="<?php echo $_smarty_tpl->tpl_vars['datas']->value['liste']['description-meta'];?>
" />

		<label>Meta Mots Clés</label>
		<input type="text" id="keywords-meta" name="keywords-meta" value="<?php echo $_smarty_tpl->tpl_vars['datas']->value['liste']['keywords-meta'];?>
" />

		<button type="submit">Sauvegarder</button>

	</form>



	<form id="pages-edit" name="pages-edit" class="form-edit">

		<input type="hidden" id="id-page" name="id-page" value="<?php echo $_smarty_tpl->tpl_vars['datas']->value['liste']['id-page'];?>
" />

		<label>Titre</label>
<textarea id="titre-page" name="titre-page">
<?php echo $_smarty_tpl->tpl_vars['datas']->value['liste']['titre-page'];?>
</textarea>
	
		<?php if ($_smarty_tpl->tpl_vars['datas']->value['liste']['type']=="produit"){?>
		<label>Nom de fichier (utilisé pour les urls et nom de fichiers)</label>
		<input type="text" id="titre-page-u" name="titre-page-u" value="<?php echo smarty_modifier_s2u($_smarty_tpl->tpl_vars['datas']->value['liste']['titre-page']);?>
" readonly="readonly" class="disabled" />
		<?php }?>
		
		<?php if ($_smarty_tpl->tpl_vars['datas']->value['liste']['type']=="ligne"){?>
		<label>Nom de fichier (utilisé pour les urls et nom de fichiers)</label>
		<input type="text" id="titre-page-u" name="titre-page-u" value="<?php echo smarty_modifier_s2u($_smarty_tpl->tpl_vars['datas']->value['liste']['titre-page']);?>
" readonly="readonly" class="disabled" />
		<?php }?>
		
		<label>Sous titre</label>
		<input type="text" id="soustitre-page" name="soustitre-page" value="<?php echo $_smarty_tpl->tpl_vars['datas']->value['liste']['soustitre-page'];?>
" />

		<label>Paragraphes</label>
		<textarea id="paragraphes-page" name="paragraphes-page" ><?php echo $_smarty_tpl->tpl_vars['datas']->value['liste']['paragraphes-page'];?>
</textarea>
			
		<label>Texte</label>
		<textarea id="texte-page" name="texte-page" ><?php echo $_smarty_tpl->tpl_vars['datas']->value['liste']['texte-page'];?>
</textarea>
		
		<?php if ($_smarty_tpl->tpl_vars['datas']->value['liste']['type']=="produit"){?>
		<label class="descriptif">Descriptif</label>
		<textarea id="descriptif-page" name="descriptif-page" class="descriptif" ><?php echo $_smarty_tpl->tpl_vars['datas']->value['liste']['descriptif-page'];?>
</textarea>
		<?php }?>
	
		<button type="submit">Sauvegarder</button>
		
	</form>
	
	
</div>



<script>

	$(document).ready(function(){
	

		$("#texte-page").ckeditor(function(){}, {
				
				extraPlugins	: 'autogrow',
			
				filebrowserBrowseUrl 		: '/js/file-browser/index.php?editor=ckeditor',
				filebrowserImageBrowseUrl 	: '/js/file-browser/index.php?editor=ckeditor&filter=image',
				filebrowserFlashBrowseUrl 	: '/js/file-browser/index.php?editor=ckeditor&filter=flash',
	
				toolbar 		:	[
					{ name: 'clipboard', items : [ 'Cut','Copy','Paste','PasteText','PasteFromWord','-','Undo','Redo' ] },
					{ name: 'styles', items : [ 'Format','Styles'] },
					{ name: 'basicstyles', items : [ 'Bold','Italic','Underline','-','RemoveFormat' ] },
					{ name: 'paragraph', items : [ 'NumberedList','BulletedList','-','Blockquote','-','JustifyLeft','JustifyCenter','JustifyRight','JustifyBlock' ] },
					{ name: 'links', items : [ 'Link','Unlink','Anchor' ] },
					{ name: 'insert', items : [ 'Image','HorizontalRule','SpecialChar','PageBreak' ] },
				],
	
				contentsCss 	: '/styles/colors.css',
				format_tags 	: 'h2;h3;p',
				
			
				stylesSet 	: 	[

								    { name : 'titre-medisphinx',   		element : 'h2',		attributes : { 'class' : 'titre-medisphinx' } },
								    { name : 'titre-isisinformatique',   	element : 'h2',		attributes : { 'class' : 'titre-isisinformatique' } },
								    { name : 'titre-isisphone',   			element : 'h2',		attributes : { 'class' : 'titre-isisphone' } },
								    { name : 'titre-isisdesign',   		element : 'h2',		attributes : { 'class' : 'titre-isisdesign' } },
								    { name : 'titre-isiservice',   		element : 'h2',		attributes : { 'class' : 'titre-isiservice' } },

								    { name : 'Moyen',   			element : 'span',		attributes : { 'class' : 'moyen' } },
								    { name : 'Grand',   			element : 'span',		attributes : { 'class' : 'grand' } },
								    { name : 'Tres grand',   		element : 'span',		attributes : { 'class' : 'tres_grand' } }
	
				],
				
				justifyClasses 		: [ 'textAlignLeft', 'textAlignCenter', 'textAlignRight', 'textAlignJustify' ],
				entities				: false,
				ignoreEmptyParagraph	: true,
				startupFocus 			: true,
				
				bodyClass				: "editor editor-texteww"
	
		});	


		$("#paragraphes-page").ckeditor(function(){}, {
				
				extraPlugins	: 'autogrow',
			
				filebrowserBrowseUrl 		: '/js/file-browser/index.php?editor=ckeditor',
				filebrowserImageBrowseUrl 	: '/js/file-browser/index.php?editor=ckeditor&filter=image',
				filebrowserFlashBrowseUrl 	: '/js/file-browser/index.php?editor=ckeditor&filter=flash',
	
				toolbar 		:	[
					{ name: 'clipboard', items : [ 'Cut','Copy','Paste','PasteText','PasteFromWord','-','Undo','Redo' ] },
					{ name: 'styles', items : [ 'Format','Styles'] },
					{ name: 'basicstyles', items : [ 'Bold','Italic','Underline','-','RemoveFormat' ] },
					{ name: 'links', items : [ 'Link','Unlink','Anchor' ] },
					{ name: 'insert', items : [ 'Image','HorizontalRule','SpecialChar','PageBreak' ] },
				],
	
				contentsCss 	: '/styles/colors.css',
				format_tags 	: 'p',
				
			
				stylesSet 	: 	[
								    { name : 'Gris',   			element : 'p',		attributes : { 'class' : 'gris' } }
	
				],
				
				justifyClasses 		: [ 'textAlignLeft', 'textAlignCenter', 'textAlignRight', 'textAlignJustify' ],
				entities				: false,
				ignoreEmptyParagraph	: true,
				startupFocus 			: true,
				
				bodyClass				: "editor editor-paragraphes"
	
		});	

	});

</script>





<script type="text/javascript" src="/js/ckeditor/ckeditor.js"></script>
<script type="text/javascript" src="/js/ckeditor/adapters/jquery.js"></script>			<?php }} ?>