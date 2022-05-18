<?php


class Flower
{

 private $name;
 private $couleur;

 public function setName($name)
 {
  $this->name = $name;
 }

 public function setCouleur($couleur)
 {
  $this->couleur = $couleur;
 }


 public function afficher()
 {
  echo "Le nom est : " . $this->name . " couleur :" . $this->couleur;
 }
}
