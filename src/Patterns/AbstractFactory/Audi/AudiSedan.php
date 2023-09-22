<?php

namespace PhpAlgoDataStructure\Patterns\AbstractFactory\Audi;

use PhpAlgoDataStructure\Patterns\AbstractFactory\SedanInterface;

class AudiSedan implements SedanInterface
{
    /**
     * @return string
     */
    public function getSedanName(): string
    {
        return 'Audi Sedan';
    }
}