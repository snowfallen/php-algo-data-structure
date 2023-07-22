<?php

namespace PhpAlgoDataStructure\DataStructure\NewLinkedList\Nodes;

interface DoublyNodeInterface
{
    /**
     * @return ?NodeInterface
     */
    public function getPreviousNode(): ?NodeInterface;

    /**
     * @param ?NodeInterface $newPreviousNode
     * @return void
     */
    public function setPreviousNode(?NodeInterface $newPreviousNode): void;
}
