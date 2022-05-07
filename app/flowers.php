<?php

namespace app;

interface Flowers
{
 public function createFlower();
}

class Position
{
}
class Rose implements Flowers
{

 private $position;
 public function __construct($pos)
 {
  $this->position = $pos;
 }

 public function createFlower()
 {
  return "Create a rose\n\r";
 }
}

class Iris implements Flowers
{

 private $position;
 public function __construct($pos)
 {
  $this->position = $pos;
 }

 public function createFlower()
 {
  return "Create a iris\n\r";
 }
}



class FlowerFacade
{

 private Flowers $rose;
 private Flowers $iris;

 public function __construct()
 {
  $this->rose = new Rose("it's rose");
  $this->iris = new Iris("it's iris");
 }


 function drawRose()
 {

  return  $this->rose->createFlower();
 }

 function drawIris()
 {

  return  $this->iris->createFlower();
 }
}

class FlowerFactory
{
 public function create($type)
 {
  if ($type == "Rose") {
   return new Rose(new Position());
  } else if ($type == "Iris") {
   return new Iris(new Position());
  }

  return null;
 }
}

/*
 Factory Test

*/
/*$factory = new FlowerFactory();
$rose = $factory->create("Rose");
echo $rose->createFlower();


/*
 Facade Test

*/

/*
$facade = new FlowerFacade();
$iris = $facade->drawIris();
echo $iris;
*/