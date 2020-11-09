<?php


namespace App\DesignPatterns\Creational\FactoryMethod;

/**
 * 保时捷
 * Class Porsche
 * @package App\DesignPatterns\Creational\FactoryMethod
 */
class Porsche implements VehicleInterface
{
    protected $color;

    public function setColor($rgb)
    {
        $this->color = $rgb;
    }


    /**
     * 尽管只有奔驰汽车挂有AMG品牌，这里我们提供一个空方法仅作代码示例
     */
    public function addTuningAMG() {

    }

}