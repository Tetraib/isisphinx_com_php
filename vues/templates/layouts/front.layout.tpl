<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		
        <title>{if $datas['liste']['titre-meta'] neq ""}{$datas['liste']['titre-meta']}{else}Isisphinx{/if}</title>
        <meta name="description" content="{$datas['liste']['description-meta']}" />
        <meta name="keywords" content="{$datas['liste']['keywords-meta']}" />
        
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
					<li class="isisphinx-system{if $page['menu'] eq "isisphinx-system"} selected{/if}"><a href="/">ISISphinx System</a></li>
					<li class="entreprise{if $page['menu'] eq "entreprise"} selected{/if}"><a href="/entreprise.html">Entreprise</a></li>
					<li class="partenaires{if $page['menu'] eq "partenaires"} selected{/if}"><a href="/partenaires.html">Partenaires</a></li>
					<li class="contact{if $page['menu'] eq "contact"} selected{/if}"><a href="/contact.html">Contact</a></li>
					<li class="last-child capitalize">Solutions Informatiques Médicales par &amp; pour les médecins</li>
				</ul>
					
				<div id="slides">

					<a id="slides-mask-a" href="{$page['slides'][0]['url']}"><img id="slides-mask" src="/medias/front/slide-mask.png" alt="&nbsp;" /></a>
				
					<div class="slides_container">
						{section name=index loop=$page['slides']}						
						<div id="slide-{$smarty.section.index.index+1}" class="slide">
							<a href="{$page['slides'][index]['url']}"><img src="/medias/uploads/slides/{$page['slides'][index]['image']}" alt="&nbsp;" /></a>
						</div>
						{/section}
					</div>
				</div>
			</div>
				
			<div id="menu-holder">
					
				<div id="menu-wrap">	
					<ul id="menu" class="clear">
						<li id="menu-medisphinx"{if $page['menu'] eq "medisphinx"} class="selected"{/if}>
							<a href="/gammes/medisphinx.html" >
								{if $page['menu'] eq "medisphinx"}			<img class="menu-puce-selected" src="/medias/front/menu-puce-selected.png" alt="&bull;" />
								{else}								<img class="menu-puce-medisphinx" src="/medias/front/menu-puce-medisphinx.png" alt="&bull;" />
								{/if}
								MediSphinx
							</a>
						</li>
						<li id="menu-isisinformatique"{if $page['menu'] eq "isisinformatique"} class="selected"{/if}>
							<a href="/gammes/isisinformatique.html" >
								{if $page['menu'] eq "isisinformatique"}	<img class="menu-puce-selected" src="/medias/front/menu-puce-selected.png" alt="&bull;" />
								{else}								<img class="menu-puce-isisinformatique" src="/medias/front/menu-puce-isisinformatique.png" alt="&bull;" />
								{/if}
								IsisInformatique
							</a>
						</li>
						<li id="menu-isisphone"{if $page['menu'] eq "isisphone"} class="selected"{/if}>
							<a href="/gammes/isisphone.html" >
								{if $page['menu'] eq "isisphone"}			<img class="menu-puce-selected" src="/medias/front/menu-puce-selected.png" alt="&bull;" />
								{else}								<img class="menu-puce-isisphone" src="/medias/front/menu-puce-isisphone.png" alt="&bull;" />
								{/if}
								IsisPhone
							</a>
						</li>
						<li id="menu-isisdesign"{if $page['menu'] eq "isisdesign"} class="selected"{/if}>
							<a href="/gammes/isisdesign.html" >
								{if $page['menu'] eq "isisdesign"}			<img class="menu-puce-selected" src="/medias/front/menu-puce-selected.png" alt="&bull;" />
								{else}								<img class="menu-puce-isisdesign" src="/medias/front/menu-puce-isisdesign.png" alt="&bull;" />
								{/if}
								IsisDesign
							</a>
						</li>
						<li id="menu-isiservice" class="last-child{if $page['menu'] eq "isiservice"} selected{/if}">
							<a href="/gammes/isiservice.html" >
								{if $page['menu'] eq "isiservice"}			<img class="menu-puce-selected" src="/medias/front/menu-puce-selected.png" alt="&bull;" />
								{else}								<img class="menu-puce-isiservice" src="/medias/front/menu-puce-isiservice.png" alt="&bull;" />
								{/if}
								IsiService
							</a>
						</li>
					</ul>
					
					<div id="sub-menu" class="clear">
						
						{section name=gamme_index loop=$catalogue['gammes']['ordre']}
						
							{assign var="index_ul" value="0"}
							{assign var="index_fait" value="0"}
							{assign var="index_switch" value="0"}

							<div id="sub-menu-{$catalogue['gammes']['ordre'][gamme_index]['id-gamme']}" class="element is_{$smarty.section.gamme_index.index+1}_{$catalogue['gammes']['count'][$catalogue['gammes']['ordre'][gamme_index]['id-gamme']]}">
								<ul id="sub-menu-{$catalogue['gammes']['ordre'][gamme_index]['id-gamme']}-{$index_ul}" class="sub-menu-{$catalogue['gammes']['ordre'][gamme_index]['id-gamme']}  clear">
								
								{assign var="index_ligne" value="0"}
								{section name=ligne_index loop=$catalogue['lignes']['ordre']}
					
									{if $catalogue['lignes']['ordre'][ligne_index]['id-gamme-ligne'] eq $catalogue['gammes']['ordre'][gamme_index]['id-gamme']}
									
										{if $index_fait == 5}
											{assign var="index_fait" value="0"}
											{assign var="index_ul" value=$index_ul+1}
											</ul>
											<ul id="sub-menu-{$catalogue['gammes']['ordre'][gamme_index]['id-gamme']}-{$index_ul}" class="sub-menu-{$catalogue['gammes']['ordre'][gamme_index]['id-gamme']}  clear">
										{/if}
									
									<li class="ligne-{$index_ligne}">
										<a href="/lignes/{$catalogue['lignes']['ordre'][ligne_index]['id-ligne']}-{$catalogue['lignes']['ordre'][ligne_index]['lib-ligne']|s2u}.html">{$catalogue['lignes']['ordre'][ligne_index]['lib-ligne']|upper|nl2br}</a>
								
										<ul>
										
										{section name=produit_index loop=$catalogue['produits']['ordre']}
							
											{if $catalogue['produits']['ordre'][produit_index]['id-ligne-produit'] eq $catalogue['lignes']['ordre'][ligne_index]['id-ligne']}
											<li>
												<a href="/produits/{$catalogue['produits']['ordre'][produit_index]['id-produit']}-{$catalogue['produits']['ordre'][produit_index]['lib-produit']|s2u}.html">{$catalogue['produits']['ordre'][produit_index]['lib-produit']|upper}</a>
											
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
							
							
														
						{/section}

					</div>
					
				</div>
			</div>	
					
					
			{include file=$page['tpl-id']}
						
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
