<!--Crea una array asociativo con las cinco 
posiciones. En cada posición debes almacenar 
uno o más jugadores en un array ordenado. 
Muestra toda la plantilla usando listas no 
ordenadas html (ul y li)  -->
 <!DOCTYPE html>
<html><head>
        <meta charset="UTF-8">
        <title>ejemplo 7</title>
</head><body>
<?php
//inicializamos

$baloncesto = array (
    'Base' => array(
        'jugador1' => 'Javier',
        'jugador2' => 'Manuel'
    ), 
    'Escolta' => array(
       	'jugador1' => 'Iván',
        'jugador2' => 'Gonzalo'
    ), 
    'Alero' => array(
        'jugador1' => 'David',
        'jugador2' => 'Pepe'
    ), 
    'Ala-pivot' => array(
        'jugador1' => 'Oscar',
        'jugador2' => 'Miguel'
    ), 
    'Pivot' => array(
        'jugador1' => 'Jesus',
        'jugador2' => 'Fernando'
    )
);

foreach ($baloncesto as $posicion=>$nombre){    
   
    echo "<ul><li> $posicion :  </li>";
    foreach ($nombre as $clave=>$nombre){
        echo "<ul><li> $nombre </li></ul>";
    }
    echo "</ul>";
}
?>

</body></html>