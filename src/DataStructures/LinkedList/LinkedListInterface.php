<?php

namespace PhpAlgoDataStructure\DataStructure\LinkedList;

use PhpAlgoDataStructure\DataStructure\LinkedList\Nodes\NodeInterface;

interface LinkedListInterface
{
    /**
     * @return ?NodeInterface
     */
    public function getFirstNode(): ?NodeInterface;

    /**
     * @return ?NodeInterface
     */
    public function getLastNode(): ?NodeInterface;

    /**
     * @return void
     */
    public function displayElements(): void;

    /**
     * @return int
     */
    public function getSize(): int;

    /**
     * @return bool
     */
    public function isEmpty(): bool;
}
