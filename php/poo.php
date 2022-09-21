<?php
/**
 * author: NuupSistemas
 * Progranación orientada a objetos
 */
//Las clases nos permiten agrupar información y acciones que podemos ejecutar con dicha información

/**
 * public quiere decir que la propiedad se puede acceder y modificar fuera 
 * del «molde» (esqueleto o contexto) de la clase.
 * private indica que no es posible ni leer ni reescribir la propiedad 
 * fuera de la clase y esto nos trae un nuevo concepto muy importante llamado encapsulamiento
 * 
 * Por otro lado todas las funciones o acciones que van a leer o interactuar 
 * con dichos datos (o propiedades) las voy también a convertir en métodos de la clase, 
 * tan sólo colocando dichas funciones dentro de la clase:
 */

class Persona {
    // se declaran las variables que se necesitan, y se llaman propiedades
    public $nombre;
    public $apPaterno;
    public $apMaterno;
    public $edad;  

}

// creamos el objeto de la clase persona
$persona_uno = new Persona();
// podemos definir las caracteristicas de la persona de la sig manera
$persona_uno->nombre = "Juan";
$persona_uno->apPaterno = "Sánchez";
$persona_uno->apMaterno = "García";
$persona_uno->edad = "30";
// ahora podemos mostrar las características que se han definido del objeto
echo "Nombre: ".$persona_uno->nombre;
echo "<br>";
echo "Apellidos :".$persona_uno->apPaterno." ".$persona_uno->apMaterno;
echo "<br>";
echo "Edad : ".$persona_uno->edad;



?>