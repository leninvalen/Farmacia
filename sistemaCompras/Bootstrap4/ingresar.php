<link rel="stylesheet" type="text/css" href="css/estilos.css">
<head>
	<title> Ingresar Vehiculo</title>
</head>
<header>
Ingresa los datos del Vehiculo
</header>
<form action='administrar_carro.php' method='post'>
	<table>
		<tr>
			<td>Marca del vehiculo:</td>
			<td> <input type='text' name='marca'></td>
		</tr>
		<tr>
			<td>Tipo de vehiculo:</td>
			<td><input type='text' name='producto' ></td>
		</tr>
		<tr>
			<td>Dimensiones del vehiculo:</td>
			<td><input type='text' name='unidad_medida' ></td>
		</tr>
		<tr>
			<td>Precio del vehiculo:</td>
			<td><input type='text' name='precio' ></td>
		</tr>
		<input type='hidden' name='insertar' value='insertar'>
	</table>
	<input type='submit' value='Guardar'>
	<a href="index.php">Volver</a>
</form>
 
</html>