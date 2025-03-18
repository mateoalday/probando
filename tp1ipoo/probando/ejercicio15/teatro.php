<?php
class Teatro {
    private $nombre;
    private $direccion;
    private $funciones; // Array de funciones (cada función es un array asociativo)

    // Constructor
    public function __construct($nombre, $direccion, $funciones) {
        $this->nombre = $nombre;
        $this->direccion = $direccion;
        $this->funciones = $funciones;
    }

    // Métodos para modificar el nombre y la dirección del teatro
    public function setNombre($nuevoNombre) {
        $this->nombre = $nuevoNombre;
    }

    public function setDireccion($nuevaDireccion) {
        $this->direccion = $nuevaDireccion;
    }

    // Métodos para modificar el nombre y precio de una función específica
    public function setNombreFuncion($indice, $nuevoNombre) {
        if ($indice >= 0 && $indice < count($this->funciones)) {
            $this->funciones[$indice]["nombre"] = $nuevoNombre;
        } else {
            echo "Error: Índice de función inválido.\n";
        }
    }

    public function setPrecioFuncion($indice, $nuevoPrecio) {
        if ($indice >= 0 && $indice < count($this->funciones)) {
            $this->funciones[$indice]["precio"] = $nuevoPrecio;
        } else {
            echo "Error: Índice de función inválido.\n";
        }
    }

    // Método para mostrar la información del teatro y sus funciones
    public function mostrarInformacion() {
        echo "Teatro: " . $this->nombre . "\n";
        echo "Dirección: " . $this->direccion . "\n";
        echo "Funciones:\n";
        foreach ($this->funciones as $index => $funcion) {
            echo "  " . ($index + 1) . ". " . $funcion["nombre"] . " - $" . $funcion["precio"] . "\n";
        }
    }
}

// Datos iniciales de las funciones
$funcionesIniciales = [
    ["nombre" => "Hamlet", "precio" => 1500],
    ["nombre" => "Romeo y Julieta", "precio" => 1200],
    ["nombre" => "Otelo", "precio" => 1300],
    ["nombre" => "Macbeth", "precio" => 1400]
];

// Crear una instancia de Teatro
$teatro = new Teatro("Gran Teatro", "Av. Principal 123", $funcionesIniciales);

// Mostrar la información inicial del teatro
$teatro->mostrarInformacion();

// Modificar algunos datos del teatro y las funciones
$teatro->setNombre("Teatro Nacional");
$teatro->setDireccion("Calle 456, Ciudad");
$teatro->setNombreFuncion(1, "El Lago de los Cisnes");
$teatro->setPrecioFuncion(1, 1600);

// Mostrar la información actualizada
echo "\nDespués de las modificaciones:\n";
$teatro->mostrarInformacion();
?>
