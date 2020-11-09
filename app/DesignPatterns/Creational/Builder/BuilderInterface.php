<?php


namespace App\DesignPatterns\Creational\Builder;


/**
 * 建造者接口
 * Interface BuilderInterface
 * @package App\DesignPatterns\Creational\Builder
 */
interface BuilderInterface
{

    /**
     * 创建车辆
     * @return mixed
     */
    public function createVehicle();


    /**
     * 轮子
     * @return mixed
     */
    public function addWheel();


    /**
     * 发动机
     * @return mixed
     */
    public function addEngine();


    /**
     * 车门
     * @return mixed
     */
    public function addDoors();


    /**
     * 获取车辆
     * @return mixed
     */
    public function getVehicle();
}