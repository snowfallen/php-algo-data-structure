<?php

namespace PhpAlgoDataStructure\Patterns\AbstractFactory\Audi;

use PhpAlgoDataStructure\Patterns\AbstractFactory\CarsFactoryInterface;
use PhpAlgoDataStructure\Patterns\AbstractFactory\CoupeInterface;
use PhpAlgoDataStructure\Patterns\AbstractFactory\SedanInterface;

class AudiFactory implements CarsFactoryInterface
{
    /**
     * @return SedanInterface
     */
    public function createSedan(): SedanInterface
    {
        return new AudiSedan();
    }

    /**
     * @return CoupeInterface
     */
    public function createCoupe(): CoupeInterface
    {
        return new AudiCoupe();
    }
}