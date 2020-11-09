<?php


namespace App\DesignPatterns\Creational\Builder;


/**
 * 导演
 * Director 是建造者模型的一部分,它知道建造者接口并通过建造者构建复杂对象
 * Class Director
 * @package App\DesignPatterns\Creational\Builder
 * 可通过依赖注入建造者的方式构建任何复杂对象
 */
class Director
{

    /**
     * "导演" 并不知道具体实现细节
     * @param BuilderInterface $builder
     * @return mixed
     */
    public function build(BuilderInterface $builder) {
        $builder->createVehicle();
        $builder->addDoors();
        $builder->addEngine();
        $builder->addWheel();

        return $builder->getVehicle();
    }
}