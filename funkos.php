<?php
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Funkos</title>
	<link rel="stylesheet" href="estiloTienda.css">
</head>
<body>

	<div id="header">
	<img class="logo" src="imagenes/kero.jpg" alt="logo frikiland">
	<a href="carrito.php" ><img class="carrito" src="imagenes/carrito2.png"></a>
    <p>Funkos</p>
    <ul>
    <li><a href="index.php">Inicio</a></li>
	<li><a href="libros.php">Libros</a></li>
	<li><a href="juegos.php">Juegos</a></li>
	<li><a href="peliculas.php">Pel&iacute;culas</a></li>
	</ul>
  	</div>

  	<div class="body">Funkos a la venta</div>
	<div class="productos">
		
	    <form method="post" action="carrito.php?nombre=Funko Batman&precio=15&categoria=Funkos">
		<img class="imagen-producto" img src="imagenes/funko1.jpg"><br>
		<strong>Batman</strong>
		<p>15 €</p>
		<input type="text" name="cantidad" value="1" size="2" /><input type="submit" value="Añadir al carrito" class="btnAddAction" />
	    </form>
	    <br>
	
	    <form method="post" action="carrito.php?nombre=Funko Wonder Woman&precio=17&categoria=Funkos">
		<img class="imagen-producto" img src="imagenes/funko2.jpg"><br>
		<strong>Wonder Woman</strong>
		<p>17 €</p>
		<input type="text" name="cantidad" value="1" size="2" /><input type="submit" value="Añadir al carrito" class="btnAddAction" />
	    </form>
		<br>
	
	    <form method="post" action="carrito.php?nombre=Funko Mandalorian-Baby Yoda&precio=35&categoria=Funkos">
		<img class="imagen-producto"img src="imagenes/funko3.jpg"><br>
		<strong>Mandalorian & Baby Yoda</strong>
		<p>35 €</p>
		<input type="text" name="cantidad" value="1" size="2" /><input type="submit" value="Añadir al carrito" class="btnAddAction" />
	    </form>
		<br>
	
	    <form method="post" action="carrito.php?nombre=Funko Hodor&precio=34&categoria=Funkos">
		<img class="imagen-producto" img src="imagenes/funko4.jpg"><br>
		<strong>Hodor</strong>
		<p>34 €</p>
		<input type="text" name="cantidad" value="1" size="2" /><input type="submit" value="Añadir al carrito" class="btnAddAction" />
	    </form>
	</div>

</body>
</html>