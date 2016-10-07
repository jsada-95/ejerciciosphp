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

$array1 = array (
	'base' => 'Javier', 
	'escolta' => 'Iván', 
	'alero' => 'David', 
	'ala-pivot' => 'Oscar', 
	'pivot' => 'Jesus'
	);

foreach ($array1 as $position=>$element){
    echo "Posición: ". $position . ", nombre: " . $element . '<br>'; 
} 

?>
</body></html>