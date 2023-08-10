<?php

namespace PhpAlgoDataStructure\DataStructure\LinkedList\Nodes;

interface SinglyNodeInterface
{
    /**
     * @return ?NodeInterface
     */
    public function getNextNode(): ?NodeInterface;

    /**
     * @param ?NodeInterface $nextNode
     * @return void
     */
    public function setNextNode(?NodeInterface $nextNode): void;
}
