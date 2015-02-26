<li> <a href="index.php">*Inicio*</a> </li>
<!-- dropdown -->
<?php 
$ruta = $_SERVER['PHP_SELF']; 
$fichero = basename($ruta); 
if ($fichero == "action.php" or $fichero == "separate.php") 
{$fichero = basename($ruta);}
else {
	$fichero = "#";
	}
?>
<!-- dropdown -->
<li class="dropdown"> <a href="<?php echo $fichero?>" class="dropdown-toggle" data-toggle="dropdown">*Dropdown* <b class="caret"></b></a>
  <ul class="dropdown-menu">
    <li><a href="action.php">*Action*</a></li>
    <li><a href="separate.php">Separated link</a></li>
</ul>
</li>
<li> <a href="#">Components</a> </li>
<li> <a href="java-script.php">*JavaScript*</a> </li>
<li> <a href="#">Empresa</a> </li>
<!-- dropdown -->
<?php 
$ruta = $_SERVER['PHP_SELF']; 
$fichero = basename($ruta); 
if ($fichero == "coches.php" or $fichero == "moviles.php") 
{$fichero = basename($ruta);}
else {
	$fichero = "#";
	}
?>
<!-- dropdown -->

<li class="dropdown"> <a href="<?php echo $fichero?>" class="dropdown-toggle" data-toggle="dropdown">*Productos* <b class="caret"></b></a>
  <ul class="dropdown-menu">
    <li><a href="coches.php">*Coches*</a></li>
    <li><a href="moviles.php">*Móviles*</a></li>
</ul>
</li>
<li> <a href="#">Quienes somos</a> </li>
<li> <a href="#">Contacto</a> </li>
