<?php


namespace App\DesignPatterns\Creational\FactoryMethod;

/**
 * 车辆内饰接口
 * Interface VehicleInterface
 * @package App\DesignPatterns\Creational\FactoryMethod
 */
interface VehicleInterface
{

    public function setColor($rgb);
}