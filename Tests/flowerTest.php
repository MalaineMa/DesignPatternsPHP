<?php

namespace app\Tests;

//require '../vendor/autoload.php';
//require '../app/flowers.php';

use app\FlowerFactory;

use PHPUnit\Framework\TestCase;


class FlowerTest extends TestCase
{

 public function TestCreateFlower()
 {

  $factory = new FlowerFactory();
  $RoseFlower = $factory->create('Rose');
  $this->assertInstanceOf(Rose::class, $RoseFlower);
 }
}
