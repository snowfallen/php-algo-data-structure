<?php

namespace PhpAlgoDataStructure\Patterns\AbstractFactory;

interface CarsFactoryInterface
{
    /**
     * @return SedanInterface
     */
    public function createSedan(): SedanInterface;

    /**
     * @return CoupeInterface
     */
    public function createCoupe(): CoupeInterface;
}