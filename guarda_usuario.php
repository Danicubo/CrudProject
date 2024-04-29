<?php 
	
	require('conexion.php');

	$codigo=$_POST['codigo'];
	$p_nombre=$_POST['p_nombre'] ;
	$s_nombre=$_POST['s_nombre'];
	$p_apellido=$_POST['p_apellido'];
	$s_apellido=$_POST['s_apellido'];
	$edad=$_POST['edad'];
	$telefono=$_POST['telefono'];
	$direccion=$_POST['direccion'];
	$correo=$_POST['correo'];
	$area_de_trabajo=$_POST['area_de_trabajo'];
	
	$query="INSERT INTO alape (Codigo, p_nombre,
	 	s_nombre, p_apellido, s_apellido,edad, telefono, 
	 	direccion, correo, area_de_trabajo ) 
	 VALUES ('$codigo','$p_nombre','$s_nombre',
	 	'$p_apellido','$s_apellido','$edad',
	 	'$telefono','$direccion','$correo', '$area_de_trabajo')";
	
	$resultado = $mysqli->query($query);
	
?>

<html>
	<head>
		<title>Guardar usuario</title>
	</head>
	<body>
		<center>	
			
			<?php if($resultado>0){ ?>
				<h1>Usuario Guardado</h1>
				<?php }else{ ?>
				<h1>Error al Guardar Usuario</h1>		
			<?php	} ?>		
			
			<p></p>	
			
			<a href="index.php">Regresar</a>
			
		</center>
	</body>
	</html>	