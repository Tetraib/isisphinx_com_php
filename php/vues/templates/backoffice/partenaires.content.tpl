<div id="page" class="partenaires">

	<div id="tools" class="clearfix">
		<button class="partenaires-add" type="button">Ajouter un partenaire</button>
		<form id="partenaires-add-form" class="partenaires-add-form form-modal">
			<input type="hidden" id="partenaire-id" name="partenaire-id" value="{$smarty.session.token|sha1}" />	
		</form>
		
	</div>

	<ul id="partenaires">

		{if !empty($datas['liste']['ordre'])}
	
			{section name=index loop=$datas['liste']['ordre']}
			<li id="partenaire_{$datas['liste']['ordre'][index]['id-partenaire']}" class="partenaire clearfix">
				
				<span class="ui-icon ui-icon-grip-dotted-vertical grip"></span>
				
				<div class="groupe">
					<a href="/admin/partenaires/{$datas['liste']['ordre'][index]['id-partenaire']}.html"><span class="ui-icon ui-icon-pencil"></span></a>
					<span class="partenaires-delete ui-icon ui-icon-trash" data-id="{$datas['liste']['ordre'][index]['id-partenaire']}"></span>
					<form id="partenaires-delete-form-{$datas['liste']['ordre'][index]['id-partenaire']}" class="partenaires-delete-form form-modal" data-id="{$datas['liste']['ordre'][index]['id-partenaire']}" data-token="{$datas['liste']['ordre'][index]['token']}">
						<div class="messages ui-state-highlight"><p><span class="ui-icon ui-icon-info"></span>Cette suppression est définitive.</p></div>	
					</form>
				</div>
							
				<div class="logo">{if $datas['liste']['ordre'][index]['image-partenaire'] neq ""}{$datas['liste']['ordre'][index]['image-partenaire']|stripslashes}{else}<img src="/medias/backoffice/partenaire-vide.gif" />{/if}</div>
				<div class="infos">{$datas['liste']['ordre'][index]['texte-partenaire']|stripslashes}</div>
		
			</li>
			{/section}
		
		{/if}
			
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
	
	
</script>