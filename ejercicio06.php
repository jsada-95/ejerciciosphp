<!-- Formularios. Crea dos ficheros (ejercicio06.html y ejercicio06.php). En el primero construye un formulario para el registro de libros en una biblioteca. En él usa todos los tipos básicos de input: text, password, select, option, checkbox y submit. El segundo debe mostrar por pantalla los valores devueltos. Prueba $_GET, $_POST y $_REQUEST. -->

<!DOCTYPE html>
<html><head>
        <meta charset="UTF-8">
         <title>Ejercicio 6</title>
</head><body>
<?php
 

if(isset($_POST) && !empty($_POST)){
    echo "Recibido!! Mira la URL en tu navegador<hr>";
    echo "Nombre: $_POST[nombre]". '<br>';
    echo "Contraseña: $_POST[contrasena]". '<br>';
    echo "Libro: $_POST[lista]". '<br>';
   // echo "Contraseña: $_GET[contrasena]";
    //var_dump nos puede ayudar a entender lo que hemos recibido
    var_dump($_POST);
}
 else {
     echo "No hemos recibido nada!";
} 
?>



</body></html>