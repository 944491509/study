<?php


namespace App\DesignPatterns\Creational\AbstractFactory\Tests;


use App\DesignPatterns\Creational\AbstractFactory\AbstractFactory;
use App\DesignPatterns\Creational\AbstractFactory\HtmlFactory;
use App\DesignPatterns\Creational\AbstractFactory\JsonFactory;

class AbstractFactoryTest extends \PHPUnit\Framework\TestCase
{
    public function getFactories() {
        return [
            [new JsonFactory()],
            [new HtmlFactory()]
        ];
    }

    public function testComponentCreation(AbstractFactory $factory) {
        $article = [
            $factory->createText('laravel学院')
        ];
        $this->assertContainsOnly('DesignPatterns\Creational\AbstractFactory\MediaInterface', $article);
    }
}