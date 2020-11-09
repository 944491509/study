<?php


namespace App\DesignPatterns\Creational\FactoryMethod;


/**
 * 德国汽车造车厂
 * Class GermanFactory
 * @package App\DesignPatterns\Creational\FactoryMethod
 */
class GermanFactory extends FactoryMethod
{
    protected function createVehicle($type)
    {
        switch ($type) {
            case Parent::CHEAP:
                return new Bicycle();
                break;
            case Parent::FAST:
                $obj = new Porsche();
                $obj->addTuningAMG();
                return $obj;
                break;
            default:
                throw new \InvalidArgumentException("$type is not a valid vehicle");
        }
    }


}