<?php

	$config = HTMLPurifier_Config::createDefault();
	$config->set('Core.Encoding', 'UTF-8');
	$config->set('URI.Base', $page['URI']);					
	$config->set('Cache.DefinitionImpl', null); 
	$config->set('HTML.AllowedElements', 'h2,p,b,strong,i,em,u,a,br,span');
	$config->set('HTML.AllowedAttributes', 'a.href,p.class,span.class');


	$config_pages_texte = HTMLPurifier_Config::createDefault();
	$config_pages_texte->set('Core.Encoding', 'UTF-8');
	$config_pages_texte->set('URI.Base', $page['URI']);					
	$config_pages_texte->set('Cache.DefinitionImpl', null); 
	$config_pages_texte->set('HTML.AllowedElements', 'h2,h3,p,b,strong,i,em,u,a,ol,ul,li,hr,blockquote,img,table,tr,td,th,span,br');
	$config_pages_texte->set('HTML.AllowedAttributes', 'h2.class,a.href,img.src,img.width,img.height,img.alt,img.class,img.title,p.class,span.class');


	$config_pages_img = HTMLPurifier_Config::createDefault();
	$config_pages_img->set('Core.Encoding', 'UTF-8');
	$config_pages_img->set('URI.Base', $page['URI']);					
	$config_pages_img->set('Cache.DefinitionImpl', null); 
	$config_pages_img->set('HTML.AllowedElements', 'img');
	$config_pages_img->set('HTML.AllowedAttributes', 'img.src,img.width,img.height,img.alt,img.class');


	$config_pages_paragraphes = HTMLPurifier_Config::createDefault();
	$config_pages_paragraphes->set('Core.Encoding', 'UTF-8');
	$config_pages_paragraphes->set('URI.Base', $page['URI']);					
	$config_pages_paragraphes->set('Cache.DefinitionImpl', null); 
	$config_pages_paragraphes->set('HTML.AllowedElements', 'p,strong,em,u,br,img,a');
	$config_pages_paragraphes->set('HTML.AllowedAttributes', 'p.class,img.src,a.href');


	$config_pages_images = HTMLPurifier_Config::createDefault();
	$config_pages_images->set('Core.Encoding', 'UTF-8');
	$config_pages_images->set('URI.Base', $page['URI']);					
	$config_pages_images->set('Cache.DefinitionImpl', null); 
	$config_pages_images->set('HTML.AllowedElements', 'img');
	$config_pages_images->set('HTML.AllowedAttributes', 'img.src,img.alt');


	$config_clear = HTMLPurifier_Config::createDefault();
	$config_clear->set('Core.Encoding', 'UTF-8');
	$config_clear->set('URI.Base', $page['URI']);					
	$config_clear->set('Cache.DefinitionImpl', null); 
	$config_clear->set('HTML.AllowedElements', '');
	$config_clear->set('HTML.AllowedAttributes', '');

	
	


/*
	$config_pages_texte = HTMLPurifier_Config::createDefault();
	$config_pages_texte->set('Core.Encoding', 'UTF-8');
	$config_pages_texte->set('URI.Base', 'http://dev.vivons-en-forme.org');					
	$config_pages_texte->set('Cache.DefinitionImpl', null); 
	$config_pages_texte->set('HTML.AllowedElements', 'h1,h2,p,b,strong,i,em,u,a,ol,ul,li,hr,blockquote,img,table,tr,td,th,span,br');
	$config_pages_texte->set('HTML.AllowedAttributes', 'a.href,img.src,img.width,img.height,img.alt,img.class,img.title,p.class,span.class,span.style');
*/
		
?>