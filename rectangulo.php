
<?php
require_once 'ejercicio07.php';
$rectangulo = new Rectangulo(5, 10);

echo $rectangulo;
echo '<br>';
echo "Su superficies es: " . $rectangulo -> perimetro();
echo '<br>';
echo "Su superficies es: " . $rectangulo -> superficie();;
?>
