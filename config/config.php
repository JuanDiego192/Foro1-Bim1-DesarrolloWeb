<?php 

$host = "localhost";
$user = "root";
$password = "";
$db = "desarrollowebforo1bim1";

$conexion = new mysqli($host, $user, $password, $db);

if($conexion->connect_errno){
  echo "Falló la conexión a la base de datos " . $conexion->connect_error;
}

?>