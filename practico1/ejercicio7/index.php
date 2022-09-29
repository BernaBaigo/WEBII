<?php require './layout/doctype.php' ?>

<h1>Calcule su rentabilidad</h1>
<form action="calcularInt.php" method="GET">
    <input required type="number" placeholder="Ingrese monto invertido" name="inversion">
    <input required type="number" placeholder="Ingrese porcentaje de interes" name="interes">
    <button type="submit">Calcular interés</button>
</form>

<?php require './layout/end_doctype.php' ?>