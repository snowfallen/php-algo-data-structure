<?php

namespace PhpAlgoDataStructure\DataStructure\LinkedList;

use PhpAlgoDataStructure\DataStructure\LinkedList\Nodes\NodeInterface;
use PhpAlgoDataStructure\DataStructure\LinkedList\Singly\SinglyLinkedListDeletion;
use PhpAlgoDataStructure\DataStructure\LinkedList\Doubly\DoublyLinkedListDeletion;
use PhpAlgoDataStructure\DataStructure\LinkedList\Singly\SinglyLinkedListInsertion;
use PhpAlgoDataStructure\DataStructure\LinkedList\Doubly\DoublyLinkedListInsertion;


class LinkedList implements LinkedListInterface, LinkedListInsertionInterface, LinkedListDeletionInterface
{
    protected ?NodeInterface $head = null;
    protected ?NodeInterface $tail = null;
    protected int $size = 0;

    public function __construct(
        private SinglyLinkedListInsertion|DoublyLinkedListInsertion $insertion,
        private SinglyLinkedListDeletion|DoublyLinkedListDeletion $deletion
    ){}

    /**
     * @param string $value
     * @return void
     */
    final public function prepend(string $value): void
    {
        $this->insertion->prepend($value);
    }

    /**
     * @return void
     */
    final public function removeFirst(): void
    {
        if (!$this->isEmpty()) {
            $this->deletion->removeFirst();
        }
    }

    /**
     * @param string $value
     * @return void
     */
    final public function append(string $value): void
    {
        $this->insertion->append($value);
    }

    /**
     * @return void
     */
    final public function removeLast(): void
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
    final public function insertNodeAfterValue(string $nodeValue, string $value): void
    {
        if (!$this->isEmpty()) {
            $this->insertion->insertNodeAfterValue($nodeValue, $value);
        }
    }

    /**
     * @param string $value
     * @return void
     */
    final public function removeNodeAfterValue(string $value): void
    {
        if (!$this->isEmpty()) {
            $this->deletion->removeNodeAfterValue($value);
        }
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
