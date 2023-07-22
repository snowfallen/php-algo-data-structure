<?php

namespace PhpAlgoDataStructure\DataStructure\NewLinkedList;

use PhpAlgoDataStructure\DataStructure\NewLinkedList\Nodes\NodeInterface;

class LinkedList implements LinkedListInterface
{
    protected ?NodeInterface $head;
    protected ?NodeInterface $tail;
    protected int $size;

    public function __construct()
    {
        $this->size = 0;
        $this->head = null;
        $this->tail = null;
    }

    /**
     * @return ?NodeInterface
     */
    final public function getFirstNode(): ?NodeInterface
    {
        return $this->head;
    }

    /**
     * @return ?NodeInterface
     */
    final public function getLastNode(): ?NodeInterface
    {
        return $this->tail;
    }

    /**
     * @return void
     */
    final public function displayElements(): void
    {
        if (!$this->isEmpty()) {
            $currentNode = $this->head;
            while ($currentNode) {
                echo $currentNode->getValue() . "\n";
                $currentNode = $currentNode->getNextNode();
            }
        }
    }

    /**
     * @return int
     */
    final public function getSize(): int
    {
        return $this->size;
    }

    /**
     * @return bool
     */
    final public function isEmpty(): bool
    {
        return $this->getSize() === 0;
    }
}
