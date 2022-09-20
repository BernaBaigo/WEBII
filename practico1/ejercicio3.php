
<?php

// $NombreG = $_GET['nombre1'];
// $ApellidoG = $_GET['apellido1'];
// $EdadG = $_GET['edad1'];


// $NombreP = $_POST['nombre2'];
// $ApellidoP = $_POST['apellido2'];
// $EdadP = $_POST['edad2'];

if(empty($_REQUEST['nombre2']) || empty($_REQUEST['apellido2'])|| empty($_REQUEST['edad2'])){

    echo "Completar todos los campos";
    echo "<br>";

}

else{

    $NombreR = $_REQUEST['nombre2'];
    $ApellidoR = $_REQUEST['apellido2'];
    $EdadR = $_REQUEST['edad2'];
    
    
    print_r($_REQUEST);
    echo "<br>";
    echo "Nombre " . $NombreR;
    echo "<br>";
    echo "Apellido " . $ApellidoR;
    echo "<br>";
    echo "Edad " . $EdadR;
    echo "<br>";

}


?>

<a href="ejercicio3.html">Volver a formulario</a>