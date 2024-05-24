<?php

class Torneo {

  private $colPartidos;
  private $importePremio;

  public function __construct($colPartidos, $importePremio){
    $this-> colPartidos = [];
    $this-> importePremio = $importePremio;
  }

  public function getColPartidos(){
    return $this->colPartidos;
  }

  public function getimportePremio(){
    return $this->importePremio;
  }

  public function setColPartidos(){
    $this-> colPartidos = $colPartidos;
  }

  public function setImportePremio($importePremio) {
  	$this->importePremio = $importePremio;
  }

  public function ingresarPartido($OBJEquipo1, $OBJEquipo2, $fecha, $tipoPartido){
    $categoriaE1 = $OBJEquipo1->getObjCategoria();
    $categoriaE2 = $OBJEquipo2->getObjCategoria();

    $cantJugadoresE1 = $OBJEquipo1->getCantJugadores();
    $cantJugadoresE2 = $OBJEquipo2->getCantJugadores();

    $objPartido = null;

    if(($categoriaE1->getIdCategoria() == $categoriaE2->getIdCategoria()) && $cantJugadoresE1 == $cantJugadoresE2){
      $colPartidosCopia = $this->getColPartidos();
      $i = count($colPartidosCopia)-1;
      $id = $colPartidosCopia[$i]->getIdPartidos()+1;
      $cantGolesE1 = 0;
      $cantGolesE2 = 0;
      if($tipoPartido == "futbol"){
        $objPartido = new PartidoFutbol($id, date("Y-m-d"), $OBJEquipo1, $cantGoles1, $OBJEquipo2, $cantGoles2, 0.5);
        $colPartidosCopia[] = $objPartido;
      }
      if($tipoPartido == "Basquetbol"){
        $infracciones = 0;
        $objPartido = new PartidoBasquetbol($id, date("Y-m-d"), $OBJEquipo1, $cantGoles1, $OBJEquipo2, $cantGoles2, 0.75, $infracciones);
        $colPartidosCopia[] = $objPartido;
      }
      $this->setColPartidos($colPartidosCopia);
    }
    return $objPartido;
  }

  public function darGanadores($deporte){
    $arregloPartidosCopia = $this->getColPartidos();
    $colPartidosGanadores = [];
    foreach($arregloPartidosCopia as $unPartido){
      if ($deporte == "Futbol") {
        if($arregloPartidosCopia instanceof PartidoFutbol){
          $colPartidosGanadores[] = $arregloPartidosCopia->darEquipoGanador();
        }
      }elseif($deporte == "Basquetbol"){
        if ($arregloPartidosCopia instanceof PartidoBasquetbol) {
          $colPartidosGanadores[] = $arregloPartidosCopia->darEquipoGanador();
        }
      }
      $colPartidosGanadores = $this->retornarCadena($colPartidosGanadores);
      return $colPartidosGanadores;
    }
  }

  public function calcularPremioGanador($objPartido){
    $equipoGanador = darGanadores();
  }

  public function retornarCadena($arreglo){
    $cadena = "";
    foreach($arreglo as $unElementoCol){
      $cadena = $cadena." ". $unElementoCol. "\n";
    }
    return $cadena;
  }

  public function __toString(){
    $cadena = "\n Coleccion de Partidos: ". $this->retornarCadena().
              "\nImporte premio: $" . $this->getimportePremio();
    return $cadena;
  }

}
?>