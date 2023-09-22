<?php

namespace PhpAlgoDataStructure\Patterns\AbstractFactory\Audi;

use PhpAlgoDataStructure\Patterns\AbstractFactory\CoupeInterface;

class AudiCoupe implements CoupeInterface
{
    /**
     * @return string
     */
    public function getCoupeName(): string
    {
        return 'Audi Coupe';
    }
}