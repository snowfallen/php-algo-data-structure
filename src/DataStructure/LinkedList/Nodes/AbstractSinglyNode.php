<?php

namespace PhpAlgoDataStructure\DataStructure\LinkedList\Nodes;

abstract class AbstractSinglyNode implements NodeInterface
{
    /**
     * @return ?AbstractSinglyNode
     */
    abstract public function getNextNode(): ?AbstractSinglyNode;

    /**
     * @param ?AbstractSinglyNode $nextNode
     * @return void
     */
    abstract public function setNextNode(?AbstractSinglyNode $nextNode): void;
}
