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

    $primer_op = trim($_GET['primero']);
    $segudo_op = trim($_GET['segundo']);
    $operacion = $_GET['operacion'];

    function calcular_resultados($op1, $op2, $op){

    switch ($op):
        case "+":
            $resul = $op1 + $op2;
            break;
        case "-":
            $resul = $op1 - $op2;
            break;
        case "*":
            $resul = $op1 * $op2;
            break;
        case "/":
            $resul = $op1 / $op2;
            break;
        default:
            $resul = "Error.";
    endswitch;
    
    return $resul;

    }

    $res = calcular_resultados($primer_op, $segudo_op, $operacion);

    ?>

    <p>El resultado de <?= $primer_op ?> <?= $operacion ?> <?= $segudo_op ?> es <?= $res ?></p>

    <a href="calculadora.html">Volver</a>
</body>

</html>