<!DOCTYPE html>
<html lang="es">
<!--<html class="no-js">-->
<head>
<meta charset="utf-8">
<!--<meta http-equiv = "X-UA-Compatible" content = "IE=Edge,chrome=1" >-->
<title>Index Xima</title>
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/normalize.min.css">
<link rel="stylesheet" href="css/main.css">
<link href="menu-horizontal/estilos-menu-horizontal.css" rel="stylesheet" type="text/css">
<link href="menu-movil/estilos-menu-movil.css" rel="stylesheet" type="text/css">
<link href="estilos.css" rel="stylesheet" type="text/css" />

<script src=" "></script>
<!--  //use.edgefonts.net/kaffeesatz:n1,n3,n4,n7:all.js    -->

<script src="js/vendor/modernizr-2.6.2.min.js"></script>
<script src="js/jquery-1.8.3.min.js"></script>

<link href="styles-slider/jflow.style.css" type="text/css" rel="stylesheet"/>
<script src="Scripts-slider/jflow.plus.js" type="text/javascript"></script>
<script>
	$(document).ready(function(){
	    $("#myController").jFlow({
			controller: ".jFlowControl", // must be class, use . sign
			slideWrapper : "#jFlowSlider", // must be id, use # sign
			slides: "#mySlides",  // the div where all your sliding divs are nested in
			selectedWrapper: "jFlowSelected",  // just pure text, no sign
			width: "930px",  // this is the width for the content-slider
			height: "350px",  // this is the height for the content-slider
			duration: 400,  // time in miliseconds to transition one slide
			prev: ".jFlowPrev", // must be class, use . sign
			next: ".jFlowNext", // must be class, use . sign
			auto: true	
    });
});
</script>

</head>
<body>
<div id="container" class="clearfix"> 
    <?php require_once('menu-movil.ssi.php'); ?>
    <div id="cabecera" class="clearfix">
    <?php require_once('header.ssi.php'); ?>
  </div>
  <?php require_once('menu-horizontal.ssi.php'); ?>
  <section id="seccion">
    <div id="seccion-index">
      <div id="slider-imagen"><img src="img/slider.jpg" alt="Xima Servicios"></div>
      <div id="slider"><!--<img src="img/slider.jpg">-->
        <div id="texto-flotante">Administración y Gestiones extrajudicial de siniestros para Empresas y Aseguradoras</div>
        <div id="container_slider">
          <div id="mySlides">
            <div class="slide"> <img src="images-slider/gr/slider.jpg" alt="Xima Servicios" /> 
             </div>
            <div class="slide"> <img src="images-slider/gr/slider.jpg" alt="Xima Modelo" /> 
            
            </div>
          </div>
          <!--Controla la cantidad de imagenes del slider EN ESTE CASO 5 IMAGENES-->
          <div id="myController"> 
          <span class="jFlowControl"></span> 
          <span class="jFlowControl"></span> 
          </div>
          <div class="jFlowPrev">
          <div></div>
          </div> 
          
          <div class="jFlowNext">
          <div></div>
          </div> </div>
      </div>
    </div>
    <div id="texto-flotante-movil">Administración y Gestiones extrajudicial de siniestros para Empresas y Aseguradoras</div>
    <article class="textos-index">
      <div class="titulo-index">
        <h2>Detección de Fraudes</h2>
        <div class="texto-index">
          <h3>Mediante reportes de información verificamos las investigaciones y medidas correctivas para detectar el verdadero fraude. </h3>
        </div>
      </div>
    </article>
    <article class="textos-index">
      <div class="titulo-index">
        <h2>Liquidación de Siniestros</h2>
        <div class="texto-index">
          <h3>Estamos cerca del lugar del siniestro otorgando a la compañía aseguradora respuestas rápidas y la protección de sus intereses, certificando la póliza.</h3>
        </div>
      </div>
    </article>
    <article class="textos-index">
      <div class="titulo-index">
        <h2>Transacciones Ventajosas</h2>
        <div class="texto-index">
          <h3>Negociaciones rápidas con la concreción de un acuerdo transaccional extrajudicial beneficiando al asegurado, el tercero y la compañía aseguradora.</h3>
        </div>
      </div>
    </article>
  </section>
  <?php require_once('footer.ssi.php'); ?>
</div>
<script src="js/main.js"></script>
</body>
</html>
