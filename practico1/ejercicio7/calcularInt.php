<?php require './layout/doctype.php' ?>
<?php

// print_r($_REQUEST);

if (!isset($_REQUEST['inversion']) || $_REQUEST['inversion'] <= 0 || !isset($_REQUEST['interes']) || $_REQUEST['interes'] <= 0) {
    echo ("El valor de la inversión y del interés deben ser mayores a cero");
    return;
} else {
    $inversion = $_REQUEST["inversion"];
    $interes = $_REQUEST["interes"];
}

// echo ("<p>" . $inversion . "</p>");
// echo ("<p>" . $interes . "</p>");

calcularint($inversion, $interes);
// gananciaAcumulada($inversion, $interes,12);

// Función para crear tabla

function calcularint ($inversion, $interes){
    echo "<table>";
        echo "<thead>";
        echo "<td>Mes</td>";
        echo "<td>interes</td>";
        echo "<td>ganancia mensual</td>";
        echo "<td>ganancia acumulada</td>";
        echo "</thead>";
        for ($i=1; $i <= 12; $i++ ){
            $ganancia = $inversion*$interes/100;
            echo "<tr>";
                echo "<td>$i</td>";
                echo "<td>$interes.%.</td>";
                echo "<td>$ganancia</td>";
                // echo "<td>$acumulado</td>";
            echo "</tr>";
        }
    echo "</table>";
}

// function gananciaAcumulada($interes, $inversion, $meses){
//     for ($i=0; $i<=$meses; $i++){
//         $i = $inversion*$interes/100;
//     }
//     $gananciaAcum = $i;
//     echo($gananciaAcum);
// }

?>
<?php require './layout/end_doctype.php' ?>