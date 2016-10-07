<!-- Ejercicio7.php y Rectangulo.php

Crea una clase Rectangulo con dos atributos base y altura. 
Debe incluir los métodos:
- constructor
- perimetro
- superficie
- añade también los getters y setters
En el fichero Ejercicio7 debes crear un ejemplar de la clase anterior y usar
los métodos disponibles. La variedad de pruebas a gusto del alumno.
 -->
<?php
class Rectangulo{ 
    private $_base;
    private $_altura;

    function __construct($base, $altura)
    {
        $this->_base = $base;
        $this->_altura = $altura;
    } 
    public function __toString(){
        return "Rectangulo de $this->_base x $this->_altura";
    }
    function setBase($base){
        $this->_base = $base;
    }
    function getBase(){
        return $this->_base;
    }
    function setAltura($altura){
        $this->_altura = $altura;
    }
    function getAltura(){
        return $this->_altura;
    }


    function perimetro(){
        return 2*($this->_base + $this->_altura);
    }
    function superficie(){
        return $this->_base * $this->_altura;
    }
}


?>