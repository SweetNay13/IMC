<?php
include 'conexion.php';

$peso = $_POST['peso'] ?? 0;
$estatura = $_POST['estatura'] ?? 0;
$imc = 0;

if ($peso > 0 && $estatura > 0) {
    $imc = $peso / ($estatura * $estatura);

    $sql = "INSERT INTO imc_registros (peso, estatura, imc) VALUES ('$peso', '$estatura', '$imc')";
    if (mysqli_query($conn, $sql)) {
        echo "Datos guardados correctamente. Tu IMC es " . round($imc, 2);
    } else {
        echo "Error al guardar: " . mysqli_error($conn);
    }
} else {
    echo "Datos no válidos.";
}

mysqli_close($conn);
?>
