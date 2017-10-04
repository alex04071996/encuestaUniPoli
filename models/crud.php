<?php
	require_once "conection.php";
	/**
	* 
	*/
	class Questions extends Conection{
		//seleccion de todas las categorias
		public static function showAllCategoryModel(){
			$sql="select * from categories";
			$sen = Conection::conect()->query($sql);
			$res = $sen->fetch_all();
			return $res;
		}
		//seleccion de todas las preguntas
		public static function showQuestionModel($categorie){
			$sql = "select * from questions where id_categorie=$categorie";
			$sen = Conection::conect()->query($sql);
			$res = $sen->fetch_all();
			return $res;
		}
		//seleccion de la categoria de las preguntas
		public static function showCategoryModel($idquestion){
			$sql="select * from categories where id=$idquestion";
			//$sen = Conection::conect()->($sql);
			$res = $sen->fetch_all();
			return $res;
		}
		public static function loginStudentModel($data,$table){
			$sql="select user, password from $table where user='$data[user]' and password='$data[password]';";
			$sentence = Conection::conect()->query($sql);
			$res=$sentence->fetch_assoc();
			if ($res>0) {
				return $res;
			}else{
				return "error";
			}
			$sentence ->close();
		}
		public static function createQuestionModel($question, $answers, $category){
			$sql= "insert into questions [question, id_category, answers]"
		}
	}
 ?>