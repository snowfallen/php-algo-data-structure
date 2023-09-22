<?php

namespace PhpAlgoDataStructure\Patterns\AbstractFactory\Toyota;

use PhpAlgoDataStructure\Patterns\AbstractFactory\CarsFactoryInterface;
use PhpAlgoDataStructure\Patterns\AbstractFactory\CoupeInterface;
use PhpAlgoDataStructure\Patterns\AbstractFactory\SedanInterface;

class ToyotaFactory implements CarsFactoryInterface
{
    /**
     * @return SedanInterface
     */
    public function createSedan(): SedanInterface
    {
        return new ToyotaSedan();
    }

    /**
     * @return CoupeInterface
     */
    public function createCoupe(): CoupeInterface
    {
        return new ToyotaCoupe();
    }
}