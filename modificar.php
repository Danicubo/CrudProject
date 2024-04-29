<?php
	
	require('conexion.php');
	
	$id=$_GET['id'];
	
	$query="SELECT Codigo, p_nombre, s_nombre, p_apellido, s_apellido,
	edad, telefono, direccion, correo, area_de_trabajo FROM alape WHERE Codigo = $id";
	
	$resultado=$mysqli->query($query);
	
	$row=$resultado->fetch_assoc(); 
	
?>



<html>
	<head>
		<title>Usuarios</title>
		<link rel="stylesheet" href="styles2.css">
		<link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@300;400;500;600;700&display=swap" rel="stylesheet">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
		integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	</head>
	<body class="body-css">
			<nav>
				<ul class="navbar navbar-dark bg-dark p-4">
					<li><a class="a-css" href="index.php">Inicio</a></li>
					<li><a class="a-css" href="tabla.php">Ir a tabla</a></li>
				</ul>
			</nav>
		<div class="container">

			<center><h1>Modificar Usuario</h1></center>
			<a class="a-css" href="index.php">Regresar</a>

			<form class="form w-50 mx-auto" name="form" method="post" action="mod_usuario.php">
				
				<table class="tabla2-css table">
					<tr>
						<td><b>Codigo</b></td>
						<td><input class="input-text-css" type="text" name="Codigo" size="25"  value="<?php echo $row['Codigo']; ?>" /></td>
					</tr>
					<tr>
						<td><b>Primer Nombre</b></td>
						<td><input class="input-text-css"  type="text" name="p_nombre" size="25" value="<?php echo $row['p_nombre'];?>" /></td>
					</tr>	
					<tr>
						<td width="20"><b>Segundo Nombre</b></td>
						<td width="30"><input class="input-text-css" type="text" name="s_nombre" size="25" value="<?php echo $row['s_nombre']; ?>" /></td>
					</tr>	
					<tr>
						<td width="20"><b>Primer Apellido</b></td>
						<td width="30"><input class="input-text-css" type="text" name="p_apellido" size="25" value="<?php echo $row['p_apellido']; ?>" /></td>
					</tr>	
					<tr>
						<td width="20"><b>Segundo Apellido</b></td>
						<td width="30"><input class="input-text-css" type="text" name="s_apellido" size="25" value="<?php echo $row['s_apellido']; ?>" /></td>
					</tr>	
					<tr>
						<td width="20"><b>Edad</b></td>
						<td width="30"><input class="input-text-css" type="text" name="edad" size="25" value="<?php echo $row['edad']; ?>" /></td>
					</tr>	
					<tr>
						<td width="20"><b>Telefono</b></td>
						<td width="30"><input class="input-text-css" type="text" name="telefono" size="25" value="<?php echo $row['telefono']; ?>" /></td>
					</tr>	
					<tr>
						<td width="20"><b>Direccion</b></td>
						<td width="30"><input class="input-text-css" type="text" name="direccion" size="25" value="<?php echo $row['direccion']; ?>" /></td>
					</tr>	
					<tr>
						<td width="20"><b>Correo</b></td>
						<td width="30"><input class="input-text-css" type="email" name="correo" size="25" value="<?php echo $row['correo']; ?>" /></td>
					</tr>	
					<tr>
						<td><b>Área de Trabajo</b></td>
						<td><input class="input-text-css" type="text" name="area_de_trabajo" size="25" value="<?php echo $row['area_de_trabajo']; ?>" /></td>
					</tr>
					<tr>
						<td><center><input class="input-css" type="submit" name="Guardar" value="Guardar" /></center></td>
					</tr>
				</table>
			</form>
		</div>
		<footer>
		<img width="100px" class="img-fluid mx-auto d-block " src="https://www.cosfacali.edu.co/images/Pequeo_Logo_Cosfa_2013-2014.png" alt="logo">
		</footer>
		
	</body>
</html>	

