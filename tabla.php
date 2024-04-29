<?php
	require('../crudProject/conexion.php');
	
	$query="SELECT * FROM alape";
	
	$resultado=$mysqli->query($query);
	
?>

<html>
	<head>
		<title>Tabla usuarios</title>
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

		<div class="container w-100">
			<center><h1 class="m-4  w-50 rounded text-decoration-underline">Tabla de Usuarios</h1></center>
			
			<table class="tabla2-css table table-responsive">
				<thead>
					<tr>
						<td><b>Código</b></td>
						<td><b>Primer Nombre</b></td>
						<td><b>Segundo Nombre</b></td>
						<td><b>Primer Apellido</b></td>
						<td><b>Segundo Apellido</b></td>
						<td><b>Edad</b></td>
						<td><b>Teléfono</b></td>
						<td><b>Dirección</b></td>
						<td><b>Correo</b></td>
						<td><b>Área de Trabajo</b></td>
					</tr>
					<tbody>
						<?php while($row=$resultado->fetch_assoc())
						{
							echo
							"<tr>"
								."<td>".$row["Codigo"]."</td>"
								."<td>".$row["p_nombre"]."</td>"
								."<td>".$row["s_nombre"]."</td>"
								."<td>".$row["p_apellido"]."</td>"
								."<td>".$row["s_apellido"]."</td>"
								."<td>".$row["edad"]."</td>"
								."<td>".$row["telefono"]."</td>"
								."<td>".$row["direccion"]."</td>"
								."<td>".$row["correo"]."</td>"
								."<td>".$row["area_de_trabajo"]."</td>"
								."<td>"."<a <a class='a2-css' href=' modificar.php?id=".$row['Codigo']." '> Editar</a>"."</td>"
								."<td>"." <a class='a2-css' href=' eliminar.php?id=".$row['Codigo']." '> Eliminar</a>"."</td>"
							."</tr>";
						}
						?>
					</tbody>
				</table>
				<a href="index.php" class="nuevo-usuario">Nuevo usuario</a>			
		</div>

		<footer>
		<img width="100px" class="img-fluid mx-auto d-block " src="https://www.cosfacali.edu.co/images/Pequeo_Logo_Cosfa_2013-2014.png" alt="logo">
		</footer>
		</body>
	</html>	
	
