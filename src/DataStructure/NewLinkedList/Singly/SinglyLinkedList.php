<?php

namespace PhpAlgoDataStructure\DataStructure\NewLinkedList\Singly;

use PhpAlgoDataStructure\DataStructure\NewLinkedList\LinkedListDeletionInterface;
use PhpAlgoDataStructure\DataStructure\NewLinkedList\LinkedListInsertionInterface;
use PhpAlgoDataStructure\DataStructure\NewLinkedList\LinkedList;

final class SinglyLinkedList extends LinkedList implements LinkedListInsertionInterface, LinkedListDeletionInterface
{
    private LinkedListInsertion $insertion;
    private LinkedListDeletion $deletion;

    public function __construct()
    {
        parent::__construct();
        $this->insertion = new LinkedListInsertion($this->head, $this->tail, $this->size);
        $this->deletion = new LinkedListDeletion($this->head, $this->tail, $this->size);
    }

    /**
     * @param string $value
     * @return void
     */
    public function prepend(string $value): void
    {
        $this->insertion->prepend($value);
    }

    /**
     * @return void
     */
    public function removeFirst(): void
    {
        if (!$this->isEmpty()) {
            $this->deletion->removeFirst();
        }
    }

    /**
     * @param string $value
     * @return void
     */
    public function append(string $value): void
    {
        $this->insertion->append($value);
    }

    /**
     * @return void
     */
    public function removeLast(): void
    {
        if (!$this->isEmpty()) {
            $this->deletion->removeLast();
        }
    }

    /**
     * @param string $nodeValue
     * @param string $value
     * @return void
     */
    public function insertNodeAfterValue(string $nodeValue, string $value): void
    {
        if (!$this->isEmpty()) {
            $this->insertion->insertNodeAfterValue($nodeValue, $value);
        }
    }

    /**
     * @param string $value
     * @return void
     */
    public function removeNodeAfterValue(string $value): void
    {
        if (!$this->isEmpty()) {
            $this->deletion->removeNodeAfterValue($value);
        }
    }
}
