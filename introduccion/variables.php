<?php 
    //VARIABLES EN PHP
    //Variable numérica
    $numero = 10;
    echo '<h2>Variables Numéricas</h2>';
    echo "Esto es un número: $numero";
    echo '<br>Esto también es un numero: '.$numero;
    echo '<br>';

    //Variable tipo texto
    echo '<h2>Variables tipo Texto</h2>';
    $nombre = "Esto es una cadena de texto";
    echo '<br>Mi cadena: '.$numero;
    echo '<br>';

    //Variable de tipo booleana
    echo '<h2>Variables Booleanas</h2>';
    $booleana = true;
    $boolFalse = false;
    echo '<br>Esto es una variable booleana: '.$booleana;
    echo '<br>Esto es una variable booleana con valor False: '.$boolFalse;
    echo '<br>';

    //Variable tipo arreglo (array)
    //Para mostrar el valor de un arreglo hay que indicar los índices, comenzando desde el cero (0) 
    echo '<h2>Arreglos</h2>';
    $arreglo = array("Alejandro", "Maria");
    echo $arreglo[1];
    echo '<br>';

    //Arreglos con propiedades
    //Son como los arreglos simples, a diferencia de que cada elemento tiene un par "clave"=>"valor" 
    echo '<h2>Arreglos con porpiedades</h2>';
    $colores = array("color1"=>"rojo", "color2"=>"azul");

    echo $colores["color1"];
    echo '<br>' . $colores["color2"];
    echo '<br>';

    //Variable tipo objeto
    echo '<h2>Objetos</h2>';
    $objeto = (object)["mueble1"=>"armario", "mueble2"=>"escritorio"];
    echo '<br>' . $objeto->mueble1;
?>
