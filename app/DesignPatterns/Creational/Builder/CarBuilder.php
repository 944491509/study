<?php


namespace App\DesignPatterns\Creational\Builder;

/**
 * 用于建造汽车
 * Class CarBuilder
 * @package App\DesignPatterns\Creational\Builder
 */
class CarBuilder implements BuilderInterface
{
    /**
     * @var Parts\Car
     */
    protected $car;

    public function createVehicle()
    {
        $this->car = new Parts\Car();
    }


    /**
     * 车轮
     * @return mixed|void
     */
    public function addWheel()
    {
        $this->car->setPart('wheelLF', new Parts\Wheel());
        $this->car->setPart('wheelRF', new Parts\Wheel());
        $this->car->setPart('wheelLR', new Parts\Wheel());
        $this->car->setPart('wheelRR', new Parts\Wheel());
    }

    /**
     * 发动机
     * @return mixed|void
     */
    public function addEngine()
    {
        $this->car->setPart('engine',new Parts\Engine());
    }

    /**
     * 门
     * @return mixed|void
     */
    public function addDoors()
    {
        $this->car->setPart('rightDoor',new Parts\Door());
        $this->car->setPart('leftDoor',new Parts\Door());
    }

    /**
     * @return Parts\Car|mixed
     */
    public function getVehicle()
    {
        return $this->car;
    }


}