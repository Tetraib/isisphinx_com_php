<div id="page" class="partenaires">

	<form id="partenaires-edit" name="partenaires-edit" class="form-edit">

		<input type="hidden" id="id-partenaire" name="id-partenaire" value="{$datas['liste']['id-partenaire']}" />

		<label>Image</label>
		<textarea id="image-partenaire" name="image-partenaire" >{$datas['liste']['image-partenaire']}</textarea>
		
		<label>Texte</label>
		<textarea id="texte-partenaire" name="texte-partenaire" >{$datas['liste']['texte-partenaire']}</textarea>
			
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
<script type="text/javascript" src="/js/ckeditor/adapters/jquery.js"></script>			