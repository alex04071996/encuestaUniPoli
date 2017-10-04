<?php 
	/**
	* 
	*/
	class controller
	{
		
		public static function template()
		{
			include 'views/template.php';
		}
		public  static function linkPageController(){
			if(isset($_GET["action"])){
				$linkController = $_GET["action"];
			}else{
				$linkController = "login";
			}
			$answer = LinksPages::linkPagesModel($linkController);
			include $answer;
		}
		public static function loginStudentController(){
			if (isset($_POST["Enter"])) {
				$dataController = array("user"=>$_POST["user"], "password"=>$_POST["password"]);
				$res= Questions::loginStudentModel($dataController,"alumnos");
				if (($res["user"]==$_POST["user"])&& ($res["password"]==$_POST["password"])){
					session_start();
					$_SESSION["validar"]=true;
					header("location:index.php?action=questions");
				}else{
					header("location:index.php?action=error");
				}
			}
		}
	}
 ?>