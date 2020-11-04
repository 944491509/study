<?php


namespace App\DesignPatterns\Creational\AbstractFactory\Html;

use App\DesignPatterns\Creational\AbstractFactory\Text as BaseText;

/**
 * Class Text
 * @package DesignPatterns\Creational\AbstractFactory\Html
 */
class Text extends BaseText
{
    /**
     * @return mixed|string
     */
    public function render()
    {
        return '<div>' . htmlspecialchars($this->text) . '</div>';
    }

}