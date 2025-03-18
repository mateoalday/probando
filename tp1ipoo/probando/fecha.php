<?php


class fecha {

private int $anio;
private int $mes;
private int $dia;
private int $incremento;


	public function __construct($anio, $mes, $dia , $incremento) {

		$this->anio = $anio;
		$this->mes = $mes;
		$this->dia = $dia;
        $this->incremento = $incremento;
	}

	public function getAnio() {
		return $this->anio;
	}

	public function setAnio($nuevoAnio) {
		$this->anio = $nuevoAnio;
	}

	public function getMes() {
		return $this->mes;
	}

	public function setMes($nuevoMes) {
		$this->mes = $nuevoMes;
	}

	public function getDia() {
		return $this->dia;
	}

	public function setDia($nuevoDia) {
		$this->dia = $nuevoDia;
	}

	public function getIncremento() {
		return $this-> incremento;
	}

	public function setIncremento($nuevoIncremento) {
		$this->incremento = $nuevoIncremento;
	}

    public function esBiciesto(){
   return $this->getAnio() % 4 == 0 && ($this->getAnio() % 100 !=0 || $this->getAnio() % 400 == 0 );


    }


    public function definirMes(){
                 $meses = ["enero","febrero","marzo","abril","mayo","junio","julio","agosto","septiembre","octubre","noviembre","diciembre"];
                 if ($this->getMes() >= 1 && $this->getMes() < 13){
                     return  $meses[$this->getMes() - 1];
                 } else{ 
                     return false;
                 }
            }


            public function diaMeses(){

                $diaMeses = [31,28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31];
                         if ($this->esBiciesto()){
                             $diaMeses[1] = 29;
                         }
                         if($this->getMes() > 0 && $this->getMes()<13) {
                             return $diaMeses[$this->getMes() - 1];
                         }

            }
            public function fechaValida(){
                         if($this->diaMeses() != false && $this->getDia() > 0 && $this->getDia() <= $this->diaMeses()){
                             return true;
                         } else {
                             return false;
                         }
                     }

                     public function incremental(){
                                 if ($this->fechaValida()){
                                     for ($i=0;$i<$this->getIncremento();$i++){
                                         $this->setDia($this->getDia()+1);
                                         if ($this->getDia() > $this->diaMeses()){
                                             $this->setDia(1);
                                            $this->setMes($this->getMes()+1);
                                             if ($this->getMes() > 12){
                                                 $this->setAnio($this->getAnio() + 1);
                        
                                         $this->setMes(1);
                                             }
                                         }
                                     }
                                     $this->definirMes();
                                     return "{$this->getDia()}/{$this->getMes()}/{$this->getAnio()} \n{$this->getDia()} de {$this->definirMes()} de {$this->getAnio()}";
                                 } else {
                                     return "fecha invalida";
                                 }
                          }
                          public function __toString(){
                                 return "{$this->incremental()}";
                                }
                                


}