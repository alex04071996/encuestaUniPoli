<?php 
	session_start();
	if (!$_SESSION["validar"]) {
		header("Location:index.php?action=entrar");

		exit();
	}
 ?>
<h2>listado de alumnos</h2>

<table  border="1">
	<thead>
		<tr>
			<th>ID</th>
			<th>USUARIO</th>
			<th>PASSWORD</th>
			<th>EMAIL</th>
			<th>EDITAR</th>
			<th>BORRAR</th>	
		</tr>
	</thead>
	<tbody>
		<?php 
			$registro = new controller();
			$registro -> verAlumnoController();
			$registro -> borrarAlumnoController();
		
 		?>
	</tbody>
</table>

<?php 
	if (isset($_GET["action"])) {
		if ($_GET["action"]=="correcto") {
			echo "Datos Actualizados correctamente";
		}
	}

 ?>