<?php 
	
	require('conexion.php');
	
	//$id=$_POST['id'];
	
	$codigo=$_POST['Codigo'];
	$p_nombre=$_POST['p_nombre'] ;
	$s_nombre=$_POST['s_nombre'];
	$p_apellido=$_POST['p_apellido'];
	$s_apellido=$_POST['s_apellido'];
	$edad=$_POST['edad'];
	$telefono=$_POST['telefono'];
	$direccion=$_POST['direccion'];
	$correo=$_POST['correo'];
	$area_de_trabajo=$_POST['area_de_trabajo'];

	
	$query="UPDATE alape SET p_nombre='$p_nombre', s_nombre='$s_nombre', p_apellido='$p_apellido', 
	s_apellido='$s_apellido', edad=$edad, telefono=$telefono, direccion='$direccion', 
	correo='$correo', area_de_trabajo='$area_de_trabajo' WHERE Codigo=$codigo";
	
	//$query="UPDATE alape SET  p_nombre='$p_nombre' WHERE Codigo=$codigo ";

	$resultado=$mysqli->query($query);
	

	/* $query="UPDATE alape SET usuario='$usuario', contrasenia='$password', email='$email'"; */
	
	
?>

<html>
	<head>
		<title>Modificar usuario</title>
	</head>
	
	<body>
		<center>
			
			<?php 
				if($resultado>0){
				?>
				
				<h1>Usuario Modificado</h1>
				
			<?php	}else{ ?>
				
				<h1>Error al Modificar Usuario</h1>
				
				<?php	} ?>
			
			
			<p></p>	
			
			<a href="tabla.php">Regresar</a>
			
		</center>
	</body>
</html>
				
				