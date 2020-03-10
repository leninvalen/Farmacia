 <!doctype html>
<html lang="en">
<head>
    <title>Módulo de compras en línea</title>
</head>
<body>
<form action='administrarProducto.php' method='post'>
	<p>Código del producto: <input type="text" name="cod_producto"></p>
    <p>Nombre del producto: <input type="text" name="nom_producto"></p>
    <p>Nombre genérico del producto : <input type="text" name="nom_generico"></p>
    <p>Marca: <input type="text" name="marca"></p>
    <p>Presentación:<input type="text" name="presentacion"></p>
    <p>Peso:<input type="number" name="peso"></p>
    <p>Laboratorio:<input type="text" name="laboratorio"></p>
    <p>Unidad de medida:<input type="text" name="uni_medida"></p>
    <p>Precio:<input type="text" name="precio"></p>
    <p>Color:<input type="text" name="color"></p>
    <p>Stock:<input type="number" name="stock"></p>
    <p><input type="submit" value="Insertar producto"></p>
    <input type='hidden' name='insertar' value='insertar'>
	<a href="index.html">Volver</a>
</form>
</body>
</html>