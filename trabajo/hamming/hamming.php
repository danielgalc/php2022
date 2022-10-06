<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>
<body>
    <?php

    require 'auxiliar.php';

    $cad1 = trim($_GET['primera_cadena']);
    $cad2 = trim($_GET['segunda_cadena']);

    $distancia = hamming($cad1, $cad2);

    ?>

    <p>La distancia Hamming entre <?= $cad1 ?> y <?= $cad2 ?> es <?= $distancia ?></p>
</body>
</html>