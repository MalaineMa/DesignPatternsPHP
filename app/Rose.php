<?php

require_once("flowers.php");


class Rose extends Flower{


public function __construct()
{
    $this->setName("Rose");
    $this->setCouleur("Rouge");
}


}
