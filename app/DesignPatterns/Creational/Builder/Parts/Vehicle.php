<?php


namespace App\DesignPatterns\Creational\Builder\Parts;


/**
 * 车辆接口
 * Class Vehicle
 * @package App\DesignPatterns\Creational\Builder\Parts
 */
abstract class Vehicle
{
    /**
     * @var array
     */
    protected $data;

    /**
     * @param string $key
     * @param mixed $value
     */
    public function setPart($key, $value) {
        $this->data[$key] = $value;
    }
}