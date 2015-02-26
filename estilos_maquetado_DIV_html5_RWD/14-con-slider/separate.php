<!DOCTYPE html>
<html lang="es">
<html class="no-js">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>Maquetacion html 5 minima</title>
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/normalize.min.css">
<link rel="stylesheet" href="css/main.css">

<!-- Bootstrap core CSS -->
<link href="css-bootstrap/bootstrap.min.css" rel="stylesheet">
<link href="css-bootstrap/estilo-menu-bs.css" rel="stylesheet" type="text/css">
<link href="estilos.css" rel="stylesheet" type="text/css" />
<!--SLIDER INICIO-->
<link rel="stylesheet" href="slider-css/jquery.bxslider.css" type="text/css" />
<link rel="stylesheet" href="slider-css/styles.css" type="text/css" />
<!--[if lt IE 9]>
	<script src="/js/html5shiv.js"></script>
	<![endif]-->
<!--SLIDER FIN-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<!--SLIDER INICIO-->
<script src="slider.js/jquery.bxslider.js"></script>
<script src="slider.js/scripts.js"></script>
<script type="text/javascript">
          $(document).ready(function(){
            
        $('.bxslider').bxSlider({
			captions: true,
			auto: true,
            mode: 'fade',
            pause: 2000,
            speed: 500
          });
          });
        </script>
<!--SLIDER FIN-->
<script src="js-bootstrap/ie-emulation-modes-warning.js"></script>
<script src="js/vendor/modernizr-2.6.2.min.js"></script>
 <script type="text/javascript" src="js/activar-1.js"></script>
<script type="text/javascript" src="jquery-1.8.3.min.js"></script>
</head>
<body>
<div id="container-cm" class="clearfix"> 
  
 
  
  <?php require_once('menu_movil.php'); ?>

  
 
  
  <header id="cabecera" class="clearfix">
    <div id="cabecera-centrar">
      <h1>Hola</h1>
      <h1>Hola</h1>
      <p>Cabecera</p>
    </div>
  </header>
  
  <?php require_once('menu_escritorio.php'); ?>

 
  <section id="seccion">
    <div id="seccion-index">
      
    <h1> Separated link </h1>
      
     
    </div>
    <article id="columna-izquierda">
      <article> <br>
        <h1> article </h1>
        <br />
        contenido izquierdo <br />
      </article>
    </article>
    <article id="columna-central"> Columna central <br />
      contenido central <br />
      contenido central<br />
      <br />
      contenido central
      contenido central<br />
      <div class="redondeado"> class "redondeado"</div>
      <div class="imagen-col-central">
      
      <img src="img/Lighthouse.jpg">
      
      </div>
    </article>
    <article id="columna-derecha"> <br>
      contenido derecho </article>
  </section>
  <div id="suplemento-contenedor-inferior"></div>
  <div id="contenedor-inferior">
    <div id="contenedor-inferior-centrado"> Esta caja esta anclada al pie</div>
  </div>
  <div id="suplemento-pie"></div>
  <footer id="pie">
    <h1>footer</h1>
  </footer>
</div>
<script src="js/main.js"></script> 

<!-- Bootstrap core JavaScript
    ================================================== --> 
<!-- Placed at the end of the document so the pages load faster  --> 
<script src="js-bootstrap/bootstrap.min.js"></script> 

<!-- IE10 viewport hack for Surface/desktop Windows 8 bug --> 
<script src="js-bootstrap/ie10-viewport-bug-workaround.js"></script>
</body>
</html>
