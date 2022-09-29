<?php


function sumar($oper1, $oper2){
    $resultado = $oper1 + $oper2;
    return $resultado;
}

function restar($oper1, $oper2){
    $resultado = $oper1 - $oper2;
    return $resultado;
}

function multiplicar($oper1, $oper2){
    $resultado = $oper1 * $oper2;
    return $resultado;
}

function dividir($oper1, $oper2){
    if ($oper2 != 0) {
        $resultado = $oper1 / $oper2;
    }
    else {
        echo("Indeterminación de dividir por cero");
        die();
    }
    
    return $resultado;
}

?>