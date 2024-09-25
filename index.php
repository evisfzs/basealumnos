<?php 

	$conexion=mysqli_connect('localhost','root','','tabla');

 ?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Base de Datos Alumnos</title>
</head>
<body>

<br>
	<table border="1" >
		<tr>
			<td>id_alumno</td>
			<td>nombre</td>
			<td>apellido1</td>
			<td>apellido2</td>
			<td>telefono</td>
			<td>edad</td>
			<td>localidad</td>
			<td>estado</td>
			<td>direccion</td>
			<td>numero_casa</td>
			<td>codigo_postal</td>
		</tr>

		<?php 
		$sql="SELECT * from alumnos";
		$result=mysqli_query($conexion,$sql);

		while ($mostrar=mysqli_fetch_array($result)) {
	
		
		 ?>

		 <tr>
		 	<td><?php echo $mostrar['id_alumno'] ?></td>
			<td><?php echo $mostrar['nombre'] ?></td>
			<td><?php echo $mostrar['apellido1'] ?></td>
			<td><?php echo $mostrar['apellido2'] ?></td>
			<td><?php echo $mostrar['telefono'] ?></td>
			<td><?php echo $mostrar['edad'] ?></td>
			<td><?php echo $mostrar['localidad'] ?></td>
			<td><?php echo $mostrar['estado'] ?></td>
			<td><?php echo $mostrar['direccion'] ?></td>
			<td><?php echo $mostrar['num_casa'] ?></td>
			<td><?php echo $mostrar['codigo_postal'] ?></td>
		 </tr>
	<?php 
	}
	 ?>
	</table>


</body>
</html>