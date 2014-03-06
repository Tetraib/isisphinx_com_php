$(document).ready(function(){

	// ##################################################
	// Catalogue > lignes > add
	// ##################################################
		
	$(".catalogue-lignes-add").click(function(){
										   
		form 	= "#catalogue-lignes-add-form-"+$(this).data("id");
		lib 		= $(form).data("lib");

		$(form).dialog({
			buttons: [
				{text: "Ajouter",	click: function() { lignes_add(form); }},
				{text: "Annuler",	click: function() { $(this).dialog("destroy"); }}
			],
			
			autoOpen: true,
			closeOnEscape: true,
			closeText: 'hide',
			draggable: false,
			modal: true,
			position: ["center",100],
			resizable: false,
			title: 'Ajouter une ligne de produits dans la gamme '+lib,
			width: 800
		
		});
	
		$(form).dialog( "open" );
			
	});

	$(".catalogue-lignes-add-form").submit(function(){return false;});


	// ##################################################
	// Catalogue > lignes > delete
	// ##################################################
		
	$(".catalogue-lignes-delete").click(function(){	
																				   
		form 	= "#catalogue-lignes-delete-form-"+$(this).data("id");
		lib 		= $(form).data("lib");
		
		$(form).dialog({
			buttons: [
				{text: "Confirmer",	click: function() { lignes_delete(form); }},
				{text: "Annuler",	click: function() { $(this).dialog("destroy"); }}
			],
			
			autoOpen: true,
			closeOnEscape: true,
			closeText: 'hide',
			draggable: false,
			modal: true,
			position: ["center",100],
			resizable: false,
			title: 'Supprimer la ligne '+lib+' et tous les produits quelle contient ? ',
			width: 800
		
		});
	
		$(form).dialog( "open" );
			
	});	

	$(".catalogue-lignes-delete-form").submit(function(){return false;});


	// ##################################################
	// Catalogue > lignes > edit
	// ##################################################
		
	// ##################################################
	// Catalogue > produits > add
	// ##################################################
		
	$(".catalogue-produits-add").click(function(){
										   
		form 	= "#catalogue-produits-add-form-"+$(this).data("id");
		lib 		= $(form).data("lib");

		$(form).dialog({
			buttons: [
				{text: "Ajouter",	click: function() { produits_add(form); }},
				{text: "Annuler",	click: function() { $(this).dialog("destroy"); }}
			],
			
			autoOpen: true,
			closeOnEscape: true,
			closeText: 'hide',
			draggable: false,
			modal: true,
			position: ["center",100],
			resizable: false,
			title: 'Ajouter un produit dans la ligne '+lib,
			width: 800
		
		});
	
		$(form).dialog( "open" );
			
	});

	$(".catalogue-produits-add-form").submit(function(){return false;});


	// ##################################################
	// Catalogue > produits > delete
	// ##################################################
		
	$(".catalogue-produits-delete").click(function(){	
																				   
		form 	= "#catalogue-produits-delete-form-"+$(this).data("id");
		lib 		= $(form).data("lib");
		
		$(form).dialog({
			buttons: [
				{text: "Confirmer",	click: function() { produits_delete(form); }},
				{text: "Annuler",	click: function() { $(this).dialog("destroy"); }}
			],
			
			autoOpen: true,
			closeOnEscape: true,
			closeText: 'hide',
			draggable: false,
			modal: true,
			position: ["center",100],
			resizable: false,
			title: 'Supprimer le produit '+lib+' ? ',
			width: 800
		
		});
	
		$(form).dialog( "open" );
			
	});	

	$(".catalogue-produits-delete-form").submit(function(){return false;});




















	// ##################################################
	// Partenaires > save
	// ##################################################
		
	$("#partenaires-edit").submit(function(){
		partenaires_edit();
		return false;
	
	});


	// ##################################################
	// Catalogue > metas > save
	// ##################################################
		
	$("#metas-edit").submit(function(){
		metas_edit();
		return false;
	
	});
	
	// ##################################################
	// Catalogue > pages/produits > save
	// ##################################################
		
	$("#pages-edit").submit(function(){
		pages_edit();
		return false;
	
	});

	// ##################################################
	// Catalogue > pages/produits > save
	// ##################################################
		
	$("#titre-page").keyup(function(){
	
		$.ajax({
			type: "POST",
			url: "/admin/ajax/infos.produits.titre.js",
			cache: false,
			data: "titre="+encodeURIComponent($(this).val()),
			dataType: "json",
			success: function(data){
				if(data.result == true){
					$("#titre-page-u").val(data.reponse);
				}
			}
		});		

	
	});


	// ##################################################
	// Partenaires > add
	// ##################################################
		
	$(".partenaires-add").click(function(){
										   
		form 	= "#partenaires-add-form";

		$(form).dialog({
			buttons: [
				{text: "Ajouter",	click: function() { partenaires_add(form); }},
				{text: "Annuler",	click: function() { $(this).dialog("destroy"); }}
			],
			
			autoOpen: true,
			closeOnEscape: true,
			closeText: 'hide',
			draggable: false,
			modal: true,
			position: ["center",100],
			resizable: false,
			title: 'Voulez-vous ajouter ce partenaire ?',
			width: 800
		
		});
	
		$(form).dialog( "open" );
			
	});

	$(".catalogue-lignes-add-form").submit(function(){return false;});


	// ##################################################
	// Partenaires > delete
	// ##################################################
		
	$(".partenaires-delete").click(function(){	
																				   
		form 	= "#partenaires-delete-form-"+$(this).data("id");
		lib 		= $(form).data("lib");
		
		$(form).dialog({
			buttons: [
				{text: "Confirmer",	click: function() { partenaires_delete(form); }},
				{text: "Annuler",	click: function() { $(this).dialog("destroy"); }}
			],
			
			autoOpen: true,
			closeOnEscape: true,
			closeText: 'hide',
			draggable: false,
			modal: true,
			position: ["center",100],
			resizable: false,
			title: 'Supprimer le partenaire '+lib+' ? ',
			width: 800
		
		});
	
		$(form).dialog( "open" );
			
	});	

	$(".catalogue-produits-delete-form").submit(function(){return false;});

});















	// ##################################################
	// Catalogue > lignes > add
	// ##################################################
		
	function lignes_add(form){
		
		idE		= $(form).data("id");
		lib		= encodeURIComponent($(form+"-libelle").val());
		
		$.ajax({
			type: "POST",
			url: "/admin/ajax/catalogue.lignes.add.js",
			cache: false,
			data: "idE="+idE+"&lib="+lib,
			dataType: "json",
			success: function(data){
				if(data.result == true){
					$(form).dialog("destroy");
					refresh_mask();
				}
			}
		});		
	}

	// ##################################################
	// Catalogue > lignes > delete
	// ##################################################
		
	function lignes_delete(form){
		
		id		= $(form).data("id");
		token	= $(form).data("token");
		
		$.ajax({
			type: "POST",
			url: "/admin/ajax/catalogue.lignes.delete.js",
			cache: false,
			data: "id="+id+"&token="+token,
			dataType: "json",
			success: function(data){
				if(data.result == true){
					$(form).dialog("destroy");
					refresh_mask();
				}
			}
		});		
	}

	// ##################################################
	// Catalogue > lignes > edit
	// ##################################################
		
	function lignes_edit(form){
		
		id		= $(form).data("id");
		lib		= encodeURIComponent($(form+"-libelle").val());
		token	= $(form).data("token");
		
		$.ajax({
			type: "POST",
			url: "/admin/ajax/catalogue.lignes.edit.js",
			cache: false,
			data: "id="+id+"&lib="+lib+"&token="+token,
			dataType: "json",
			success: function(data){
				if(data.result == true){
					$(form).dialog("destroy");
					refresh_mask();
				}
			}
		});		
	}

	// ##################################################
	// Catalogue > produits > add
	// ##################################################
		
	function produits_add(form){
		
		idE		= $(form).data("id");
		lib		= encodeURIComponent($(form+"-libelle").val());
		
		if($(form+"-libelle").val() == ""){
			$(form+"-libelle").css("borderColor","red");
			return false;
		}
		
		$.ajax({
			type: "POST",
			url: "/admin/ajax/catalogue.produits.add.js",
			cache: false,
			data: "idE="+idE+"&lib="+lib,
			dataType: "json",
			success: function(data){
				if(data.result == true){
					$(form).dialog("destroy");
					refresh_mask();
				}
			}
		});		
	}

	// ##################################################
	// Catalogue > produits > delete
	// ##################################################
		
	function produits_delete(form){
		
		id		= $(form).data("id");
		token	= $(form).data("token");
		
		$.ajax({
			type: "POST",
			url: "/admin/ajax/catalogue.produits.delete.js",
			cache: false,
			data: "id="+id+"&token="+token,
			dataType: "json",
			success: function(data){
				if(data.result == true){
					$(form).dialog("destroy");
					refresh_mask();
				}
			}
		});		
	}


	// ##################################################
	// Partenaires > add
	// ##################################################
		
	function partenaires_add(form){
		
		id		= $("#partenaire-id").val();

		$.ajax({
			type: "POST",
			url: "/admin/ajax/partenaires.add.js",
			cache: false,
			data: "id="+id,
			dataType: "json",
			success: function(data){
				if(data.result == true){
					$(form).dialog("destroy");
					refresh_mask();
				}
			}
		});		
	}

	// ##################################################
	// Partenaires > delete
	// ##################################################
		
	function partenaires_delete(form){
		
		id		= $(form).data("id");
		token	= $(form).data("token");
		
		$.ajax({
			type: "POST",
			url: "/admin/ajax/partenaires.delete.js",
			cache: false,
			data: "id="+id+"&token="+token,
			dataType: "json",
			success: function(data){
				if(data.result == true){
					$(form).dialog("destroy");
					refresh_mask();
				}
			}
		});		
	}























	// ##################################################
	// Catalogue > metas > edit
	// ##################################################
		
	function metas_edit(){
		
		datas 		= [];
		
		datas['id-page']			= encodeURIComponent($("#id-page-meta").val());
		datas['titre-meta']			= encodeURIComponent($("#titre-meta").val());
		datas['description-meta']	= encodeURIComponent($("#description-meta").val());
		datas['keywords-meta']		= encodeURIComponent($("#keywords-meta").val());

		datas = "id-page="+datas['id-page']+"&titre-meta="+datas['titre-meta']+"&description-meta="+datas['description-meta']+"&keywords-meta="+datas['keywords-meta'];


		$.ajax({
			type: "POST",
			url: "/admin/ajax/catalogue.metas.edit.js",
			cache: false,
			data: datas,
			dataType: "json",
			success: function(data){
				if(data.result == true){
					//refresh_mask();
				}
				else{
					alert(data.reponse);
				}
			}
		});		
	}





	// ##################################################
	// Catalogue > pages/produits > edit
	// ##################################################
		
	function pages_edit(){
		
		datas 		= [];
		
		datas['id-page']			= encodeURIComponent($("#id-page").val());
		datas['titre-page']			= encodeURIComponent($("#titre-page").val());
		datas['soustitre-page']		= encodeURIComponent($("#soustitre-page").val());
		datas['texte-page']			= encodeURIComponent($("#texte-page").val());
		datas['descriptif-page']		= encodeURIComponent($("#descriptif-page").val());
		datas['paragraphes-page']	= encodeURIComponent($("#paragraphes-page").val());
	

		datas = "id-page="+datas['id-page']+"&titre-page="+datas['titre-page']+"&soustitre-page="+datas['soustitre-page']+"&texte-page="+datas['texte-page']+"&descriptif-page="+datas['descriptif-page']+"&paragraphes-page="+datas['paragraphes-page'];


		$.ajax({
			type: "POST",
			url: "/admin/ajax/catalogue.pages.edit.js",
			cache: false,
			data: datas,
			dataType: "json",
			success: function(data){
				if(data.result == true){
					refresh_mask();
				}
				else{
					alert(data.reponse);
				}
			}
		});		
	}




	// ##################################################
	// Partenaire > edit
	// ##################################################
		
	function partenaires_edit(){
		
		datas 		= [];
		
		datas['id-partenaire']		= encodeURIComponent($("#id-partenaire").val());
		datas['image-partenaire']	= encodeURIComponent($("#image-partenaire").val());
		datas['texte-partenaire']	= encodeURIComponent($("#texte-partenaire").val());
	

		datas = "id-partenaire="+datas['id-partenaire']+"&image-partenaire="+datas['image-partenaire']+"&texte-partenaire="+datas['texte-partenaire'];


		$.ajax({
			type: "POST",
			url: "/admin/ajax/partenaires.edit.js",
			cache: false,
			data: datas,
			dataType: "json",
			success: function(data){
				if(data.result == true){
					refresh_mask()
				}
				else{
					alert(data.reponse);
				}
			}
		});		
	}

















	function refresh_mask(){
		location.reload(true);
	}