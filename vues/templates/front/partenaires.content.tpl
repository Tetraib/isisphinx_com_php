<div id="page" class="partenaires">

	<div class="clear">
	
		<div class="logo">
			<img src="/medias/front/logo.gif" alt="IsiSphinx" />
		</div>

		<div class="content">
			<h1>Partenaires</h1>
		</div>
	</div>

	<ul id="partenaires">
	
		{if !empty($datas['liste']['ordre'])}
		
		{section name=index loop=$datas['liste']['ordre']}
		<li class="partenaire clear">
												
			<div class="logo">{$datas['liste']['ordre'][index]['image-partenaire']|stripslashes}</div>
			<div class="infos">{$datas['liste']['ordre'][index]['texte-partenaire']|stripslashes}</div>
	
		</li>
		{/section}
		
		{/if}
	
	</ul>


</div>