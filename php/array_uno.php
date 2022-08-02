<?php
    /** 
     * Author: NuupSistemas . José Antonio Alarcón
     * array_comnbine(); sirve para crear un arreglo con las llaves y valores
     * Syntax: array_combine( $keys_array, $values_array )
     * $keys_array: Es un arreglo de llaves. .
     * $values_array: Es el arreglo con los valores que serán usado en el nuevo arreglo
     **/

    $llaves = ['carro', 'avion', 'barco']; // $keys_array
    $valores = ['amarillo', 'blanco', 'rojo']; // $values_array
    $arreglo_KV = array_combine($llaves, $valores);
    print_r($arreglo_KV);

    // un ejemplo más
    $keys_array = ['CDMX', 'Monterrey', 'Guadalajara'];
    $values_array = ['1000000 hab', '50000 hab', '40000 hab'];
    $arregloPoblacion = array_combine($keys_array, $values_array);
    var_dump($arregloPoblacion);

    // podriamos crear una función
    function combinarArreglos($array1, $array2){
        return array_combine($array1, $array2);
    }

    $nombres = ['Hugo', 'Paco', 'Luis'];
    $edades = [10, 15 , 13];
    print_r(combinarArreglos($nombres, $edades));


    



?>