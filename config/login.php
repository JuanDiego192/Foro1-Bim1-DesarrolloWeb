<?php
require_once('config.php');

$email = $_POST['email'];
$password = $_POST['password'];

$query = $conexion->prepare("SELECT * FROM usuarios WHERE correo = ? AND password = ?");
$query->bind_param("ss", $email, $password);

$query->execute();
$result = $query->get_result();

if ($result->num_rows > 0) {
    session_start();
    $_SESSION["user"] = "$email";
    header("Location: ../bienvenida.php");
} else {
    header("Location: ../index.php");
}

$query->close();
$conexion->close();
?>