<?php 
	class controller{


		#--------------------METODO PARA PINTAR LA PLANTILLA BASICA
		public function plantilla(){
			include 'views/template.php';
		}

		#----------------------METODO PARA GESTIONAR LA SECCION DINAMICA
		public function enlacePaginaController(){
			
			if (isset($_GET["action"])) {
				$enlaceController = $_GET["action"];
			}else{
				$enlaceController = "inicio";
			}
			
			$respuesta = EnlacesPaginas::enlacesPaginaModel($enlaceController);
			include $respuesta;
		}
		
		#--------------------------METODO PARA REGISTRO DE ALUMNOS
		public function createAlumnoController(){
			if (isset($_POST["Registro"])){
				$datosController = array(	"usuario"	=> $_POST["usuario"], 
											"password"	=> $_POST["password"], 
											"email"		=> $_POST["email"]);
			
				$respuesta = Alumnos::createAlumnoModel($datosController, "alumnos");
				if($respuesta == "success"){
					header("Location:index.php?action=ok");
				}else{
					#header("Location:index.php");
					var_dump($respuesta);
				}
			}
		}


		#-----------------------------METODO LOGIN CONTROLLER
		public function loginAlumnoController(){
			if (isset($_POST["Entrar"])){
				$datosController = array(	"usuario"	=> $_POST["usuario"], 
											"password"	=> $_POST["password"]);
			
				$respuesta = Alumnos::loginAlumnoModel($datosController, "alumnos");
				
				//var_dump($respuesta);
				
				if (($respuesta["usuario"] == $_POST["usuario"]) && ($respuesta["password"] == $_POST["password"])) {
					#determinar si el usuario esta logeado para mostrar
					#el modulo de listar usuarios
					
					session_start();
					$_SESSION["validar"]=true;

					header("Location:index.php?action=ver");

				}else{
					header("Location:index.php?action=error");
					
				}
			}
		}
		#-----------------------------METODO listar usuarios
		public function verAlumnoController(){
			
				$respuesta = Alumnos::verAlumnoModel("alumnos");
				
				foreach ($respuesta as $row => $item) {
					echo '<tr>
							<td>'.$item[0].'</td>
							<td>'.$item[1].'</td>
							<td>'.$item[2].'</td>
							<td>'.$item[3].'</td>
							<td><a href="index.php?action=editar&id='.$item[0].'">Editar</a></td>
							<td><a href="index.php?action=ver&id_borrar='.$item[0].'">Borrar</a></td>
					</tr>';
				}
		}

		#-------------Metodo para solicitar los datos del alumnos por su ID
		public function detalleAlumnoController(){
			$id = $_GET["id"];
			$respuesta = Alumnos::detalleAlumnoModel($id, "alumnos");

			echo '
				<input type="text" name="usuario" value="'.$respuesta[usuario].'" required> <br/>

				<input type="text" name="password" value="'.$respuesta[password].'" required><br/>

				<input type="email" name="email" value="'.$respuesta[email].'" required><br/>

				<input type="submit" name="Editar" value="Actualizar">';

		}

		#-------------metodo para actualizar usuarios
		public function updateAlumnoController(){
			if (isset($_POST["Editar"])&&isset($_GET["id"])){
				$datosController = array(	"id"		=> $_GET["id"],
											"usuario"	=> $_POST["usuario"], 
											"password"	=> $_POST["password"], 
											"email"		=> $_POST["email"]);
			
				$respuesta = Alumnos::updateAlumnoModel($datosController, "alumnos");
				if($respuesta == "success"){
					header("Location:index.php?action=correcto");
				}else{
					echo "error";
				}
			}
		}

		#-------------metodo para borrar usuarios
		public function borrarAlumnoController(){
			if (isset($_GET["id_borrar"])){
				$datosController = $_GET["id_borrar"];
				//echo $datosController;
			
				$respuesta = Alumnos::borrarAlumnoModel($datosController, "alumnos");
				if($respuesta == "success"){
					header("Location:index.php?action=ver");
				}else{
					echo "error";
				}
			}
		}
	}
 ?>