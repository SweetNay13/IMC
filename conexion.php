<?php
$host = "sql105.infinityfree.com"; // Cambia esto por el host real
$usuario = "if0_39267988"; // Tu usuario
$password = "TqSN1AwSQI5"; // Tu contraseña
$bd = "if0_39267988_imc"; // Tu base de datos

$conn = mysqli_connect($host, $usuario, $password, $bd);

if (!$conn) {
    die("Error de conexión: " . mysqli_connect_error());
}
?>
