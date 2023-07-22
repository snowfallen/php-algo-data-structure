<?php

namespace PhpAlgoDataStructure\DataStructure\LinkedList\Nodes;

interface NodeInterface
{
    /**
     * @return string
     */
    public function getValue(): string;

    /**
     * @param string $newValue
     * @return void
     */
    public function setValue(string $newValue): void;
}
