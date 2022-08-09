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
    // se declaran las variables que se necesitan, y se llaman propiedades
    public $nombre;
    public $apPaterno;
    public $apMaterno;

    public nombreDeLaPersona() {
        return;
    }

    

}


?>