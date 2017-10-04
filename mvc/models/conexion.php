<?php 
	class Conexion{

		#metodo para crear conexion
		public function conectar(){
			$con = new mysqli('localhost', 'root', 'admin', 'pooPHP');
			return $con;
		}
	}
?>


|

