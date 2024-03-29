<?php
/**
 * author: NuupSistemas
 * Progranación orientada a objetos
 */
//Las clases nos permiten agrupar información y acciones que podemos ejecutar con dicha información
// que es una clase en php

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
    // se declaran las variables que se necesitan, estas se llaman propiedades
    public $nombre;
    public $apPaterno;
    public $apMaterno;
    public $edad;

    // creamos los métodos para poder darle valor a las propiedades del objeto
    public function agrearDatosNombre($nombre, $apPat, $apMat){
        $this->nombre = $nombre;
        $this->apPaterno = $apPat;
        $this->apMaterno = $apMat;
    }

    public function agrearEdad($edad) {
        $this->edad = $edad;
    }
    public function nombreDeLaPersona() {
        $nombreCompleto = $this->nombre." ".$this->apPaterno." ".$this->apMaterno;
        return $nombreCompleto;
    }    
    public function edadPersona() {
        return $this->edad;
    }
}

// creamos un objeto de la clase persona
$persona_dos =  new Persona();
// agregamos valores a las propiedad del objeto, por medio de los nmétodos declarados
$persona_dos->agrearDatosNombre("Serafin", "Trevor", "Ariza");
$persona_dos->agrearEdad(19);

// por medio de los métodos declarados dentro de la clase, podemos obtener valores

echo "Nombre completo desde un método: ".$persona_dos->nombreDeLaPersona();
echo "<br>";
echo "Edad obtenida desde un método: ".$persona_dos->edadPersona();

?>