<?php
$db = new PDO('mysql:host=localhost; dbname=financiera','diego','123456');
if(!$db){
	echo "algo ah pasao al conectar a la base de datos";
	exit;
}
?>