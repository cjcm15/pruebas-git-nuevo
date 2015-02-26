<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8">
<title>Interna Xima</title>
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/normalize.min.css">
<link rel="stylesheet" href="css/main.css">
<link href="menu-horizontal/estilos-menu-horizontal.css" rel="stylesheet" type="text/css">
<link href="menu-movil/estilos-menu-movil.css" rel="stylesheet" type="text/css">
<link href="estilos.css" rel="stylesheet" type="text/css" />

<script src="//use.edgefonts.net/kaffeesatz:n1,n3,n4,n7:all.js"></script>
<!--            -->

<script src="js/vendor/modernizr-2.6.2.min.js"></script>
<script src="js/jquery-1.8.3.min.js"></script>

</head>
<body>
<div id="container" class="clearfix"> 
  <?php require_once('menu-movil.ssi.php'); ?>
  <div id="cabecera" class="clearfix">
<?php require_once('header.ssi.php'); ?>
  </div>
  
  <?php require_once('menu-horizontal.ssi.php'); ?>
  <div id="contenedor-interna">
    <div id="imagen-interna"><img src="img/imagen-interna.jpg"  alt=""/>
      <div id="texto-flotante-interna">Xima Servicios brinda servicios a Empresas y Compañías Aseguradoras</div>
    </div>
    <section id="seccion">
      <article class="textos-interna">
        <div class="titulo-interna">
          <h2>Quienes Somos</h2>
        </div>
        <div class="texto-interna">
          <h3> Xima Servicios fue creada y dirigida por Gabriela Coxe, quien junto a un equipo multidisciplinario especializado en la prevención de juicios en el ámbito del derecho de responsabilidad civil, brinda servicios a Empresas y Compañías Aseguradoras. </h3>
        </div>
      </article>
      <article class="textos-interna">
        <div class="titulo-interna">
          <h2>Nuestro Objetivo</h2>
        </div>
        <div class="texto-interna">
          <h3> Encontramos soluciones eficaces en la investigación, administración y gestión extrajudicial de siniestros para Empresas y Aseguradoras. </h3>
        </div>
      </article>
      
    </section>
  </div>
<?php require_once('footer.ssi.php'); ?>
</div>
<script src="js/main.js"></script>
</body>
</html>
