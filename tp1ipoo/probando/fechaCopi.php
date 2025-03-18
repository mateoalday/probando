<?php


class Fecha {
    public $dia;
    public $mes;
    public $anio;

    // Constructor
    public function __construct($dia, $mes, $anio) {
        $this->dia = $dia;
        $this->mes = $mes;
        $this->anio = $anio;
    }

    // Método para obtener la fecha abreviada
    public function fechaAbreviada() {
        return sprintf("%02d/%02d/%d", $this->dia, $this->mes, $this->anio);
    }

    // Método para obtener la fecha extendida
    public function fechaExtendida() {
        $meses = ["enero", "febrero", "marzo", "abril", "mayo", "junio", 
                  "julio", "agosto", "septiembre", "octubre", "noviembre", "diciembre"];
        $nombreMes = $meses[$this->mes - 1];
        return "{$this->dia} de {$nombreMes} de {$this->anio}";
    }

    // Método para verificar si un año es bisiesto
    private function esBisiesto($anio) {
        return ($anio % 4 == 0 && $anio % 100 != 0) || ($anio % 400 == 0);
    }

    // Método para obtener los días en un mes
    private function diasEnMes($mes, $anio) {
        if (in_array($mes, [1, 3, 5, 7, 8, 10, 12])) return 31;
        if (in_array($mes, [4, 6, 9, 11])) return 30;
        return $this->esBisiesto($anio) ? 29 : 28;
    }

    // Método para incrementar un día
    public function incrementarUnDia() {
        if ($this->dia < $this->diasEnMes($this->mes, $this->anio)) {
            $this->dia++;
        } else {
            $this->dia = 1;
            if ($this->mes < 12) {
                $this->mes++;
            } else {
                $this->mes = 1;
                $this->anio++;
            }
        }
    }
}

// Función para incrementar una fecha en un número de días
function incremento($fecha, $dias) {
    $nuevaFecha = new Fecha($fecha->dia, $fecha->mes, $fecha->anio);
    for ($i = 0; $i < $dias; $i++) {
        $nuevaFecha->incrementarUnDia();
    }
    return $nuevaFecha;
}

// Código de prueba

?>
