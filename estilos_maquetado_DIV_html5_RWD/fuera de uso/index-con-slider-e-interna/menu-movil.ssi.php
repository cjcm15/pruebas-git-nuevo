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
  <div class="img-mostrar-ocultar"> <img src="menu-movil/boton-menu-movil.png" class="mostrar-ocultar" alt="Boton menu"> </div>
</div>
<!--menu movil-->
<nav id="descripcion">
  <ul>
    <li><a href="index.php">Home</a></li>
    <li><a href="quienes-somos.php">Quienes Somos</a>
     <!-- <ul>
        <li><a href="interna.php">Interna</a></li>
        <li><a href="#">Quienes Somos 1</a></li>
        <li><a href="#">Quienes Somos 2</a></li>
      </ul>-->
    </li>
    <li><a href="servicios.php">Servicios</a>
      <!--<ul>
        <li><a href="#">Servicios 1 </a></li>
        <li><a href="#">Servicios 2</a></li>
      </ul>-->
    </li>
    <li><a href="forma-de-trabajo.php">Formas de Trabajo</a> 
      <!--<ul>
      <li><a href="#">Menú desplegable</a></li>
      <li><a href="#">Fade-in, fade-out</a></li>
    </ul>--> 
    </li>
    <li><a href="ambitos-de-actuacion.php">Ambitos de Actuación</a></li>
    <li><a href="galeria-de-fotos.php">Galería de Fotos</a></li>
    <li><a href="contacto.php">Contacto</a></li>
  </ul>
</nav>
