<?php

namespace PhpAlgoDataStructure\DataStructure\LinkedList\Nodes;

require_once 'NodeInterface.php';

abstract class AbstractSinglyNode implements NodeInterface
{
    /**
     * @return ?AbstractSinglyNode
     */
    public abstract function getNextNode(): ?AbstractSinglyNode;

    /**
     * @param ?AbstractSinglyNode $nextNode
     * @return void
     */
    public abstract function setNextNode(?AbstractSinglyNode $nextNode): void;
}