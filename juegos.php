<?php
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Juegos</title>
	<link rel="stylesheet" href="estiloTienda.css">
</head>
<body>

	<div id="header">
	<img class="logo" src="imagenes/kero.jpg" alt="logo frikiland">
	<a href="carrito.php" ><img class="carrito" src="imagenes/carrito2.png"></a>
    <p>Juegos</p>
    <ul>
    <li><a href="index.php">Inicio</a></li>
	<li><a href="libros.php">Libros</a></li>
	<li><a href="funkos.php">Funkos</a></li>
	<li><a href="peliculas.php">Pel&iacute;culas</a></li>
	</ul>
  	</div>

  	<div class="body">Juegos a la venta</div>
	<div class="productos">
		
	    <form method="post" action="carrito.php?nombre=Catan&precio=34&categoria=Juegos">
		<img class="imagen-producto" img src="imagenes/juego1.jpg"><br>
		<strong>Catan</strong>
		<p>34 €</p>
		<input type="text" name="cantidad" value="1" size="2" /><input type="submit" value="Añadir al carrito" class="btnAddAction" />
	    </form>
	    <br>
	
	    <form method="post" action="carrito.php?nombre=Azul&precio=45&categoria=Juegos">
		<img class="imagen-producto" img src="imagenes/juego2.jpg"><br>
		<strong>Azul</strong>
		<p>45 €</p>
		<input type="text" name="cantidad" value="1" size="2" /><input type="submit" value="Añadir al carrito" class="btnAddAction" />
	    </form>
		<br>
	
	    <form method="post" action="carrito.php?nombre=Carcassonne&precio=25&categoria=Juegos">
		<img class="imagen-producto"img src="imagenes/juego3.jpg"><br>
		<strong>Carcassonne</strong>
		<p>25 €</p>
		<input type="text" name="cantidad" value="1" size="2" /><input type="submit" value="Añadir al carrito" class="btnAddAction" />
	    </form>
		<br>
	
	    <form method="post" action="carrito.php?nombre=Rummykub&precio=38&categoria=Juegos">
		<img class="imagen-producto" img src="imagenes/juego4.jpg"><br>
		<strong>Rummykub</strong>
		<p>38 €</p>
		<input type="text" name="cantidad" value="1" size="2" /><input type="submit" value="Añadir al carrito" class="btnAddAction" />
	    </form>
	</div>
</body>
</html>