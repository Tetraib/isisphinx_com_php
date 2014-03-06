<div id="page" class="page-edit">

	
	<ul id="catalogue">
	
		{section name="index" loop=$page['institutionnelles']}
	
		<li>
			<div class="gamme-lib ui-state-default">
		
				<span class="lib color-medisphinx">
					{$page['institutionnelles'][index]['lib']}
				</span>
					
				<span class="actions">
							
					<span class="groupe ui-corner-all">
						<span class="ui-icon ui-icon-image"></span>
					</span>
					
					<span class="groupe ui-corner-all">
						<a href="/admin/pages/page-{$page['institutionnelles'][index]['id']}.html"><span class="ui-icon ui-icon-pencil" title="Éditer cette page ?"></span></a>
					</span>
						
				</span>
									
				<span class="actions actions-messages">
					<span class="groupe ui-state-error ui-corner-all">
							<span class="ui-icon ui-icon-alert" title="Erreurs"></span>
					</span>
				</span>
							
			</div>
		
		</li>
	
		{/section}
	
	</ul>

</div>