<?php
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Libros</title>
	<link rel="stylesheet" href="estiloTienda.css">
</head>
<body>

	<div id="header">
	<img class="logo" src="imagenes/kero.jpg" alt="logo frikiland">
	<a href="carrito.php" ><img class="carrito" src="imagenes/carrito2.png"></a>
    <p>Libros</p>
    <ul>
	<li><a href="index.php">Inicio</a></li>
	<li><a href="juegos.php">Juegos</a></li>
	<li><a href="funkos.php">Funkos</a></li>
	<li><a href="peliculas.php">Pel&iacute;culas</a></li>
	</ul>
  	</div>

  	<div class="body">Libros a la venta</div>
	<div class="productos">

	    <form method="post" action="carrito.php?nombre=La espada de fuego&precio=18&categoria=Libros">
		<img class="imagen-producto" img src="imagenes/libro1.jpg"><br>
		<strong>La espada de fuego (Javier Negrete)</strong><p>18 €</p>
		<input type="text" name="cantidad" value="1" size="2" /><input type="submit" value="Añadir al carrito" class="btnAddAction" />
	    </form>
	    <br>
	
	    <form method="post" action="carrito.php?nombre=El &uacute;ltimo deseo&precio=22&categoria=Libros">
		<img class="imagen-producto" img src="imagenes/libro2.jpg"><br>
		<strong>El &uacute;ltimo deseo (Andrzej Sapkowski)</strong>
		<p>22 €</p>
		<input type="text" name="cantidad" value="1" size="2" /><input type="submit" value="Añadir al carrito" class="btnAddAction" />
	    </form>
		<br>
	
	    <form method="post" action="carrito.php?nombre=El nombre del viento&precio=24&categoria=Libros">
		<img class="imagen-producto"img src="imagenes/libro3.jpg"><br>
		<strong>El nombre del viento (Patrick Rothfuss)</strong>
		<p>24 €</p>
		<input type="text" name="cantidad" value="1" size="2" /><input type="submit" value="Añadir al carrito" class="btnAddAction" />
	    </form>
		<br>
	
	    <form method="post" action="carrito.php?nombre=1Q84&precio=15&categoria=Libros">
		<img class="imagen-producto" img src="imagenes/libro4.jpg"><br>
		<strong>1Q84 (Haruki Murakami)</strong>
		<p>15 €</p>
		<input type="text" name="cantidad" value="1" size="2" /><input type="submit" value="Añadir al carrito" class="btnAddAction" />
	    </form>
	</div>

</body>
</html>