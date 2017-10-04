<h1>Registro de alumnos</h1>

<form method="POST">
	<input type="text" name="usuario" placeholder="Usuario" required><br/>
	<input type="password" name="password" placeholder="Contraseña" required><br/>
	<input type="email" name="email" placeholder="Correo Electronico" required><br/>

	<input type="submit" name="Registro" value="Registro">
</form>

<?php 
	$registro = new controller();
	$registro -> createAlumnoController();

	if (isset($_GET["action"])) {
		if ($_GET["action"] == "ok") {
			echo "Registro Correcto";
		}
	}
 ?>