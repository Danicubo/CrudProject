<?php 
	
	require('../crudProject/conexion.php');

	$codigo=$_GET['id'];

	$sql="DELETE FROM alape WHERE Codigo='$codigo'";

	$resultado=$mysqli->query($sql);
	

	
?>

<html>
	<head>
		<title>Eliminar usuario</title>
		<link rel="stylesheet" href="styles.css">
	</head>
	
	<body>
		<center>
			<?php 
				if($resultado > 0){
				?>
				
				<h1>Usuario Eliminado</h1>
				
				<?php 	}else{ ?>
				
				<h1>Error al Eliminar Usuario</h1>
				
			<?php	} ?>
			<p></p>		
			
			<a href="tabla.php">Regresar</a>
			
		</center>
	</body>
</html>