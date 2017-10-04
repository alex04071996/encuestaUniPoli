<?php
/**
* 
*/
class Conection{
	public static function conect()
	{
		// Se especifica la ubicación de la base de datos Access (directorio actual)
	$db = getcwd() . "\\" . 'test.mdb';
	// Se define la cadena de conexión
	$dsn = "DRIVER={Microsoft Access Driver (*.mdb)}; DBQ=$db";
	// Se realiza la conexón con los datos especificados anteriormente
	$conn = odbc_connect( $dsn, '', '' );
	// Se define la consulta que va a ejecutarse
	$sql = "SELECT * FROM Tabla";
	// Se ejecuta la consulta y se guardan los resultados en el recordset rs
	$rs = odbc_exec( $conn, $sql );
	// Se muestran los resultados
	//while ( odbc_fetch_row($rs) ) { $resultado=odbc_result($rs,"Campo"); echo $resultado; }
	// Se cierra la conexión
	//odbc_close( $conn );
	return $conn;
	}
}
?>