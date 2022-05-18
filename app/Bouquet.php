<?php

use phpDocumentor\Reflection\DocBlock\Tags\Throws;

require_once("Facade.php");
require_once("flowers.php");

class Bouquet
{

   private $facade;
   private $flowerslist;

   public function __construct()
   {
      $this->facade = new Facade();
      $this->flowerslist = array();
   }

   function ajouterFlower($type)
   {
      $this->flowerslist[] = $this->facade->createFlowerFacade($type);
   }

   function remplir($nbRose, $nbIris, $nbSunF)
   {


      if ($nbRose < 0 || $nbIris < 0 || $nbSunF < 0) {
         throw new Exception();
      }
      for ($i = 0; $i < $nbIris; $i++) {
         $this->ajouterFlower("Iris");
      }
      for ($i = 0; $i < $nbRose; $i++) {
         $this->ajouterFlower("Rose");
      }

      for ($i = 0; $i < $nbSunF; $i++) {
         $this->ajouterFlower("SunFlower");
      }

      return " le bouquet est remplit de "  . $nbRose . " Rose " . " et " . $nbIris . " Iris " . " et " . $nbSunF . " SunFlower ";
   }

   /* function afficheBouquet()
   {
      $rose = $iris = 0;
      foreach ($this->flowerslist as $flower) {
         if ($flower != null) {
            if (get_class($flower) == "Rose") $rose++;
            if (get_class($flower) == "Iris") $iris++;
         }
      }
      echo "<h1>Vous avez un bouquet de " . $rose . "Roses et " . $iris . "Iris</h1>";
   }*/
}
