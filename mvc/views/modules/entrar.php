<?php 
	session_start();
	if ($_SESSION["validar"]) {
		echo "Ya estas logeado";
	}
 ?>
<h2>Inicio de Sesión</h2>
<form method="POST">
	
	<input type="text" name="usuario" placeholder="Usuario"><br/>

	<input type="password" name="password" placeholder="Contraseña"><br/>

	<input type="submit" name="Entrar" value="Entrar">

</form>

<?php
	$ingreso = new controller();
	$ingreso -> loginAlumnoController();

	if (isset($_GET["action"])) {
		if ($_GET["action"]=="error") {
			echo "Verifique los datos";
		}
	}
?>