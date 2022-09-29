<?php

// print_r($_REQUEST);

if (isset($_REQUEST["peso"]) && $_REQUEST > 0 && isset($_REQUEST["altura"]) && $_REQUEST > 0) {
    $peso = $_REQUEST["peso"];
    $altura = $_REQUEST["altura"];
    calcularIMC($peso, $altura);
}



function calcularIMC($peso, $altura){
    $imc = $peso/($altura * $altura);
    estado_imc($imc);
    echo("");
    echo("Su IMC es: " . $imc);
}

function estado_imc($imc){
    if ($imc < 18.5) {
        echo("De acuerdo a su IMC usted tiene BAJO PESO");
    }
    elseif ($imc >= 18.5 && $imc < 25){
        echo("De acuerdo a su IMC usted tiene PESO NORMAL");
    }
    elseif ($imc >= 25 && $imc < 30) {
        echo("De acuerdo a su IMC usted tiene SOBREPRESO");
    }
    elseif($imc >= 30){
        echo("De acuerdo a su IMC usted tiene OBESIDAD");
    }

}

?>