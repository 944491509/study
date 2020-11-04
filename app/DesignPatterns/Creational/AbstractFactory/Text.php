<?php


namespace App\DesignPatterns\Creational\AbstractFactory;


abstract class Text implements MediaInterface
{
    /**
     * @var string
     */
    protected $text;


    /**
     * Text constructor.
     * @param $text
     */
    public function __construct($text)
    {
        $this->text = (string)$text;
    }

}