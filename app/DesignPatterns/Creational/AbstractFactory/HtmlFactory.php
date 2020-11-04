<?php


namespace App\DesignPatterns\Creational\AbstractFactory;


/**
 * 创建HTML组件的工厂
 * Class HtmlFactory
 * @package DesignPatterns\Creational\AbstractFactory
 */
class HtmlFactory extends AbstractFactory
{

    /**
     * 创建文本组件
     * @param $content
     * @return Html\Text|mixed
     */
    public function createText($content)
    {
        return new Html\Text($content);
    }


    /**
     * @param $path
     * @param string $name
     * @return mixed|void
     */
    public function createPicture($path, $name = '')
    {
        return new Html\Picture($path, $name);
    }


}