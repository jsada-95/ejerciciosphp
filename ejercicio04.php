<!-- Crea dos funciones llamadas mayor y menor. 
Cada una de ellas debe recibir un array numérico 
y devolver el valor mayor y menor respectivamente.-->

<!DOCTYPE html>
<html>
<head>
        <meta charset="UTF-8">
        <title>Ejercicio 4</title>
</head>
<body>
<?php

function mayor($array1){
	$mayor=$array1[0];
   	foreach ($array1 as $element){
   	if ($element > $mayor)
		$mayor=$element;
	} 
	echo "El número mayor es: ".$mayor ."</br>";
}

function menor($array1){
   $menor=$array1[0];
   	foreach ($array1 as $element){
   	if ($element < $menor)
		$menor=$element;
	} 
	echo "El número menor es: ".$menor;
}

$array1 = array (2, 4, 5, 1, 10, 3);

mayor($array1);
menor($array1);

?>

</body>
</html>