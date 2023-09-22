<?php

namespace PhpAlgoDataStructure\Patterns\AbstractFactory;

use PhpAlgoDataStructure\Patterns\AbstractFactory\Audi\AudiFactory;
use PhpAlgoDataStructure\Patterns\AbstractFactory\Toyota\ToyotaFactory;

class CarsShop
{
    /**
     * @param CarsFactoryInterface $carsFactory
     * @return SedanInterface
     */
    public function getSedan(CarsFactoryInterface $carsFactory): SedanInterface
    {
        return $carsFactory->createSedan();
    }

    /**
     * @param CarsFactoryInterface $carsFactory
     * @return CoupeInterface
     */
    public function getCoupe(CarsFactoryInterface $carsFactory): CoupeInterface
    {
        return $carsFactory->createCoupe();
    }
}
