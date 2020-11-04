<?php


namespace App\DesignPatterns\Creational\AbstractFactory;


/**
 * mediaInterface接口
 * Interface MediaInterface
 * @package DesignPatterns\Creational\AbstractFactory
 */
interface MediaInterface
{

    /**
     * json 或 html (取决于具体类) 输出未经过处理的渲染
     * @return mixed
     */
    public function render();
}