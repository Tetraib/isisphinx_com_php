// JavaScript Document
$(document).ready(function(){
					  
	$(document).scroll(function(){

		var top 			= getScrollTop();
		var height_header	= $("#header").innerHeight();
		var height_menu	= $("#menu-wrap").innerHeight();
		
		
		if(top>height_header){
			$("body").addClass("fixed");
			$("#menu-wrap").addClass("fixed");
		}
		else{
			$("body").removeClass("fixed");
			$("#menu-wrap").removeClass("fixed");
		}
	
	
	});				  


	$("#sub-menu .element").addClass("rounded");






	$("#formulaire-contact input").autoclear();

	$("#formulaire-contact").submit(function(){
	
		var erreurs = 0;
		
		$("#formulaire-contact .required").each(function(intIndex){

			if($(this).val() == "")	{
					$(this).addClass("erreur");
					erreurs++;					
			}	
			else 	$(this).removeClass("erreur");
		
		});
				
		if(erreurs == 0) 	return true;
		else 			return false;
	});


	$(".paragraphes img:last-child").addClass("b-r");



	$("#menu li").mouseenter(function(){
	
		element = $(this).attr("id"); 
				
		$(this).addClass("hover");
		
		$("#"+element + " img").attr("src","/medias/front/menu-puce-selected.png");
		$("#sub-"+element).css("display","block");
	
	}
	
	).mouseleave(function(){
	
	
		element = $(this).attr("id"); 
		
		$(this).removeClass("hover");
		
		$("#"+element + " img").attr("src", "/medias/front/"+$("#"+element + " img").attr("class")+".png");
		$("#sub-"+element).css("display","none");

	
   	 }
    );


	$("#sub-menu .element").mouseenter(function(){
	
		element = $(this).attr("id");
		element = element.replace("sub-","");
		
		$("#"+element).addClass("hover");
		
		$("#"+element + " img").attr("src","/medias/front/menu-puce-selected.png");
		
		$(this).css("display","block");
	
	}
	
	).mouseleave(function(){
	
		element = $(this).attr("id");
		element = element.replace("sub-","");
		
		$("#"+element).removeClass("hover");
		
		$("#"+element + " img").attr("src", "/medias/front/"+$("#"+element + " img").attr("class")+".png");
		
		$(this).css("display","none");
	
   	 }
    );









	$('#slides').slides({
		generateNextPrev: true,
		preload: true,
		play: 5000,
		pause: 2500,
		hoverPause: true,
		animationStart: function(current){
			
			lien = "#slide-"+current+" a";
			
			$(".captions p:not(#caption-"+current+")").fadeOut(500);
			$("#caption-1").css("display","block").fadeIn(500);
			$("#slides-mask-a").attr("href",$(lien).attr("href"));
		},
		animationComplete: function(current){
			
			lien = "#slide-"+current+" a";
			
			$(".captions p:not(#caption-"+current+")").fadeOut(500);
			$("#caption-"+current).fadeIn(500);
			$("#slides-mask-a").attr("href",$(lien).attr("href"));

		},
		slidesLoaded: function(current) {
			
			$(".pagination").css("left",980-$(".slide").length*16).css("display","none");
			lien = "#slide-"+current+" a";
			
			$(".captions p").css("display","none");
			$("#caption-1").css("display","block");
			$("#slides-mask-a").attr("href",$(lien).attr("href"));
			
			$("#slides .prev").html("&nbsp;").css("opacity","0.2").hover(
				function(){
					$(this).css("opacity","0.5");
				},
				function(){
					$(this).css("opacity","0.2");
				}
			).css("display","block");

			$("#slides .next").html("&nbsp;").css("opacity","0.2").hover(
				function(){
					$(this).css("opacity","0.5");
				},
				function(){
					$(this).css("opacity","0.2");
				}
			).css("display","block");
			

		}
	});


	$('#descriptif .liste').columnize({ columns: 2 });





});
	
	
	
	
	
function getScrollTop(){
    if(typeof pageYOffset!= 'undefined'){
        //most browsers
        return pageYOffset;
    }
    else{
        var B= document.body; //IE 'quirks'
        var D= document.documentElement; //IE with doctype
        D= (D.clientHeight)? D: B;
        return D.scrollTop;
    }
}