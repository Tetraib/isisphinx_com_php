// JavaScript Document
$(document).ready(function(){
	
	
	$(".groupe").addClass("ui-corner-all");
	
	
	
	$("#catalogue ul").each(function(index) {
		
		if($.cookie($(this).attr("id")) != "block"){
			$(this).css("display","none");
		}
		
	});

$( "#catalogue ul" ).disableSelection();


	$(".lib").click(function(){
	
		$(this).parent().next("ul").slideToggle("fast",function(){
		
			$.cookie($(this).attr("id"), $(this).css("display"));
		
		});
		
	
	});
	
	
	
	
	$(".groupe .ui-icon")
		.css({"opacity" : 0.3, "cursor" : "pointer"})
		.hover(
			function(){	$(this).css("opacity",1);	},
			function(){	$(this).css("opacity",0.3);	}
		);
	
	$(".actions-messages")
		.css("display","none");
	
	
	$(".gamme-lib").disableSelection();
	
	
	$(".ui-icon-image").parent()
		.css("display","none");
	
	
	
	
	
	$(".partenaires li").addClass("ui-state-default ui-corner-all");	
	$(".partenaires li .groupe").addClass("ui-widget-content ui-corner-all");	
	
	
	
	
	
	
	
	
	
	
	
	
	
	$( "button" ).button();
		
});