<?php 

$aCarrito = array();
$sHTML = '';
$fPrecioTotal = 0;
$existe = 0;


//Obtener los productos
if(isset($_COOKIE['carrito'])) {
	$aCarrito = unserialize($_COOKIE['carrito']);
}

//Añadir un nuevo producto
if(isset($_GET['nombre']) && isset($_GET['precio'])&& isset($_GET['categoria'])) {


	for($i = 0; $i< sizeof($aCarrito); $i++) {
	    if($aCarrito[$i]['nombre'] == $_GET['nombre']) {
		$aCarrito[$i]['cantidad'] = $aCarrito[$i]['cantidad'] + 1;
		$aCarrito[$i]['categoria'] = $aCarrito[$i]['categoria'];
		$existe = 1;
	    }
	}



	if($existe == 0) {
		$iUltimaPos = count($aCarrito);
		$aCarrito[$iUltimaPos]['nombre'] = $_GET['nombre'];
		$aCarrito[$iUltimaPos]['precio'] = $_GET['precio'];
		$aCarrito[$iUltimaPos]['categoria'] = $_GET['categoria'];
		$aCarrito[$iUltimaPos]['cantidad'] = $_POST['cantidad'];
        }
}

//Vaciar el carrito
if(isset($_GET['vaciar'])) {
	unset($_COOKIE['carrito']);
	$sHTML .= 'Su carrito está vacio';
}

//Creamos la cookie (24 horas)
$iTemCad = time() + (60 * 60);
setcookie('carrito', serialize($aCarrito), $iTemCad);



//Imprimir el array
$sHTML .= '<table style="width:600px;">';
$sHTML .= '<tr><td>Nombre</td><td>Categoria</td><td>Precio</td><td>Cantidad</td></tr>';
foreach ($aCarrito as $key => $value) {
	$sHTML .= '<tr>';
	$sHTML .= '<td>' . $value['nombre'] . '</td><td>' . $value['categoria'] .'</td><td>'  . $value['precio']*$value['cantidad'] . '</t><td>' . $value['cantidad'] . '</td>';
	$sHTML .= '</tr>';
	$fPrecioTotal += $value['precio']*$value['cantidad'];
}
$sHTML .= '</table>';

//Imprimir el total
$sHTML .= '------------------<br>Total compra: ' . $fPrecioTotal . ' €';

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Carrito</title>
	<link rel="stylesheet" href="estiloTienda.css">
</head>
<body>
	
	<div id="header">
	<img class="logo" src="imagenes/kero.jpg" alt="logo frikiland">
	<a href="carrito.php" ><img class="carrito" src="imagenes/carrito2.png"></a>
    <p>Tu carrito</p>
    <ul>
    <li><a href="index.php">Inicio</a></li>
	<li><a href="libros.php">Libros</a></li>
	<li><a href="juegos.php">Juegos</a></li>
	<li><a href="funkos.php">Funkos</a></li>
	<li><a href="peliculas.php">Pel&iacute;culas</a></li>
	</ul>
  	</div>
  	<div class="carro">
		<?php echo $sHTML; ?>
	
	<br>
	<a href="compra.php">Pagar compra</a>
	<br>
	<a href="carrito.php?vaciar=1">Vaciar carrito</a>
	<br>
	<a href="index.php">Volver al Inicio</a>
	</div>
</body>
</html>