<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
<meta name="viewport" content="width=device-width, initial-scale=1">

<link href="estilos-menu-movil.css" rel="stylesheet" type="text/css">
</head>

<body>

<div id="menu-movil-contenedor"> 
  <script type="text/javascript" src="../js/jquery-1.8.3.min.js"></script> 
  <script type="text/javascript">
    
       $(document).on("ready",function (){
	   
	   	$("#descripcion").addClass("ocultar");
	   		
        $(".mostrar-ocultar").click( function(){
			
			$("ul li ul").css({display:"none"}); //si hay algun menu abierto lo cierra
			
            $("#descripcion").toggle("slow");
            return false;
        });
		

 
   	 $("ul li:has(ul)").on("click",function(){ 
	  
	 $("ul li ul").css({display:"none"}); //si hay algun menu abierto lo cierra
	 	
	 $(this).find('ul').css({display:"block"}); //abre el menu seleccionado

	 });
   		

});
    
    </script>
    <div class="img-mostrar-ocultar">
    
  <img src="boton-menu-movil.png" class="mostrar-ocultar">
    </div>
  </div>
  
  
  
  
  
  <div id="descripcion">
<ul>
  <li><a href="#">Inicio</a>
    <ul>
      <li><a href="#">¿Qué es jQuery?</a></li>
      <li><a href="#">¿Por qué debería usarlo?</a></li>
      <li><a href="#">¿Por qué tengo que seguir poniendo elementos de lista?</a></li>
    </ul>
  </li>
  <li><a href="#">Ejemplos</a>
    <ul>
      <li><a href="#">Menú desplegable</a></li>
      <li><a href="#">Fade-in, fade-out</a></li>
    </ul>
  </li>
  <li><a href="#">Ejemplos - 1</a>
    <ul>
      <li><a href="#">Menú desplegable</a></li>
      <li><a href="#">Fade-in, fade-out</a></li>
    </ul>
  </li>
  <li><a href="#">Contacto</a></li>
</ul>
  </div>

</body>
</html>
