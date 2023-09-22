<?php

namespace PhpAlgoDataStructure\Patterns\AbstractFactory\Toyota;

use PhpAlgoDataStructure\Patterns\AbstractFactory\SedanInterface;

class ToyotaSedan implements SedanInterface
{
    /**
     * @return string
     */
    public function getSedanName(): string
    {
        return 'Toyota Sedan';
    }
}