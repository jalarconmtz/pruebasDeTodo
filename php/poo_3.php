<?php
/**
 * author: NuupSistemas
 * Progranación orientada a objetos
 */

/**
 * CONSTRUCTORES DE CLASES DE PHP
 * Es un método especial que se ejecuta automáticamente cuando se crea
 * una instancia del objeto. Y utilizamos el método. __construct()
 * 
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