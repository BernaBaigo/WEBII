<?php

// print_r($_REQUEST);
require("funciones.php");

if (
    !is_numeric($_REQUEST["valor1"]) ||
    !is_numeric($_REQUEST["valor2"]) ||
    empty($_REQUEST["operador"])
) {
    echo ("ERROR: parámetros incorrectos");
    die(); //Esta función la ponemos para que en el caso que los parámetros sean incorrectos 
           //termine acá y no siga queriendo ejecutar el resto
}

$operando1 = $_REQUEST["valor1"];
$operando2 = $_REQUEST["valor2"];
$operador = $_REQUEST["operador"];


switch ($operador) {
    case "sumar": {
            $resultado = sumar($operando1, $operando2);
            break;
        }
    case "restar": {
            $resultado = restar($operando1, $operando2);
            break;
        }
    case "multiplicar": {
            $resultado = multiplicar($operando1, $operando2);
            break;
        }
    case "dividir": {
            $resultado = dividir($operando1, $operando2);
            break;
        }
    default: {
            echo ("Operación no definida");
        }
}

echo ("El resultado es " . $resultado);
