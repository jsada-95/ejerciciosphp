<!-- Paso por referencia. Crea una función que ordene un array de menor a mayor. -->

<!DOCTYPE html>
<html><head>
        <meta charset="UTF-8">
         <title>Ejercicio 5</title>
</head><body>
<?php

function ordenar(&$array1){
	for ($a=0; $a < 6; $a++){
		for ($i=0; $i < 5; $i++){
			if ($array1[$i] > $array1[$i+1] ){
				$aux = $array1[$i];
				$array1[$i] = $array1[$i+1];
				$array1[$i+1] = $aux;
			}
		}
	}
}


$array1 = array (2, 4, 5, 1, 10, 3);

ordenar($array1);

foreach ($array1 as $element){
    echo $element . '<br>';
} 
?>



</body></html>