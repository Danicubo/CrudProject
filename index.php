<html>
	<head>
		<title>Usuarios</title>
		<link rel="stylesheet" href="styles2.css">
		<link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@300;400;500;600;700&display=swap" rel="stylesheet">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
		integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
		<meta name="viewport" content="width=device-width, initial-scale=1">
	</head>
	<body class="body-css">

	<nav>
		<ul class="navbar navbar-dark bg-dark p-4">
			<li><a class="a-css" href="index.php">Inicio</a></li>
			<li><a class="a-css" href="tabla.php">Ir a tabla</a></li>
			
		</ul>
	</nav>

		<div class="container w-100">

			<center><h1 class="w-50 text-justify my-5 text-decoration-underline">Nuevo Usuario</h1></center>
			<form name="nuevo_usuario" class="form form-css w-50 d-flex justify-content-center mx-auto my-5 p-3 " method="POST" action="guarda_usuario.php">
				<table class="table tabla-css">
					<tr>
						<td><b>Codigo</b></td>
						<td><input class="input-text-css" type="text" name="codigo" size="25" /></td>
					</tr>
					<tr>
						<td><b>Primer Nombre</b></td>
						<td><input class="input-text-css" type="text" name="p_nombre" size="25" /></td>				
					</tr>
					<tr>
						<td><b>Segundo Nombre</b></td>
						<td><input class="input-text-css" type="text" name="s_nombre" size="25" /></td>
					</tr>
					<tr>
						<td><b>Primer Apellido</b></td>
						<td><input class="input-text-css" type="text" name="p_apellido" size="25" /></td>
					</tr>
					<tr>
						<td><b>Segundo Apellido</b></td>
						<td><input class="input-text-css" type="text" name="s_apellido" size="25" /></td>
					</tr>
					<tr>
						<td><b>Edad</b></td>
						<td><input class="input-text-css" type="text" name="edad" size="25" /></td>
					</tr>
					<tr>
						<td><b>Teléfono</b></td>
						<td><input class="input-text-css" type="text" name="telefono" size="25" /></td>
					</tr>
					<tr>
						<td><b>Dirección</b></td>
						<td><input class="input-text-css" type="text" name="direccion" size="25" /></td>
					</tr>
					<tr>
						<td><b>Correo</b></td>
						<td><input class="input-text-css" type="email" name="correo" size="25" /></td>
					</tr>
					<tr>
						<td><b>Área de Trabajo</b></td>
						<td><input class="input-text-css" type="text" name="area_de_trabajo" size="25" /></td>
					</tr>
					<tr>
						<td colspan="2" class="p-4"><center><input class="input-css"  type="submit"   name="eviar" value="Registrar usuario" /></center></td>
					</tr>
					<tr>
						<td colspan="2" class="p-4"><center><a class="a-css"  href="./tabla.php">Ir a tabla</center></a></td>
					</tr>
				</table>		
			</form>
		</div>
		
		<footer>
		<img width="100px" class="img-fluid mx-auto d-block " src="https://www.cosfacali.edu.co/images/Pequeo_Logo_Cosfa_2013-2014.png" alt="logo">
		</footer>
	</body>
</html>						