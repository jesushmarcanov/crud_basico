<?php 
    //Funciones en PHP
    //Fragmento de código que sirve para ejecutar una tarea específica

    function bienvenida(){
        echo "Bienvenido al curso de PHP";
    }

    //Llamada a la funcion
    bienvenida();

    echo '<br><br>';

    //Funciones con parámetros

    function saludo($saludo){
        echo $saludo;
    }

    //Llamada a la funcion, en este caso se coloca el nombre de la función y dentro de los paréntesis el valor que se quiere mostrar
    
    saludo("Hola, soy una función con parámetros");
    echo '<br><br>';

    //Funciones con retorno, son parecidas a las funciones con parámetros, a diferencia de que s eusa la palabra reservada return
    function retorno($retornar){
        return $retornar;
    }

    //Llamada a la funcion, en este caso se coloca la palabra echo + el nombre de la función y dentro de los paréntesis el valor que se quiere mostrar
    echo retorno("Retornando la funcion");


?>
