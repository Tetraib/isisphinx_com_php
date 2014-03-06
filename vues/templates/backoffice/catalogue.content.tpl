<div>


	<ul id="catalogue" class="gammes">
	
		{section name=gamme_index loop=$catalogue['gammes']['ordre']}
		<li id="gamme-{$catalogue['gammes']['ordre'][gamme_index]['id-gamme']}">
			<div class="gamme-lib ui-state-default">
				<span class="lib color-{$catalogue['gammes']['ordre'][gamme_index]['id-gamme']}">
					<img class="puce" src="/medias/front/menu-puce-{$catalogue['gammes']['ordre'][gamme_index]['id-gamme']}.png" align="&bull;" />{$catalogue['gammes']['ordre'][gamme_index]['lib-gamme']}
				</span>
				
				<span class="actions">
	
					
					<span class="groupe">
						<span class="ui-icon ui-icon-image"></span>
					</span>
					
					<span class="groupe">
						<span class="catalogue-lignes-add ui-icon ui-icon-plus" data-id="{$catalogue['gammes']['ordre'][gamme_index]['id-gamme']}"></span>
						<form id="catalogue-lignes-add-form-{$catalogue['gammes']['ordre'][gamme_index]['id-gamme']}" class="catalogue-lignes-add-form form-modal" data-id="{$catalogue['gammes']['ordre'][gamme_index]['id-gamme']}" data-lib="{$catalogue['gammes']['ordre'][gamme_index]['lib-gamme']}">
							<label for="catalogue-lignes-add-form-{$catalogue['gammes']['ordre'][gamme_index]['id-gamme']}-libelle">Libellé (optionnel) :</label>
							<input id="catalogue-lignes-add-form-{$catalogue['gammes']['ordre'][gamme_index]['id-gamme']}-libelle" type="text" value="" />		
						</form>
					</span>

					<span class="groupe">
						<a href="/admin/pages/gamme-{$catalogue['gammes']['ordre'][gamme_index]['id-gamme']}.html"><span title="Éditer cette gamme ?" class="ui-icon ui-icon-pencil"></span></a>
					</span>
					
					
				</span>
								
				<span class="actions actions-messages">
					<span class="groupe ui-state-error">
						<span title="Erreurs" class="ui-icon ui-icon-alert"></span>
					</span>
					
				</span>
								
			</div>
			
			<ul id="ul-gamme-{$catalogue['gammes']['ordre'][gamme_index]['id-gamme']}" class="lignes" data-id="">
			
			{if !empty($catalogue['lignes']['ordre'])}{section name=ligne_index loop=$catalogue['lignes']['ordre']}

				{if $catalogue['lignes']['ordre'][ligne_index]['id-gamme-ligne'] eq $catalogue['gammes']['ordre'][gamme_index]['id-gamme']}
				<li id="ligne-{$catalogue['lignes']['ordre'][ligne_index]['id-ligne']}">
					<div class="ligne-lib ui-state-default">
						<span class="ui-icon ui-icon-grip-dotted-vertical grip"></span>
						
						{if $catalogue['lignes']['ordre'][ligne_index]['lib-ligne'] neq ""}<span class="lib">{$catalogue['lignes']['ordre'][ligne_index]['lib-ligne']}</span>
						{else}<span class="lib vide">Aucun titre saisi</span>
						{/if}
						
						<span class="actions">
		
							<span class="groupe">
								<span class="catalogue-produits-add ui-icon ui-icon-plus" data-id="{$catalogue['lignes']['ordre'][ligne_index]['id-ligne']}"></span>
								<form id="catalogue-produits-add-form-{$catalogue['lignes']['ordre'][ligne_index]['id-ligne']}" class="catalogue-produit-add-form form-modal" data-id="{$catalogue['lignes']['ordre'][ligne_index]['id-ligne']}" data-lib="{$catalogue['lignes']['ordre'][ligne_index]['lib-ligne']}" data-token="{$catalogue['lignes']['ordre'][ligne_index]['token']}">
									<label for="catalogue-produits-add-form-{$catalogue['lignes']['ordre'][ligne_index]['id-ligne']}-libelle">Libellé (tel qu'affiché dans la fiche produit) :</label>
									<input id="catalogue-produits-add-form-{$catalogue['lignes']['ordre'][ligne_index]['id-ligne']}-libelle" type="text" value="" />		
								</form>
							</span>
							
							<span class="groupe">
								<a href="/admin/pages/ligne-{$catalogue['lignes']['ordre'][ligne_index]['id-ligne']}.html">
									<span class="catalogue-lignes-edit ui-icon ui-icon-pencil" data-id="{$catalogue['lignes']['ordre'][ligne_index]['id-ligne']}"></span>
								</a>

								<span class="catalogue-lignes-delete ui-icon ui-icon-trash" data-id="{$catalogue['lignes']['ordre'][ligne_index]['id-ligne']}"></span>
								<form id="catalogue-lignes-delete-form-{$catalogue['lignes']['ordre'][ligne_index]['id-ligne']}" class="catalogue-lignes-delete-form form-modal" data-id="{$catalogue['lignes']['ordre'][ligne_index]['id-ligne']}" data-lib="{$catalogue['lignes']['ordre'][ligne_index]['lib-ligne']}" data-token="{$catalogue['lignes']['ordre'][ligne_index]['token']}">
									<div class="messages ui-state-highlight"><p><span class="ui-icon ui-icon-info"></span>Cette suppression est définitive.</p></div>	
								</form>
								
							</span>
						
						</span>
								
								
					</div>
			
					<ul id="ul-ligne-{$catalogue['lignes']['ordre'][ligne_index]['id-ligne']}" class="produits">
					
					{if !empty($catalogue['produits']['ordre'])}{section name=produit_index loop=$catalogue['produits']['ordre']}
		
						{if $catalogue['produits']['ordre'][produit_index]['id-ligne-produit'] eq $catalogue['lignes']['ordre'][ligne_index]['id-ligne']}
						<li id="produit-{$catalogue['produits']['ordre'][produit_index]['id-produit']}">
							<div class="produit-lib ui-state-default">
								<span class="ui-icon ui-icon-grip-dotted-vertical grip"></span>
								<span>{$catalogue['produits']['ordre'][produit_index]['lib-produit']}</span>
								
								<span class="actions">
									<span class="groupe">
										<span class="ui-icon ui-icon-image"></span>
									</span>
					
									<span class="groupe">
										<a href="/admin/pages/produit-{$catalogue['produits']['ordre'][produit_index]['id-produit']}.html"><span title="Éditer ce produit ?" class="ui-icon ui-icon-pencil"></span></a>
										
										<span class="catalogue-produits-delete ui-icon ui-icon-trash" data-id="{$catalogue['produits']['ordre'][produit_index]['id-produit']}"></span>
										<form id="catalogue-produits-delete-form-{$catalogue['produits']['ordre'][produit_index]['id-produit']}" class="catalogue-lignes-delete-form form-modal" data-id="{$catalogue['produits']['ordre'][produit_index]['id-produit']}" data-lib="{$catalogue['produits']['ordre'][produit_index]['lib-produit']}" data-token="{$catalogue['produits']['ordre'][produit_index]['token']}">
											<div class="messages ui-state-highlight">
												<p><span class="ui-icon ui-icon-info"></span>Cette suppression est définitive.</p>
											</div>	
										</form>
										
										
									</span>
								</span>
																
							</div>
						
						</li>
						
						{/if}
					
					{/section}{/if}
					
					</ul>
				</li>
				
				{/if}
			
			{/section}{/if}
			
			</ul>
			
		</li>
		
		{/section}
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
	
	
</script>