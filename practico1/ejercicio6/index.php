<?php  require './layout/doctype.php'?>

    <h1>Tabla de multiplicar</h1>
    <p>Ingrese el límite de la tabla</p>
    <form action="calcularTabla.php" method="GET">
        <p> 
            <input type="number" name="fila" placeholder="Fila">
        </p>
        <p>
            <input type="number" name="columna" id="" placeholder="Columna">
        </p>
    
        <button type="submit">Multiplicar</button>
    </form>

<?php  require './layout/end_doctype.php'?>
