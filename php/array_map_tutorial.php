<?php
/**
 * Author: Nuup Sistemas, José Alarcón
 * array_map
 */

 //creación de una función que agrega un texo a un valor dado
 function agregaTexto($nombre){
    $textoAgregado = "Me llamo: ".$nombre;
    return $textoAgregado;
 }

 // escribimos el primer arreglo
 $arregloInicio = ['Cecilia', 'Juan', 'Mary', 'Luis'];

 // utlizamos el método array_map y lo guardamos en un nuevo arreglo
 $arregloFinal = array_map("agregaTexto", $arregloInicio);
 echo('<pre>');
 var_dump($arregloFinal);
 echo('</pre>');

 // Ejemplo con varios arreglos
 function suma_de_dos_numeros($num_uno, $num_dos){
    return $num_uno + $num_dos;
 }

 $arrayPrimerosNumeros = [10, 15, 30, 40];
 $arraySegundosNumeros = [20, 5, 2, 60];
 $arrayDeSuma = array_map("suma_de_dos_numeros", $arrayPrimerosNumeros, $arraySegundosNumeros);
 echo('<pre>');
 var_dump($arrayDeSuma);
 echo('</pre>');

 // creacion de un arreglo de arreglos
 $coche = ['vw', 'renault', 'ford'];
 $color = ['azul', 'gris', 'negro'];
 $año = ['modelo 2020', 'modelo 2019', 'modelo 2022'];
 $arregloDeArreglos = array_map(null, $coche, $color, $año);
 echo('<pre>');
 var_dump($arregloDeArreglos);
 echo('</pre>');

?>