<?php


namespace App\DesignPatterns\Creational\AbstractFactory\Html;

use App\DesignPatterns\Creational\AbstractFactory\Picture as BasePicture;

/**
 * Class Picture
 * @package DesignPatterns\Creational\AbstractFactory\Html
 */
class Picture extends BasePicture
{

    /**
     * @return mixed|string
     */
    public function render()
    {
        return sprintf('<img src="%s" title="%s"/>', $this->path, $this->name);
    }


}