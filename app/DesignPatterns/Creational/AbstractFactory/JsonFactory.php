<?php


namespace App\DesignPatterns\Creational\AbstractFactory;


/**
 * 用于创建json组件的工程
 * Class JsonFactory
 * @package DesignPatterns\Creational\AbstractFactory
 */
class JsonFactory extends AbstractFactory
{

    /**
     * 创建文本组件
     * @param $content
     * @return Json\Text|mixed
     */
    public function createText($content)
    {
        return new Json\Text($content);
    }


    /**
     * 创建图片组件
     * @param $path
     * @param string $name
     * @return Json\Picture|mixed
     */
    public function createPicture($path, $name = '')
    {
        return new Json\Picture($path,$name);
    }


}