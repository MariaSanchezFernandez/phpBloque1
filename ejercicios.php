<?php

    //1 . Almacenar en un array los nombres de los alumnos de clase y mostrarla con una lista html, como lista desordenada.

    $array = ["Julian", "Jose", "Sergio", "Sandra", "María", "Javier", "Blas", "Juanfran", "Trillo", "Salva"];

    echo "<ul>";
    for ($i=0; $i < count($array); $i++) {
        echo "<li>" . $array[$i];
    }

    //2. Escribe en un array asociativo los nombres (como claves) y apellidos (valores) de los alumnos de clase. Luego usar las etiquetas <dl>, <dd> y <dt> de HTML5 para mostrarlos.

    $nombres = ["Julian", "Jose", "Sergio", "Sandra", "María", "Javier", "Blas", "Juanfran", "Trillo", "Salva"];
    $apellidos = ["Gamez", "Borras", "Melero", "Martinez", "Sánchez", "Gomez", "Exposito", "Fernández", "Exposito"];

    for ($i=0; $i < count($nombres) ; $i++) {
        for ($f=0; $f < count($apellidos); $f++) {
            echo "<dl>" . $nombres[$i] ;
            echo "<dt>" . $apellidos[$f] . "<dt>";
        }
    }
    echo "<dl>";

    //3. Generar un valor entero aleatorio entre 1 y 100. Para ello usaremos la función rand, que devuelve un valor aleatorio entre un rango de dos enteros: $num=rand(1,100);
    echo '<br>';

    echo 'EJERCICIO 3';
    echo '<br>';

    $random1 = rand(1, 100);

    if ($random1 <= 50) {
       echo "Nuestro número random es {$random1} y es menor que 50";
    } else {
        echo "Nuestro número random es {$random1} y es mayor que 50";
    }

    echo '<br>';

   //4. Generar un valor aleatorio entre 1 y 100. Luego mostrar si tiene 1, 2 o 3 dígitos.
   echo '<br>';
   echo 'EJERCICIO 4';
   echo '<br>';

   $random2 = rand(1, 10000);

   echo "Nuestro segundo número es {$random2} y ";
   if ($random2 < 10 ) {
     echo 'El número tiene 1 cifra';
   } else if ($random2 < 100) {
    echo 'El número tiene 2 cifras';
   } else if ($random2 < 1000){
    echo 'El número tiene 3 cifras';
   } else{
    echo 'El número tiene 4 cifras';
   }

   //5. Generar un valor aleatorio entre 1 y 5. Luego imprimir el nombre del número (Ej. si se genera el 3 luego mostrar en la página el string "tres").

   echo '<br><br>';

   echo 'EJERCICIO 5';
   echo '<br>';

   $random3 = rand(1,5);

   switch ($random3) {
    case 1:
        echo 'Uno';
        break;
    case 2:
        echo 'Dos';
        break;
    case 3:
        echo 'Tres';
        break;
    case 4:
        echo 'Cuatro';
        break;
    case 5:
        echo 'Cinco';
        break;
    default:
        break;
   }

   echo '<br><br>';
    //7

    echo 'EJERCICIO 7';
    echo '<br>';

    $genero = ["Masculino", "Femenino"];
    $color = ["Rojo", "Blanco"];

    $generoAleatorio = $genero[array_rand($genero)];
    $colorAleatorio = $color[array_rand($color)];

    if ($generoAleatorio == "Masculino" && $colorAleatorio == "Rojo") {
        echo 'El regalo es un bolso atrevido';
    } elseif ($generoAleatorio == "Masculino" && $colorAleatorio == "Blanco") {
        echo 'El regalo es un pantalón clásico';
    } elseif ($generoAleatorio == "Femenino" && $colorAleatorio == "Rojo") {
        echo 'El regalo es una falda divertida';
    } elseif ($generoAleatorio == "Femenino" && $colorAleatorio == "Blanco") {
        echo 'El regalo es una chaqueta aburrida';
    }

    echo '<br><br>';
    //8. Generar aleatoriamente un número entre -10 y 10 y luego mostrar un mensaje diciendo si es positivo, negativo o cero.

    echo 'EJERCICIO 8';
    echo '<br>';

    $numeroNegativoPositivo = rand(-10, 10);
    echo $numeroNegativoPositivo . '  /  ';

    if ($numeroNegativoPositivo < 0 ){
        echo 'Es negativo';
    } elseif ($numeroNegativoPositivo == 0){
        echo 'Es neutro';
    } elseif ($numeroNegativoPositivo > 0) {
        echo 'Es positivo';
    }

    echo '<br><br>';

    //9. Generar una lista desplegable (select) con todos los años entre 2020 y 2040.

    echo 'EJERCICIO 9';
    echo '<br>';

    echo '<select>';

    for ($i=2020; $i <= 2040 ; $i++) {
        echo "<option>$i</option>";
    }

    echo '</select>';

    echo '<br><br>';

    //10. Define tres arrays de 20 números enteros cada uno, con nombres “numero”, “cuadrado” y “cubo”. - Carga el array “numero” con valores aleatorios entre 0 y 19. - En el array “cuadrado” se deben almacenar los cuadrados de los valores que hay en el 	array “numero”. - En el array “cubo” se deben almacenar los cubos de los valores que hay en “numero”.

    echo 'EJERCICIO 10';
    echo '<br>';

    $numero = array();
    $cuadrado = array();
    $cubo = array();
    
    for ($i = 0; $i < 20; $i++) {
        $numero[$i] = rand(0, 19);
        $cuadrado[$i] = $numero[$i] ** 2;
        $cubo[$i] = $numero[$i] ** 3;
    }
    
    for ($i = 0; $i < 20; $i++) {
        echo "Números: " . $numero[$i] . " / " . $cuadrado[$i] . " / " . $cubo[$i] . "<br>";
    }
    
    echo '<br><br>';

    //11. Escribe un script que genere 100 números enteros aleatorios entre 0 y 100 y que los almacene en un array bidimensional. El script debe luego mostrar por separado todos los números pares seguidos, y todos los números impares seguidos
    
    echo 'EJERCICIO 11';
    echo '<br>'
    
    
    ;
    echo '<br><br>';

    //12. Crear un array de 4 filas por 5 columnas con los nombres de los alumnos ordenados según el sitio que ocupan en clase. Recorrerlo e imprimirlo en una tabla

    echo 'EJERCICIO 12';
    echo '<br>';

    $matriz =[
        ["Daniel", "Mari", "SergioG", "SergioC", ""],
        ["Javi", "Julian", "Trillo", "Josema", "Blas"],
        ["Marcos", "Juan", "Salva", "JoseL", "Juanfran"],
        ["","María", "JoseB", "Sandra", ""]
    ];

    echo "<table border='1'>";

    for ($i = 0; $i < count($matriz); $i++) {
        echo "<tr>";
        for ($f = 0; $f < count($matriz[$i]); $f++) {
            echo "<td>" . $matriz[$i][$f] . "</td>";
        }
        echo "</tr>";
    }
    echo "</table>";


?>