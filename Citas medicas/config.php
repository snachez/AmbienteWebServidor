<?PHP

$host = "localhost"; 	//TU HOST//
$dbuser = "usuario";	 	//TU USUARIO DEL HOST//
$dbpwd = "1234";	//TU CONTRASE�A//
$db = "citas medicas";		//TU BASE DE DATOS//

$connect = mysql_connect ($host, $dbuser, $dbpwd);
if(!connect)
echo ("No se pudo conectar a la base de datos");
else
$select = mysql_select_db($db);
?>