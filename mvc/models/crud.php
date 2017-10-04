<?php 
	require_once "conexion.php";

	class Alumnos extends Conexion{
		
		#---------------metodo para hacer ALTAS en la BD
		public function createAlumnoModel($datosModel, $tabla){
			$sql = "INSERT INTO $tabla (usuario, password, email) 
					VALUES ('$datosModel[usuario]', 
							'$datosModel[password]', 
							'$datosModel[email]');";	
			
			$sentencia = Conexion::conectar()->query($sql);
			if ($sentencia) {
				return "success";
			}else{
				return "fail";
			}
			$sentencia->close();
		}

		#-----metodo para CONSULTAR USUARIOS en la BD y logearlo
		public function loginAlumnoModel($datosModel, $tabla){
			
			$sql = "SELECT  usuario, password FROM $tabla WHERE 
					usuario = '$datosModel[usuario]' AND 
					password = '$datosModel[password]';";	
			
			$sentencia = Conexion::conectar()->query($sql);
			$resultado = $sentencia->fetch_assoc();
			if ($resultado>0) {
			 	return $resultado;
			}else{
				return "error";
			} 
			$sentencia->close();
		}

		#-----metodo para CONSULTAR TODOS LOS USUARIOS 
		public function verAlumnoModel($tabla){
			
			$sql = "SELECT  id, usuario, password, email FROM $tabla;";	
			
			$sentencia = Conexion::conectar()->query($sql);
			$resultado = $sentencia->fetch_all();
			return $resultado;

			$sentencia->close();
		}
		
		#-----metodo para CONSULTAR USUARIO POR ID 
		public function detalleAlumnoModel($id, $tabla){
			$sql = "SELECT * FROM $tabla WHERE id = '$id';";

			$sentencia = Conexion::conectar()->query($sql);
			$resultado = $sentencia->fetch_assoc(); 

			return $resultado;
		}

		#-----metodo para actualizar USUARIO POR ID 
		public function updateAlumnoModel($datos, $tabla){
			$sql = "UPDATE $tabla SET usuario = '$datos[usuario]', password = '$datos[password]', email = '$datos[email]' WHERE id = '$datos[id]';";

			$sentencia = Conexion::conectar()->query($sql);
			if ($sentencia) {
				return "success";
			}else{
				return "error";
			}

			$sentencia->close();

		}

		#-----metodo para borrar USUARIO POR ID 
		public function borrarAlumnoModel($datos, $tabla){
			$sql = "DELETE FROM $tabla WHERE id = '$datos';";

			$sentencia = Conexion::conectar()->query($sql);
			if ($sentencia) {
				return "success";
			}else{
				return "error";
			}

			$sentencia->close();
		}
	}
 ?>