<?php

namespace PhpAlgoDataStructure\DataStructure\LinkedList\Singly;

use PhpAlgoDataStructure\DataStructure\LinkedList\LinkedListInterface;
use PhpAlgoDataStructure\DataStructure\LinkedList\Nodes\AbstractSinglyNode;

class LinkedList implements LinkedListInterface
{
    private LinkedListInsertion $insertion;
    private LinkedListDeletion $deletion;
    private ?AbstractSinglyNode $head;
    private ?AbstractSinglyNode $tail;
    private int $size;

    public function __construct()
    {
        $this->size = 0;
        $this->head = null;
        $this->tail = null;
        $this->insertion = new LinkedListInsertion($this->head, $this->tail, $this->size);
        $this->deletion = new LinkedListDeletion($this->head, $this->tail, $this->size);
    }

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
    final public function insertAfterNodeWithValue(string $nodeValue, string $value): void
    {
        if ($this->isEmpty()) {
            $this->prepend($value);
        } else {
            $this->insertion->insertAfterNodeWithValue($nodeValue, $value);
        }
    }

    /**
     * @param string $value
     * @return void
     */
    final public function deleteAfterNodeWithValue(string $value): void
    {
        if (!$this->isEmpty()) {
            $this->deletion->deleteAfterNodeWithValue($value);
        }
    }

    /**
     * @return ?AbstractSinglyNode
     */
    final public function getFirstNode(): ?AbstractSinglyNode
    {
        return $this->head;
    }

    /**
     * @return ?AbstractSinglyNode
     */
    final public function getLastNode(): ?AbstractSinglyNode
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
