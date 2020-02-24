<?php
/*Datos de conexion a la base de datos*/
$db_host = "integraciondb.cdjwmczabjfe.us-east-2.rds.amazonaws.com:3306";
$db_user = "integracion_adm";
$db_pass = "Integracionsistemas2019";
$db_name = "innodb";


$con = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

if(mysqli_connect_errno()){
	echo 'No se pudo conectar a la base de datos : '.mysqli_connect_error();
}
?>