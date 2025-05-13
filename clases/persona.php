<?php
class Persona {
    public $nombre;
    public $correo;

    public function __construct($nombre, $correo) {
        $this->nombre = $nombre;
        $this->correo = $correo;
    }

    public function mostrarDatos() {
        return "Nombre: {$this->nombre} <br> Correo: {$this->correo}";
    }

    public function mensaje() {
        return "Soy una persona común.";
    }
}


class Usuario extends Persona {
    public $rol;

    public function __construct($nombre, $correo, $rol) {
        parent::__construct($nombre, $correo);
        $this->rol = $rol;
    }

    public function mensaje() {
        return "Soy un usuario con rol: {$this->rol}";
    }

    public function metodoExtra() {
        return "Este es un método adicional de la clase hija.";
    }
}
?>
