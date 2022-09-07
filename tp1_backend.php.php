<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practico 1 BACKEND</title>
</head>
<body>
    <h1>EJERCICIOS</h1>
    <br>


<!--EJERCICIO 1. Imprimir por pantalla: “Hola mundo”.-->
    <?php
        echo "Hola mundo";
    ?>
        <br>
        <br>


<!--EJERCICIO 2. Cargar en una variable la cadena de caracteres “Hola mundo” y luego imprimir por pantalla..-->
    <?php
            $saludo="Hola mundo";
            echo $saludo;
    ?>
        <br>
        <br>

<!--EJERCICIO 3. Crear dos variables enteras y mostrar por pantalla, la suma, la resta, la multiplicación, la división
        entera y el resto de la división entera.-->
        <?php
            $frutillas=8;
            $bananas=4;
            echo "las variables son: " . $frutillas ." y ". $bananas;
        ?>

        <br>


        <?php
            echo "suma: ".($frutillas+$bananas);
        ?>
        <br>
        <?php
            echo "resta: ".($frutillas-$bananas);
        ?>
        <br>
        <?php
            echo "multiplicación: ".($frutillas*$bananas);
        ?>
        <br>
        <?php
            
    
            echo "división: ".($frutillas/$bananas);
        ?>
        <br>
        <?php
            echo "resto: ".($frutillas%$bananas);
        ?>
        <br>
        <br>


<!--EJERCICIO 4. Realizar la transformación de grados Celsius a Fahrenheit, para el valor 20°C y luego lo imprima por
pantalla.-->

    <?php
        $grados=20;

        echo "Grados Celsius: ".$grados." °C";
        
    ?>
    <br>
    <?php
        
        echo "La transformación de grados Celsius a grados Fahrenheit es igual a: ".(($grados*1.8)+32) ." °C";
    ?>
    <br>
    <br>

<!--EJERCICIO 5. Implementar algoritmos que permitan:
a) Calcular el perímetro y el área de un rectángulo, dado que su base es 18cm y su altura 12cm.
b) Calcular el perímetro y el área de un círculo dado que su radio es de 30cm-->

    <?php
        $base=18;
        $altura=12;

        echo "Si la base del rectángulo es de 18cm y tiene una altura de 12cm"
        
    ?>
    <br>
    <br>
    <?php
        echo "El perímetro del rectángulo es igual a ".(($base*2)+($altura*2));
        
    ?>
    <br>
    
    <?php
        echo "Y el área del rectángulo es igual a ".$base*$altura;
        
    ?>
    <br>
    <br>
    <?php
        $radio=30;
        $py=3.14;
        echo "Si el radio del círculo es de 30 cm";
        
    ?>
    <br>
    <br>
    <?php
        
        echo "El perímetro del círculo es igual a ". 2*$py*$radio;
        
    ?>
    <br>
    <?php
        
        echo "Y el área del círculo es igual a ". ($radio*$radio)*$py;
        
    ?>


    
</body>
</html>