  <!doctype html>
<html lang="en">
<head>

	<title>Transacciones</title>
</head>
<body>
	<form action='administrarTransaccion.php' method='post'>
	<p>Ingrese el código del producto: <input type="text" name="codProducto"></p>
    <p>Ingrese la cantidad de producto a comprar:<input type="number" name="canProducto"></p>
    <p><input type="submit" value="Comprar"></p>
    <input type='hidden' name='comprar' value='comprar'>
	<a href="index.html">Volver</a>
</form>
</body>
</html>