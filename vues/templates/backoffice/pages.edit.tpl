<div id="page" class="page-edit">

	<form id="metas-edit" name="metas-edit" class="form-edit">

		<input type="hidden" id="id-page-meta" name="id-page-meta" value="{$datas['liste']['id-page']}" />

		<label>Meta Titre</label>
		<input type="text" id="titre-meta" name="titre-meta" value="{$datas['liste']['titre-meta']}" />

		<label>Meta Description</label>
		<input type="text" id="description-meta" name="description-meta" value="{$datas['liste']['description-meta']}" />

		<label>Meta Mots Clés</label>
		<input type="text" id="keywords-meta" name="keywords-meta" value="{$datas['liste']['keywords-meta']}" />

		<button type="submit">Sauvegarder</button>

	</form>



	<form id="pages-edit" name="pages-edit" class="form-edit">

		<input type="hidden" id="id-page" name="id-page" value="{$datas['liste']['id-page']}" />

		<label>Titre</label>
<textarea id="titre-page" name="titre-page">
{$datas['liste']['titre-page']}</textarea>
	
		{if $datas['liste']['type'] == "produit"}
		<label>Nom de fichier (utilisé pour les urls et nom de fichiers)</label>
		<input type="text" id="titre-page-u" name="titre-page-u" value="{$datas['liste']['titre-page']|s2u}" readonly="readonly" class="disabled" />
		{/if}
		
		{if $datas['liste']['type'] == "ligne"}
		<label>Nom de fichier (utilisé pour les urls et nom de fichiers)</label>
		<input type="text" id="titre-page-u" name="titre-page-u" value="{$datas['liste']['titre-page']|s2u}" readonly="readonly" class="disabled" />
		{/if}
		
		<label>Sous titre</label>
		<input type="text" id="soustitre-page" name="soustitre-page" value="{$datas['liste']['soustitre-page']}" />

		<label>Paragraphes</label>
		<textarea id="paragraphes-page" name="paragraphes-page" >{$datas['liste']['paragraphes-page']}</textarea>
			
		<label>Texte</label>
		<textarea id="texte-page" name="texte-page" >{$datas['liste']['texte-page']}</textarea>
		
		{if $datas['liste']['type'] == "produit"}
		<label class="descriptif">Descriptif</label>
		<textarea id="descriptif-page" name="descriptif-page" class="descriptif" >{$datas['liste']['descriptif-page']}</textarea>
		{/if}
	
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
<script type="text/javascript" src="/js/ckeditor/adapters/jquery.js"></script>			