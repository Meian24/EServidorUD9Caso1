<?php
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Peliculas</title>
	<link rel="stylesheet" href="estiloTienda.css">
</head>
<body>

	<div id="header">
	<img class="logo" src="imagenes/kero.jpg" alt="logo frikiland">
	<a href="carrito.php" ><img class="carrito" src="imagenes/carrito2.png"></a>
    <p>Pel&iacute;culas</p>
    <ul>
    <li><a href="index.php">Inicio</a></li>
	<li><a href="libros.php">Libros</a></li>
	<li><a href="juegos.php">Juegos</a></li>
	<li><a href="funkos.php">Funkos</a></li>
	</ul>
  	</div>

  	<div class="body">Pel&iacute;culas a la venta</div>
	<div class="productos">
		
	    <form method="post" action="carrito.php?nombre=Harry Potter y la piedra filosofal&precio=13&categoria=Peliculas">
		<img class="imagen-producto" img src="imagenes/peli1.jpg"><br>
		<strong>Harry Potter y la piedra filosofal</strong>
		<p>13 €</p>
		<input type="text" name="cantidad" value="1" size="2" /><input type="submit" value="Añadir al carrito" class="btnAddAction" />
	    </form>
	    <br>
	
	    <form method="post" action="carrito.php?nombre=Bohemian rhapsody&precio=15&categoria=Peliculas">
		<img class="imagen-producto" img src="imagenes/peli2.jpg"><br>
		<strong>Bohemian rhapsody</strong>
		<p>15 €</p>
		<input type="text" name="cantidad" value="1" size="2" /><input type="submit" value="Añadir al carrito" class="btnAddAction" />
	    </form>
		<br>
	
	    <form method="post" action="carrito.php?nombre=Mi vecino Totoro&precio=12&categoria=Peliculas">
		<img class="imagen-producto"img src="imagenes/peli3.jpg"><br>
		<strong>Mi vecino Totoro</strong>
		<p>12 €</p>
		<input type="text" name="cantidad" value="1" size="2" /><input type="submit" value="Añadir al carrito" class="btnAddAction" />
	    </form>
		<br>
	
	    <form method="post" action="carrito.php?nombre=El Gran Showman&precio=16&categoria=Peliculas">
		<img class="imagen-producto" img src="imagenes/peli4.jpg"><br>
		<strong>El Gran Showman</strong>
		<p>16 €</p>
		<input type="text" name="cantidad" value="1" size="2" /><input type="submit" value="Añadir al carrito" class="btnAddAction" />
	    </form>
	</div>
</body>
</html>