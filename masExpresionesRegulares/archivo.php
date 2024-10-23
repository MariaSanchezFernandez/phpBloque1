
<?php
echo "<br>Ejercicio 1 <br><br>";
/*Ejercicio 1: Extracción de números
Dada una cadena de texto que contiene tanto letras como números, escribe una función que use preg_match_all() para extraer todos los números presentes en la cadena y devolverlos en un array*/
function RecogerNumeros($cadenaSoloNumeros){
    $patronNumeros = '/[0-9]/';
    preg_match_all($patronNumeros, $cadenaSoloNumeros, $res);
    return $res[0];
}

$cadenaSoloNumeros = 'kjfj234jkh234klfdjnkls435k2l34';

$encontrarNumeros = RecogerNumeros($cadenaSoloNumeros);

print_r($encontrarNumeros);

echo "<br><br>Ejercicio 2 <br><br>";

/*
Ejercicio 2: Reemplazo de espacios múltiples
Escribe una función que use preg_replace() para reemplazar todos los espacios múltiples en una cadena por un solo espacio. */
$patronEspacios = '/ /';
$aReemplazar = ' ';
$cadenaEspaciosMultiples = 'naranjas         kiwi         manzana       papaya         melon ';

$quitarEspacios = preg_replace($patronEspacios,$aReemplazar, $cadenaEspaciosMultiples);

print_r($quitarEspacios);

echo "<br><br>Ejercicio 3<br><br>";

/*
Ejercicio 3: Remover etiquetas HTML
Dada una cadena que contiene HTML, escribe una función que use preg_replace() para eliminar todas las etiquetas HTML. */

$patronHtml = '/\>[a-zA-Z0-9](\/)?\>/';
$aReemplazarHtml = ' ';
$cadenaHtml = '<h3>Hola Mundo</h3>';

$quitarHtml = preg_replace($patronHtml,$aReemplazarHtml, $cadenaHtml);

print_r($quitarHtml);

echo "<br><br>Ejercicio 4<br><br>";


/* 
Ejercicio 4: Validación de contraseña
Escribe una función que valide si una contraseña es válida utilizando preg_match(). Las contraseñas válidas deben tener:

Al menos 8 caracteres.
Al menos una letra mayúscula.
Al menos una letra minúscula.
Al menos un número.
Al menos un carácter especial (por ejemplo, @, #, !, etc.).
*/

/* Ejercicio 5: Extraer hashtags de un texto
Dado un texto que contiene hashtags (por ejemplo, #programación, #php), crea una función que use preg_match_all() para extraer todos los hashtags de la cadena y devolverlos en un array.

Pista: Un hashtag comienza con # seguido de una o más letras o números.
*/

/*
Ejercicio 6: Validación de nombres de usuario
Escribe una función que valide un nombre de usuario. Debe tener entre 5 y 15 caracteres, solo letras y números, y comenzar con una letra.
*/
/*
Ejercicio 7: Extracción de palabras que empiezan con vocales
Escribe una función que extraiga todas las palabras que comienzan con una vocal en una cadena de texto.
*//* 
Ejercicio 8: Reemplazo de todas las vocales por asteriscos
Escribe una función que reemplace todas las vocales (tanto mayúsculas como minúsculas) en una cadena de texto por un asterisco (*).
*//*
Ejercicio 9: Remover todas las letras mayúsculas
Escribe una función que elimine todas las letras mayúsculas de una cadena de texto.

*//*
Ejercicio 10: Validación de direcciones MAC
Escribe una función que valide una dirección MAC. Una dirección MAC válida tiene el formato XX:XX:XX:XX:XX:XX, donde XX son dos caracteres hexadecimales (0-9, A-F).
*//*
Ejercicio 11: Reemplazo de números por su valor al cuadrado
Escribe una función que encuentre todos los números en una cadena y los reemplace por su valor al cuadrado.
*//*
Ejercicio 12: Validación de archivos con extensión .jpg o .png
Escribe una función que valide si un nombre de archivo tiene una extensión .jpg o .png. */
