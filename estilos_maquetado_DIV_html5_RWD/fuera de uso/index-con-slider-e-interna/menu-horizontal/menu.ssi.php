<script type="text/javascript" src="../jquery-1.8.3.min.js"></script>
<script type="text/javascript">

$(document).ready(function() {
   // Muestra y oculta los menús
   $('ul li:has(ul)').hover(
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
</script>


<link href="estilos-menu.css" rel="stylesheet" type="text/css">


<h1>Menú desplegable con jQuery en 5 minutos</h1>
<div id="navMenu">
<ul>
   <li><a href="#">Inicio</a>
      <ul>
         <li><a href="#">¿Qué es jQuery?</a></li>
         <li><a href="#">¿Por qué debería usarlo?</a></li>
         <li><a href="#">¿Otro elementos de lista?</a></li>
      </ul>
   </li>
   <li><a href="#">Ejemplos</a>
      <ul>
         <li><a href="#">Menú desplegable</a></li>
         <li><a href="#">Fade-in, fade-out</a></li>
      </ul>
   </li>
   <li><a href="#">Contacto</a></li>
</ul>
</div>