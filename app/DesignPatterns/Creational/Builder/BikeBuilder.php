<?php


namespace App\DesignPatterns\Creational\Builder;

/**
 * 用于建造自行车
 * Class BikeBuilder
 * @package App\DesignPatterns\Creational\Builder
 */
class BikeBuilder implements BuilderInterface
{

    /**
     * @var Parts\Bike
     */
    protected $bike;

    /**
     * {@inheritDoc}
     */
    public function createVehicle()
    {
        $this->bike = new Parts\Bike();
    }


    /**
     * {@inheritDoc}
     */
    public function addWheel()
    {
        $this->bike->setPart('forwardWheel', new Parts\Wheel());
        $this->bike->setPart('rearWheel', new Parts\Wheel());
    }

    /**
     * {@inheritDoc}
     */
    public function addEngine()
    {
        $this->bike->setPart('engine',new Parts\Engine());
    }


    public function addDoors()
    {
        // TODO: Implement addDoors() method.
    }


    /**
     * {@inheritDoc}
     */
    public function getVehicle()
    {
        return $this->bike;
    }

}