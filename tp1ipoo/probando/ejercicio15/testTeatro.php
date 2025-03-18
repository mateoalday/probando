<?php

include_once "teatro.php";


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
