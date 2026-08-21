	function tag(id) 
	{
	 return document.getElementById(id);
	}
	
	function activar(div) 
	{
	 	if(div=='bandaImagen1')
			{
	 			document.getElementById(div).style.background = 'url(../images/sweet_inactivo.png) no-repeat'
			}
	 	if(div=='bandaImagen2')
			{
	 			document.getElementById(div).style.background = 'url(../images/ancient_inactivo.png) no-repeat'
			}
	 	if(div=='bandaImagen3')
			{
	 			document.getElementById(div).style.background = 'url(../images/young_inactivo.png) no-repeat'
			}
	 	if(div=='bandaImagen4')
			{
	 			document.getElementById(div).style.background = 'url(../images/african_inactivo.png) no-repeat'
			}
	 	if(div=='bandaImagen5')
			{
	 			document.getElementById(div).style.background = 'url(../images/choco_inactivo.png) no-repeat'
			}
	 	if(div=='bandaImagen6')
			{
	 			document.getElementById(div).style.background = 'url(../images/dark_inactivo.png) no-repeat'
			}
	}
	
	function opacar(div) 
	{
	 	if(div=='bandaImagen1')
			{
	 			document.getElementById(div).style.background = 'url(../images/sweet_activo.png) no-repeat'
			}
	 	if(div=='bandaImagen2')
			{
	 			document.getElementById(div).style.background = 'url(../images/ancient_activo.png) no-repeat'
			}
	 	if(div=='bandaImagen3')
			{
	 			document.getElementById(div).style.background = 'url(../images/young_activo.png) no-repeat'
			}
	 	if(div=='bandaImagen4')
			{
	 			document.getElementById(div).style.background = 'url(../images/african_activo.png) no-repeat'
			}
	 	if(div=='bandaImagen5')
			{
	 			document.getElementById(div).style.background = 'url(../images/choco_activo.png) no-repeat'
			}
	 	if(div=='bandaImagen6')
			{
	 			document.getElementById(div).style.background = 'url(../images/dark_activo.png) no-repeat'
			}
	}
		
	function menuOn(div1, div2, div3) 
	{
		document.getElementById(div3).style.color = '#faf8ef';
		activarMenu(div1);
		desactivarMenu(div2);
	}
	
	function menuOff(div1, div2, div3) 
	{
		document.getElementById(div3).style.color = '#949494';
		desactivarMenu(div1);
		activarMenu(div2);
	}
	
	function activarMenu(div)
	{
		for (i=0;i<14;i++)
		 {

			 var val1;
			 val1 = 21 + i;
			 var val2;
			 val2 = 52 - i;
			 document.getElementById(div).style.height = val1+'px';
			 document.getElementById(div).style.marginTop= val2+'px';
		 }
	}
	
	function desactivarMenu(div)
	{

		 for (i=0;i<14;i++)
		 {
			 
			 var val1;
			 val1 = 35 - i;
			 var val2;
			 val2 = 38 + i;
			 document.getElementById(div).style.height = val1+'px';
			 document.getElementById(div).style.marginTop= val2+'px';	
		 }
	}
	
	
	function navegar(pagina,especificacionVentana,propiedades) 
	{
		window.open(pagina,especificacionVentana, propiedades)
	}
	
	function favoritos()
	{
		window.external.AddFavourite(''+window.document.URL,''+window.document.title);
	}
	
/* SLIDER */
	
	
function slider(){
 
 if ($('#slider img:visible').length == 0 || $('#slider img:last').is(':visible'))
 {
 	$('#slider img').fadeOut().first().fadeIn();
 } 
 else 
 {
 	$('#slider img:visible').fadeOut().next('img').fadeIn("slow");
 }
 
}

$(document).ready(function(){
 
 slider();
 setInterval(slider, 6000);
 
 });
 


function slider2(direccion, thumbnailActivo){
	
	if (direccion=='A')
	{
 
		 if ($('#slider2 img:visible').length == 0 || $('#slider2 img:first').is(':visible')){
		 	$('#slider2 img').fadeOut().last().fadeIn();
		 	$('#galeria img').fadeOut().last().fadeIn();
		 	$('#titulo p').fadeOut().last().fadeIn();
		 	$('#galeriaAnt img').fadeOut().last().fadeIn();
		 	$('#galeriaSig img').fadeOut().last().fadeIn();
		 } 
		 else {
			$('#slider2 img:visible').fadeOut().prev('img').fadeIn("slow");
			$('#galeria img:visible').fadeOut().prev('img').fadeIn("slow");
			$('#titulo p:visible').fadeOut().prev('p').fadeIn("slow");
			$('#galeriaAnt img:visible').fadeOut().prev('img').fadeIn("slow");
			$('#galeriaSig img:visible').fadeOut().prev('img').fadeIn("slow");
		 }
	 
	}
	else
		if ($('#slider2 img:visible').length == 0 || $('#slider2 img:last').is(':visible')){
		 	$('#slider2 img').fadeOut().first().fadeIn();
		 	$('#galeria img').fadeOut().first().fadeIn();
		 	$('#titulo p').fadeOut().first().fadeIn();
		 	$('#galeriaAnt img').fadeOut().first().fadeIn();
		 	$('#galeriaSig img').fadeOut().first().fadeIn();
		 } 
		 else {
			$('#slider2 img:visible').fadeOut().next('img').fadeIn("slow");
			$('#galeria img:visible').fadeOut().next('img').fadeIn("slow");
			$('#titulo p:visible').fadeOut().next('p').fadeIn("slow");
			$('#galeriaAnt img:visible').fadeOut().next('img').fadeIn("slow");
			$('#galeriaSig img:visible').fadeOut().next('img').fadeIn("slow");
		 }
 
}

$(document).ready(function(){
 
 slider2();
 setInterval(slider2, 60000);
 
 });
 

 
