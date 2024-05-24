<?php

class PartidoFutbol extends Partido{
  
  private $categoriaEdad;

  public function __construct($idpartido, $fecha,$objEquipo1,$cantGolesE1,$objEquipo2,$cantGolesE2, $categoriaEdad){
    parent::__construct($idpartido, $fecha,$objEquipo1,$cantGolesE1,$objEquipo2,$cantGolesE2);
    $this-> categoriaEdad = $categoriaEdad;
  }

  public function getCategoriaEdad() {
  	return $this->categoriaEdad;
  }
  
  public function setCategoriaEdad($categoriaEdad) {
  	$this->categoriaEdad = $categoriaEdad;
  }

  public function coeficientePartido(){
    $valorCoef = parent::coeficientePartido();
    
    if($categoria == "Menores"){
      $valorCoef = 0.13 * ($valorCoef/0.5);
    }elseif($categoria == "Juveniles"){
      $valorCoef = 0.19 * ($valorCoef/0.5);
    }elseif($categoria == "Mayores"){
      $valorCoef = 0.27 * ($valorCoef/0.5);
    }

    return $valorCoef;
  }


}

?>