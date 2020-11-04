<?php


namespace App\DesignPatterns\Creational\AbstractFactory\Json;

use App\DesignPatterns\Creational\AbstractFactory\Text as BaseText;

/**
 * Class Text
 * @package DesignPatterns\Creational\AbstractFactory\Json
 */
class Text extends  BaseText
{

    /**
     * json输出
     * @return false|mixed|string
     */
    public function render()
    {
        $data = ['text'=>$this->text];
        return json_encode($data);
    }

}