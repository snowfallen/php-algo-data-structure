<?php

namespace PhpAlgoDataStructure\DataStructure\LinkedList\Doubly;

use PhpAlgoDataStructure\DataStructure\LinkedList\LinkedListInsertionInterface;
use PhpAlgoDataStructure\DataStructure\LinkedList\Nodes\DoublyNode;
use PhpAlgoDataStructure\DataStructure\LinkedList\Nodes\DoublyNodeInterface;

class DoublyLinkedListInsertion implements LinkedListInsertionInterface, DoublyLinkedListInsertionInterface
{
    /**
     * @param ?DoublyNodeInterface $head
     * @param ?DoublyNodeInterface $tail
     * @param int $size
     */
    public function __construct(
        private ?DoublyNodeInterface &$head,
        private ?DoublyNodeInterface &$tail,
        private int            &$size
    ){}

    /**
     * @param string $value
     * @return void
     */
    final public function prepend(string $value): void
    {
        $newNode = new DoublyNode($value);
        $this->head->setNextNode($newNode);

        if ($this->head) {
            $newNode->setNextNode($this->head);
            $this->head->setPreviousNode($newNode);
        } else {
            $this->tail = $newNode;
        }

        $this->head = $newNode;
        $this->size++;
    }

    /**
     * @param string $value
     * @return void
     */
    final public function append(string $value): void
    {
        // TODO: Implement append() method.
    }

    /**
     * @param string $nodeValue
     * @param string $value
     * @return void
     */
    final public function insertNodeAfterValue(string $nodeValue, string $value): void
    {
        // TODO: Implement insertNodeAfterValue() method.
    }

    /**
     * @param string $value
     * @return void
     */
    final public function insertNodeBeforeValue(string $value): void
    {
        // TODO: Implement insertNodeBeforeValue() method.
    }
}
