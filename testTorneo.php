<?php
include_once("Categoria.php");
include_once("Torneo.php");
include_once("Equipo.php");
include_once("Partido.php");
include_once("PartidoFutbol.php");
include_once("PartidoBasquetbol.php");

$catMayores = new Categoria(1,'Mayores');
$catJuveniles = new Categoria(2,'juveniles');
$catMenores = new Categoria(1,'Menores');

$objE1 = new Equipo("Equipo Uno", "Cap.Uno",1,$catMayores);
$objE2 = new Equipo("Equipo Dos", "Cap.Dos",2,$catMayores);

$objE3 = new Equipo("Equipo Tres", "Cap.Tres",3,$catJuveniles);
$objE4 = new Equipo("Equipo Cuatro", "Cap.Cuatro",4,$catJuveniles);

$objE5 = new Equipo("Equipo Cinco", "Cap.Cinco",5,$catMayores);
$objE6 = new Equipo("Equipo Seis", "Cap.Seis",6,$catMayores);

$objE7 = new Equipo("Equipo Siete", "Cap.Siete",7,$catJuveniles);
$objE8 = new Equipo("Equipo Ocho", "Cap.Ocho",8,$catJuveniles);

$objE9 = new Equipo("Equipo Nueve", "Cap.Nueve",9,$catMenores);
$objE10 = new Equipo("Equipo Diez", "Cap.Diez",9,$catMenores);

$objE11 = new Equipo("Equipo Once", "Cap.Once",11,$catMayores);
$objE12 = new Equipo("Equipo Doce", "Cap.Doce",11,$catMayores);

$objTorneo = new Torneo(100.000);

$objPartidoBasquetbol1 = new PartidoBasquetbol(11, "2024-05-05", $objE7, 80, $objE8, 120, 7);
$objPartidoBasquetbol2 = new PartidoBasquetbol(12, "2024-05-06", $objE9, 81, $objE10, 110, 8);
$objPartidoBasquetbol2 = new PartidoBasquetbol(13, "2024-05-06", $objE11, 115, $objE12, 85, 9);

$objPartidoFutbol1= new PartidoFutbol(14, "2024-05-07", $objE1, 3, $objE2, 2);
$objPartidoFutbol2= new PartidoFutbol(15, "2024-05-08", $objE3, 0, $objE4, 1);
$objPartidoFutbol3= new PartidoFutbol(16, "2024-05-09", $objE5, 2, $objE6, 3);

$objTorneo->ingresarPartido($objE5, $objE11, "2024-05-23", "Futbol");
$objTorneo->ingresarPartido($objE11, $objE11, "2024-05-23", "Basquetbol");
$objTorneo->ingresarPartido($objE9, $objE10, "2024-0525", "Basquetbol");
$objTorneo->darGanadores("Basquetbol");
$objTorneo->darGanadores("Futbol");


?>
