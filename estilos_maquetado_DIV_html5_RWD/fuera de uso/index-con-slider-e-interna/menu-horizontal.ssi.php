<div id="menu">
  <div id="menu-centrar"  class="clearfix"> 
    <script type="text/javascript">// <![CDATA[
if (window. innerWidth >766) 
{
	$(document).ready(function() {
   			// Muestra y oculta los menús
   			$('ul li:has(ul)').click(
			  function(e)
			  {
				 $(this).find('ul').css({display: "block"});
			  },
			  function(e)
			  {
				 $(this).find('ul').css({display: "none"});
			  }
   			);
		});
}
</script> 
    <!--<link href="estilos-menu.css" rel="stylesheet" type="text/css" title="estilos menu">-->
    <nav id="navMenu">
      <ul>
        <li><a href="quienes-somos.php">Quines Somos</a>
          <!--<ul>
            <li><a href="interna.php">Interna</a></li>
            <li><a href="#">¿Por qué debería usarlo?</a></li>
            <li><a href="#">¿Otro elementos de lista?</a></li>
          </ul>-->
        </li>
        <li><a href="servicios.php">Servicios</a>
          <!--<ul>
            <li><a href="#">Menú desplegable</a></li>
            <li><a href="#">Fade-in, fade-out</a></li>
          </ul>-->
        </li>
        <!--<li><a href="#">Formas de Trabajo</a>
         <<ul>
            <li><a href="#">XXXX</a></li>
            <li><a href="#">WWWWW</a></li>
          </ul>
        </li>-->
        <li><a href="forma-de-trabajo.php">Forma de Trabajo</a></li>
        <li><a href="ambitos-de-actuacion.php">Ambitos de Actuación</a></li>
      </ul>
    </nav>
   </div>
</div>
