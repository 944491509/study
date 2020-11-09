<?php


namespace App\DesignPatterns\Creational\FactoryMethod;

/**
 * 工厂方法抽象类
 * Class FactoryMethod
 * @package App\DesignPatterns\Creational\FactoryMethod
 */
abstract class FactoryMethod
{
    const CHEAP = 1;
    const FAST = 2;


    /**
     * 子类必须实现的方法
     * @param string $type
     * @return VehicleInterface
     */
    abstract protected function createVehicle($type);


    /**
     * 创建新的车辆
     * @param $type
     * @return VehicleInterface
     */
    public function create($type)
    {
        $obj = $this->createVehicle($type);
        $obj->setColor("#f00");
        return $obj;
    }
}