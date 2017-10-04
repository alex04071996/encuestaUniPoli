<?php
	class LinksPages{
		public static function linkPagesModel($linkModel){
			if ($linkModel =="questions") {
				$module ="views/modules/questions.php";
			}elseif ($linkModel =="login" || $linkModel=="error"){
				$module="views/modules/login.php";
			}else{
				$module="views/modules/login.php";
			}
			return $module;
		}
	}
 ?>