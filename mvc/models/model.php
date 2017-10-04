<?php 

	class EnlacesPaginas{
		public function enlacesPaginaModel($enlacesModel){
			
			if(	$enlacesModel == "nosotros" ||
				$enlacesModel == "servicios" ||
				$enlacesModel == "contacto" ||
				$enlacesModel == "registro" ||
				$enlacesModel == "entrar"||
				$enlacesModel == "ver"||
				$enlacesModel == "editar"||
				$enlacesModel == "acercade" ||
				$enlacesModel == "salir"){

				$module = "views/modules/".$enlacesModel.".php";

			}else if ($enlacesModel == "inicio") {
				$module = "views/modules/inicio.php";

			}else if ($enlacesModel == "ok") {
				$module = "views/modules/registro.php";

			}else if ($enlacesModel == "correcto") {
				$module = "views/modules/ver.php";

			}else if ($enlacesModel == "error") {
				$module = "views/modules/entrar.php";

			}else{
				$module = "views/modules/inicio.php";
				
			}

			return $module;
		}
	}

 ?>