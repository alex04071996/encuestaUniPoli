<div>
	<form>
		<label>ATENCION: Todas las preguntas deben de ser respondidas para poder mandar los resultados.</label>
		<?php 
			$res = Questions::showAllCategoryModel();
			$num = odbc_num_rows($res);
			for ($i=0; $i < $num; $i++) {
				//imprime categoria 
				$rows = Questions::showQuestionModel($i);
				foreach ($rows as $key) {
					//imprime preguntas
				}
			}
		 ?>
	</form>
</div>