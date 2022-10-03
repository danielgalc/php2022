<?php
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