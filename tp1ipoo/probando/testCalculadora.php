<?php
include_once "Calculadora.php"; // Incluir la clase Calculadora
include_once"login.php";
// Crear objeto con valores iniciales
$calc = new calculadora(10, 5);

// Mostrar los valores iniciales
echo "🔢 Valores iniciales: " . $calc . "\n";

// Operaciones matemáticas
echo "➕ Suma: " . $calc->sumar() . "\n";
echo "➖ Resta: " . $calc->restar() . "\n";
echo "✖️ Multiplicación: " . $calc->multiplicar() . "\n";
echo "➗ División: " . $calc->dividir() . "\n";

// Modificar valores
$calc->setNum1(20);
$calc->setNum2(4);

echo "\n🔄 Después de modificar los valores: " . $calc . "\n";
echo "➗ Nueva división: " . $calc->dividir() . "\n";

$obj = new login("valentin", "pollo","don ", "la peor provincia",["pollo","casa","limon","oveja"],"asdasd");
echo $obj->validarPassword();


?>
