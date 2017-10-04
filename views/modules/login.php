<div class="col-md-4 col-sm-4 col-xs-12 col-lg-4"></div>
<form method="POST">
	<div class="col-md-3 col-sm-3 col-xs-12 col-lg-3">
		<label>Matricula del alumno:</label>
		<input type="text" name="user"  class="form-control" placeholder="Matricula"><br>
		<label>Contraseña:</label>
		<input type="password" name="password" class="form-control" placeholder="Contraseña"><br>
		<button type="submit"  name="Enter" class="btn btn-default">Ingresar</button>
	</div>
</form>
<?php 
	$login = new controller();
	$login -> loginStudentController();

 ?>