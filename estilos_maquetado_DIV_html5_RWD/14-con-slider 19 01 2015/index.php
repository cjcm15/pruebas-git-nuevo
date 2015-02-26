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
<script type="text/javascript" src="jquery-1.8.3.min.js"></script>
</head>
<body>
<div id="container-cm" class="clearfix"> 
  
  <!--INICIO MENU SUPERIOR PARA MOVILES-->
  
  <div id="menu-movil">
    <div id="navMenu">
      <div class="menu-personal">
        <header class="navbar navbar-inverse  bs-docs-nav" role="banner">
          <div class="container">
          <div class="navbar-header">
            <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
          </div>
          <div class="menu-centrar-bs">
            <nav class="collapse navbar-collapse bs-navbar-collapse" role="navigation">
              <ul class="nav navbar-nav">
                <li> <a href="#">Getting started</a> </li>
                <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li><a href="#">Separated link</a></li>
                    <li><a href="#">One more separated link</a></li>
                  </ul>
                </li>
                <li> <a href="#">Components</a> </li>
                <li> <a href="#">JavaScript</a> </li>
                <li> <a href="#">Empresa</a> </li>
                <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">Productos <b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li><a href="coches.html">Coches</a></li>
                    <li><a href="#">Cunas</a></li>
                    <li><a href="#">Móviles</a></li>
                    <li><a href="#">Otros</a></li>
                  </ul>
                </li>
                <li> <a href="#">Quienes somos</a> </li>
                <li> <a href="#">Contacto</a> </li>
              </ul>
            </nav>
          </div>
        </header>
      </div>
    </div>
  </div>
  
  <!--FIN MENU SUPERIOR-->
  
  <header id="cabecera" class="clearfix">
    <div id="cabecera-centrar">
      <h1>Hola</h1>
      <h1>Hola</h1>
      <p>Cabecera</p>
    </div>
  </header>
  <nav id="menu-escritorio">
    <div id="navMenu">
      <div class="menu-personal">
        <header class="navbar navbar-inverse  bs-docs-nav" role="banner">
          <div class="container">
          <div class="navbar-header">
            <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
            <!-- <a href="./" class="navbar-brand">Bootstrap 3 Menu Generator</a>--> 
          </div>
          <div class="menu-centrar-bs">
            <nav class="collapse navbar-collapse bs-navbar-collapse" role="navigation">
              <ul class="nav navbar-nav">
                <li> <a href="#">Getting started</a> </li>
                <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li><a href="#">Separated link</a></li>
                    <li><a href="#">One more separated link</a></li>
                  </ul>
                </li>
                <li> <a href="#">Components</a> </li>
                <li> <a href="#">JavaScript</a> </li>
                <li> <a href="#">Empresa</a> </li>
                <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">Productos <b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li><a href="coches.html">Coches</a></li>
                    <li><a href="#">Cunas</a></li>
                    <li><a href="#">Móviles</a></li>
                    <li><a href="#">Otros</a></li>
                  </ul>
                </li>
                <li> <a href="#">Quienes somos</a> </li>
                <li> <a href="#">Contacto</a> </li>
              </ul>
            </nav>
          </div>
        </header>
      </div>
    </div>
    
    <!--FIN MENU HORIZONTAL--> 
  </nav>
  <!--SLIDER INICIO-->
  <section id="seccion">
    <div id="seccion-index">
      <section id="main">
        <div class="inner clearfix">
          <div id="primary">
            <div class="slider">
              <ul class="bxslider">
                <li><img src="slider-img/trees.jpg" title="Funky roots" /></li>
                <li><img src="slider-img/hill_road.jpg" title="The long and winding road" /></li>
                <li><img src="slider-img/trees.jpg" title="Happy trees" /></li>
                <li><img src="slider-img/hill_road.jpg" title="The long and winding road" /></li>
                <li><img src="slider-img/trees.jpg" title="Happy trees" /></li>
              </ul>
            </div>
          </div>
        </div>
      </section>
      <!--SLIDER FIN--> 
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
