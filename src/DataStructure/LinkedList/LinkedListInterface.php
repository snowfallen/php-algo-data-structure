<?php

namespace PhpAlgoDataStructure\DataStructure\LinkedList;

use PhpAlgoDataStructure\DataStructure\LinkedList\Nodes\AbstractSinglyNode;

interface LinkedListInterface
{
    /**
     * @return ?AbstractSinglyNode
     */
    public function getFirstNode(): ?AbstractSinglyNode;

    /**
     * @return ?AbstractSinglyNode
     */
    public function getLastNode(): ?AbstractSinglyNode;

    /**
     * @return void
     */
    public function displayElements(): void;

    /**
     * @return int
     */
    public function getSize(): int;
}