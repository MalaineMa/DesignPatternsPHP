<?php


require_once("Factory.php");



class Facade
{
    private $factory;

    public function __construct()
    {
        $this->factory = new Factory();
    }
    public function createFlowerFacade($type)
    {
        return  $this->factory->createFlower($type);
    }
}
