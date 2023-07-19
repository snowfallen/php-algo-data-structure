<?php

namespace PhpAlgoDataStructure\DataStructure\LinkedLists\SinglyLinkedList;

class LinkedList implements LinkedListInterface
{
    private Node|null $head;
    private Node|null $tail;

    public function __construct()
    {
        $this->head = null;
        $this->tail = null;
    }

    public function insertAtTheBeginning(string $value): void
    {
        // TODO: Implement insertAtTheBeginning() method.
    }

    public function deleteAtTheBeginning(): void
    {
        // TODO: Implement deleteAtTheBeginning() method.
    }

    public function insertAtTheEnd(string $value): void
    {
        // TODO: Implement insertAtTheEnd() method.
    }

    public function deleteAtTheEnd(): void
    {
        // TODO: Implement deleteAtTheEnd() method.
    }

    public function insertAfter(): void
    {
        // TODO: Implement insertAfter() method.
    }

    public function deleteAfter(): void
    {
        // TODO: Implement deleteAfter() method.
    }

    public function deleteNodeByValue(string $value): void
    {
        // TODO: Implement deleteNodeByValue() method.
    }

    public function getFirstNode(): NodeInterface
    {
        // TODO: Implement getFirstNode() method.
    }

    public function getLastNode(): NodeInterface
    {
        // TODO: Implement getLastNode() method.
    }

    public function displayElements(): void
    {
        // TODO: Implement displayElements() method.
    }
}