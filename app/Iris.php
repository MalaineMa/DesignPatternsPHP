<?php

require_once("flowers.php");


class Iris extends Flower
{


 public function __construct()
 {
  $this->setName("Iris");
  $this->setCouleur("Vert");
 }
}
