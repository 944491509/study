<?php


namespace App\DesignPatterns\Creational\AbstractFactory\Json;

use App\DesignPatterns\Creational\AbstractFactory\Picture as BasePicture;

/**
 * Class Picture
 * @package DesignPatterns\Creational\AbstractFactory\Json
 */
class Picture extends BasePicture
{

    /**
     * json格式输出
     * @return false|mixed|string
     */
    public function render()
    {
        $data = ['path'=>$this->path,'name'=>$this->name];
        return json_encode($data);
    }

}