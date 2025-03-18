<?php
class Calculadora {
    private $num1;
    private $num2;

    // Constructor
    public function __construct($num1, $num2) {
        $this->num1 = $num1;
        $this->num2 = $num2;
    }

    // Getters y Setters
    public function getNum1() {
        return $this->num1;
    }

    public function setNum1($num1) {
        $this->num1 = $num1;
    }

    public function getNum2() {
        return $this->num2;
    }

    public function setNum2($num2) {
        $this->num2 = $num2;
    }

    // Métodos de operaciones
    public function sumar() {
        return $this->num1 + $this->num2;
    }

    public function restar() {
        return $this->num1 - $this->num2;
    }

    public function multiplicar() {
        return $this->num1 * $this->num2;
    }

    public function dividir() {
        return ($this->num2 != 0) ? $this->num1 / $this->num2 : "Error: División por cero.";
    }

    // Representación en texto del objeto
    public function __toString() {
        return "calculadora { Número 1: $this->num1, Número 2: $this->num2 }";
    }
}
?>
