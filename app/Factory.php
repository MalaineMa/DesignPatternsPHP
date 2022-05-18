<?php
require_once("flowers.php");
require_once("Iris.php");
require_once("Rose.php");
require_once("SunFlower.php");

class Factory
{


 public function createFlower($type)
 {

  /* $flower = match ($type) {
            'Iris' => new Iris(),
            'Rose' => new Rose(),
            'SunFlower' => new SunFlower(),
            default => null
        };*/

  switch ($type) {
   case 'Iris':
    $flower =  new Iris();
    break;
   case 'Rose':
    $flower = new Rose();
    break;
   case 'SunFlower':
    $flower = new SunFlower();
    break;
   default:
    $flower = null;
  }

  return $flower;


  // $flower->afficher();
 }
}
