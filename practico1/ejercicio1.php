<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Unidad1</title>
</head>

<body>

    <h1>Hola Mundo!</h1>

    <p>Esta es una página generada de forma dinámica</p>



    <?php

    echo "<ul>";

    $ArregloNombres = array("Berni", "Martu", "K");

    foreach ($ArregloNombres as $Nombre) {
        echo "<li>" . $Nombre .  "</li>";
    }
    echo "</ul>";


    $foo = 'Bob';                // Asigna el valor 'Bob' a $foo
    $bar = &$foo;                // Referenciar $foo vía $bar.
    $bar = "Mi nombre es $bar";  // Modifica $bar...
    echo $bar;
    echo $foo;

    ?>


</body>

</html>