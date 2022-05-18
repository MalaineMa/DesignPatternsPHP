<?php



use function PHPUnit\Framework\assertEquals;

require_once 'app/Rose.php';
require_once 'app/Facade.php';
require_once 'app/Bouquet.php';
require_once 'app/Factory.php';
require_once 'app/Flowers.php';



class FlowerTest extends \PHPUnit\Framework\TestCase
{

    private $rose;
    private $facade;
    private $flower;
    private $factory;

    private $iris;
    private $bouquet;
    private $flower2;


    protected function setUp(): void
    {


        $this->rose = new Rose();
        $this->facade = new Facade();
        $this->flower = $this->facade->createFlowerFacade("Rose");


        $this->iris = new Iris();
        $this->facade = new Facade();
        $this->flower2 = $this->facade->createFlowerFacade("Iris");

        $this->bouquet = new Bouquet();
        $this->factory = new Factory();
    }


    public function test_CreateFlower()
    {

        $this->assertEquals($this->rose, $this->flower);

        $this->assertInstanceOf(
            Iris::class,
            $this->flower2

        );
    }


    /** @test */
    public function test_function2()
    {
        $this->expectException(Exception::class);
        $this->bouquet->remplir(-2, -8, -7);
    }

    /** @test */
    public function test_null()
    {
        $this->assertNull($this->factory->createFlower("blue"));
    }
}
