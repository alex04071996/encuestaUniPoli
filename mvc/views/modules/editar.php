<?php 
	session_start();
	if (!$_SESSION["validar"]) {
		header("Location:index.php?action=entrar");

		exit();
	}
 ?>
<h1>Editar alumnos</h1>

<form method="POST">
	<?php 

		$objeto = new controller();
		$objeto ->detalleAlumnoController();
		#en caso de error
		$objeto->updateAlumnoController();
 	?>
</form>

