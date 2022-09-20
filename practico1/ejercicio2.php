
<!-- 2.	Escribir un programa que muestre una lista html generada desde el servidor a través de un arreglo. 
Identifique las diferencias entre arreglos asociativos e indexados (ver docu oficial) -->
    
<h1>Ejercicio 2</h1>

<h2>Lista generada de forma dinámica</h2>

<?php

$nombres = ["Martu", "Berni", "K", "Manu"];

echo "<ul>";

foreach($nombres as $nombre){

    echo "<li>" . $nombre . "</li>";

}

echo "</ul>";

?>