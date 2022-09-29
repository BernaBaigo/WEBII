<?php  require './layout/doctype.php'?>

<?php

// print_r($_REQUEST);

if (isset($_REQUEST["fila"]) && $_REQUEST["fila"] > 0 && isset($_REQUEST["columna"]) && $_REQUEST["columna"]){
    $tFila = $_REQUEST["fila"];
    $tColumna = $_REQUEST["columna"];
}

crearTabla($tFila, $tColumna);

//Función para crear tabla

function crearTabla ($tFila, $tColumna){
    echo "<table>";
    for ($fila=1; $fila <= $tFila; $fila++ ){
        echo "<tr>";
        for ($columna=1; $columna <= $tColumna; $columna++){
            echo "<td>" . $fila * $columna . "</td>";
        }
        echo "</tr>";
    }
    echo "</table>";

}

?>
<?php  require './layout/end_doctype.php'?>


