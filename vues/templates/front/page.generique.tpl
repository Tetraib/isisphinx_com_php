<div id="page" class="{$page['class']}">

	<div id="fiche" class="partie clear">
		<div class="sidebar">
			
			<div class="logo">
				<img src="/medias/front/logo.gif" alt="IsiSphinx" />
			</div>
			
			<div class="paragraphes">{$datas['liste']['paragraphes-page']}</div>
			
		</div>
		
		<div class="content">
		
			<div class="titre">
				<h1 class="color-{$page['class']}">
					{$datas['liste']['titre-page']}
					{if $datas['liste']['soustitre-page'] neq ""}<span>{$datas['liste']['soustitre-page']}</span>{/if}
				</h1>
			</div>	
			
			<div class="contenu">
				{$datas['liste']['texte-page']}
			</div>
	
		</div>
	
	</div>

	
	
	{if $page['type'] eq "gamme"}
	<div id="gamme-liste" class="partie clear">
				
		<p class="titre">
			<span class="lib color-{$page['class']}">{$datas['gamme']['lib-gamme']}</span>
		</p>
		
		
	
		<div >
			
					{section name=gamme_index loop=$catalogue['gammes']['ordre']}
												
						{if $catalogue['gammes']['ordre'][gamme_index]['id-gamme'] eq $datas['gamme']['id-gamme']}						
												
						<div>
						
							{assign var="index_ul" value="0"}
							{assign var="index_fait" value="0"}
							{assign var="index_switch" value="0"}

							<ul id="ul-{$index_ul}" class="element is_3_{if $catalogue['gammes']['count'][$catalogue['gammes']['ordre'][gamme_index]['id-gamme']]-$index_fait>5}5{else}{$catalogue['gammes']['count'][$catalogue['gammes']['ordre'][gamme_index]['id-gamme']]}{/if} clear">
							
							{assign var="index_ligne" value="0"}
							{section name=ligne_index loop=$catalogue['lignes']['ordre']}
				
								{if $catalogue['lignes']['ordre'][ligne_index]['id-gamme-ligne'] eq $catalogue['gammes']['ordre'][gamme_index]['id-gamme']}

									{if $index_fait == 5}
										{assign var="index_fait" value="0"}
										{assign var="index_ul" value=$index_ul+1}
										</ul>
										<ul id="ul-{$index_ul}" class="element is_3_{if $catalogue['gammes']['count'][$catalogue['gammes']['ordre'][gamme_index]['id-gamme']]-$index_fait>5}5{else}{$catalogue['gammes']['count'][$catalogue['gammes']['ordre'][gamme_index]['id-gamme']]}{/if} clear">
									{/if}
		

								<li class="ligne-{$index_ligne}">
									{$catalogue['lignes']['ordre'][ligne_index]['lib-ligne']}
									<ul>
									
									{section name=produit_index loop=$catalogue['produits']['ordre']}
						
										{if $catalogue['produits']['ordre'][produit_index]['id-ligne-produit'] eq $catalogue['lignes']['ordre'][ligne_index]['id-ligne']}
										<li>
											<a href="/produits/{$catalogue['produits']['ordre'][produit_index]['id-produit']}-{$catalogue['produits']['ordre'][produit_index]['lib-produit']|s2u}.html">{$catalogue['produits']['ordre'][produit_index]['lib-produit']}</a>
										
										</li>
										
										{/if}
									
									{/section}
									</ul>
								</li>
								
								{assign var="index_ligne" value=$index_ligne+1}
								{assign var="index_fait" value=$index_fait+1}
								{/if}
																												
							{/section}
						
							</ul>
						</div>
							
						{/if}	
													
					{/section}


		</div>
				
	</div>
	{/if}
	



	
	{if $page['type'] eq "ligne"}
	<div id="gamme-liste" class="partie clear">
				
		<p class="titre">
			<span class="lib color-{$page['class']}">{$datas['gamme']['lib-gamme']}</span>
		</p>
		
		
	
		<div >
			
					{section name=gamme_index loop=$catalogue['gammes']['ordre']}
												
						{if $catalogue['gammes']['ordre'][gamme_index]['id-gamme'] eq $datas['gamme']['id-gamme']}						
												
						<div>
						
							{assign var="index_ul" value="0"}
							{assign var="index_fait" value="0"}
							{assign var="index_switch" value="0"}

							<ul id="ul-{$index_ul}" class="element is_3_1 clear">
							
							{assign var="index_ligne" value="0"}
							{section name=ligne_index loop=$catalogue['lignes']['ordre']}
							
				
								{if $catalogue['lignes']['ordre'][ligne_index]['id-ligne'] eq $datas['ligne']['id-ligne']}

									{if $index_fait == 5}
										{assign var="index_fait" value="0"}
										{assign var="index_ul" value=$index_ul+1}
										</ul>
										<ul id="ul-{$index_ul}" class="element is_3_1 clear">
									{/if}
		

								<li class="ligne-{$index_ligne}">
									{$catalogue['lignes']['ordre'][ligne_index]['lib-ligne']}
									<ul>
									
									{section name=produit_index loop=$catalogue['produits']['ordre']}
						
										{if $catalogue['produits']['ordre'][produit_index]['id-ligne-produit'] eq $catalogue['lignes']['ordre'][ligne_index]['id-ligne']}
										<li>
											<a href="/produits/{$catalogue['produits']['ordre'][produit_index]['id-produit']}-{$catalogue['produits']['ordre'][produit_index]['lib-produit']|s2u}.html">{$catalogue['produits']['ordre'][produit_index]['lib-produit']}</a>
										
										</li>
										
										{/if}
									
									{/section}
									</ul>
								</li>
								
								{assign var="index_ligne" value=$index_ligne+1}
								{assign var="index_fait" value=$index_fait+1}
								{/if}
																												
							{/section}
						
							</ul>
						</div>
							
						{/if}	
													
					{/section}


		</div>
				
	</div>
	{/if}
	



	
	{if $page['type'] eq "produit" && !empty($datas['liste']['descriptif-page'])}
	<div id="descriptif" class="partie clear">
		
		<div class="sidebar">
			
			<div class="paragraphes"><p class="gris">DÉSCRIPTIF</p></div>
			
		</div>
		
		<div class="content">
		
			<ul class="liste">
				{$datas['liste']['descriptif-page']|toList}
			</ul>
	
			{if $datas['produit']['fiche'] neq ""}
			<a href="/medias/uploads/fiches/fiche-{$datas['produit']['fiche']}" class="fiche-btn"><img src="/medias/front/fiche-btn.gif" alt="Téléchargez cette fiche en version imprimable" /></a>
			{/if}
		</div>
		
	</div>
	{/if}



</div>