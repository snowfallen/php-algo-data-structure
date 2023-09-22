<?php

namespace PhpAlgoDataStructure\Patterns\AbstractFactory\Toyota;

use PhpAlgoDataStructure\Patterns\AbstractFactory\CoupeInterface;

class ToyotaCoupe implements CoupeInterface
{
    /**
     * @return string
     */
    public function getCoupeName(): string
    {
        return 'Toyota Coupe';
    }
}