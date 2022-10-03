<?php

/**
 * Calcula el resultado de hacer la operación de $oper
 * sobre los argumentos $op1 y $op2.
 * 
 * @param mixed $op1 El primer operando.
 * @param mixed $op2 El segundo operando.
 * @param string $op El operador 
 *                   (valores válidos: '+', '-', '*', '/').
 * @return mixed El resultado del cálculo.
 */
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