<?php


namespace App\DesignPatterns\Creational\FactoryMethod;


/**
 * 自行车
 * Class Bicycle
 * @package App\DesignPatterns\Creational\FactoryMethod
 */
class Bicycle implements VehicleInterface
{

    /**
     * @var string
     */
    protected $color;


    /**
     * 设置自行车的颜色
     * @param $rgb
     */
    public function setColor($rgb)
    {
        $this->color = $rgb;
    }


}