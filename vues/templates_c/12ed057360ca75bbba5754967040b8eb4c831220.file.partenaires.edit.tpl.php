<?php /* Smarty version Smarty-3.1.7, created on 2013-01-02 20:08:05
         compiled from "vues/templates/backoffice/partenaires.edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:111238763550e48595d10446-23397450%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '12ed057360ca75bbba5754967040b8eb4c831220' => 
    array (
      0 => 'vues/templates/backoffice/partenaires.edit.tpl',
      1 => 1326063465,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '111238763550e48595d10446-23397450',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'datas' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_50e48595dadab',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50e48595dadab')) {function content_50e48595dadab($_smarty_tpl) {?><div id="page" class="partenaires">

	<form id="partenaires-edit" name="partenaires-edit" class="form-edit">

		<input type="hidden" id="id-partenaire" name="id-partenaire" value="<?php echo $_smarty_tpl->tpl_vars['datas']->value['liste']['id-partenaire'];?>
" />

		<label>Image</label>
		<textarea id="image-partenaire" name="image-partenaire" ><?php echo $_smarty_tpl->tpl_vars['datas']->value['liste']['image-partenaire'];?>
</textarea>
		
		<label>Texte</label>
		<textarea id="texte-partenaire" name="texte-partenaire" ><?php echo $_smarty_tpl->tpl_vars['datas']->value['liste']['texte-partenaire'];?>
</textarea>
			
		<button type="submit">Sauvegarder</button>
		
	</form>


</div>




<script>

	$(document).ready(function(){
	

		$("#texte-partenaire").ckeditor(function(){}, {
				
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


		$("#image-partenaire").ckeditor(function(){}, {
				
				extraPlugins	: 'autogrow',
			
				filebrowserBrowseUrl 		: '/js/file-browser/index.php?editor=ckeditor',
				filebrowserImageBrowseUrl 	: '/js/file-browser/index.php?editor=ckeditor&filter=image',
	
				toolbar 		:	[
					{ name: 'insert', items : [ 'Image'] },
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