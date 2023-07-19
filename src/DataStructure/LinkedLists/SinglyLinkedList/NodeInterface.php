<?php

namespace PhpAlgoDataStructure\DataStructure\LinkedLists\SinglyLinkedList;

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

    /**
     * @return NodeInterface|null
     */
    public function getNextNode(): NodeInterface|null;

    /**
     * @param NodeInterface $nextNode
     * @return void
     */
    public function setNextNode(NodeInterface $nextNode): void;
}