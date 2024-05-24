<?php

class PartidoBasquetbol extends Partido{

  private $cantInfracciones;

  public function __construct($idpartido, $fecha,$objEquipo1,$cantGolesE1,$objEquipo2,$cantGolesE2 ,$cantInfracciones){
    parent::__construct($idpartido, $fecha,$objEquipo1,$cantGolesE1,$objEquipo2,$cantGolesE2);
    $this-> cantInfracciones = $cantInfracciones;
  }

  public function getCantInfraciones(){
    return $this->getCantInfraciones;
  }
  
  public function setCantInfracciones($cantInfracciones) {
    $this->cantInfracciones = $cantInfracciones;
  }

  public function coeficientePartido(){
    $valorCoef = parent::coeficientePartido();

    $valorCoef = 0.5 - (0.75 * this->getCantInfracciones());

    return $valorCoef;
  }


}

?>