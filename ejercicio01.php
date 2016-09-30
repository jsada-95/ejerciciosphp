<!-- Crea un script (ejercicio01.php)
Debes crear un array ordenado de 5
elementos. Inicializalo al declararlo.
Muestra su contenido con un bucle "for". -->

<!DOCTYPE html>
<html><head>
        <meta charset="UTF-8">
        <title>ejemplo 6</title>
</head><body>
<?php
//inicializamos

$array1 = array ("hola", "adios", 3, true, "daw");

foreach ($array1 as $element){
    echo $element . '<br>';
} 

?>
</body></html>