<?php

$cantidad = $_GET['cantidad'];
// echo $cantidad;

$ciudades = array ("Tandil", "Olavarria", "Azul", "Necochea", "Balcarce", "MDQ", "Juarez", "Tres Arroyos");

// print_r($ciudades);

for ($i=0; $i<$cantidad; $i++){

    echo "<li>$ciudades[$i]</li>";

}
echo "<br>";
echo "<a href='index.html'>Volver a inicio</a>";