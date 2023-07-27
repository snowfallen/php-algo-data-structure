<?php

namespace PhpAlgoDataStructure\DataStructure\LinkedList\Doubly;

use PhpAlgoDataStructure\DataStructure\LinkedList\LinkedList;

class DoublyLinkedList extends LinkedList implements DoublyLinkedListInsertionInterface, DoublyLinkedListDeletionInterface
{
    public function __construct()
    {
        parent::__construct(new DoublyLinkedListInsertion($this->head, $this->tail, $this->size), new DoublyLinkedListDeletion($this->head, $this->tail, $this->size));
    }

    /**
     * @param string $value
     * @return void
     */
    public function removeNodeBeforeValue(string $value): void
    {
        // TODO: Implement removeNodeBeforeValue() method.
    }

    /**
     * @param string $value
     * @return void
     */
    public function insertNodeBeforeValue(string $value): void
    {
        // TODO: Implement insertNodeBeforeValue() method.
    }
}
