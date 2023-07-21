<?php

namespace PhpAlgoDataStructure\DataStructure\LinkedList\Singly;

use PhpAlgoDataStructure\DataStructure\LinkedList\LinkedListInterface;
use PhpAlgoDataStructure\DataStructure\LinkedList\Nodes\AbstractSinglyNode;

require_once 'LinkedListInsertion.php';
require_once 'LinkedListDeletion.php';
require_once '../LinkedListInterface.php';

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
    public function insertAfterNodeWithValue(string $nodeValue, string $value): void
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
    public function deleteAfterNodeWithValue(string $value): void
    {
        if (!$this->isEmpty()) {
            $this->deletion->deleteAfterNodeWithValue($value);
        }
    }

    /**
     * @return ?AbstractSinglyNode
     */
    public function getFirstNode(): ?AbstractSinglyNode
    {
        return $this->head;
    }

    /**
     * @return ?AbstractSinglyNode
     */
    public function getLastNode(): ?AbstractSinglyNode
    {
        return $this->tail;
    }

    /**
     * @return void
     */
    public function displayElements(): void
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
    public function getSize(): int
    {
        return $this->size;
    }

    /**
     * @return bool
     */
    public function isEmpty(): bool
    {
        return $this->getSize() === 0;
    }
}

$test = new LinkedList();
$test->prepend(1);
$test->prepend(0);
$test->prepend(0);
$test->removeFirst();
$test->append(2);
$test->append(2);
$test->removeLast();
$test->append(3);
$test->append(5);
$test->removeLast();
$test->append(4);
$test->insertAfterNodeWithValue(4, 6);
$test->insertAfterNodeWithValue(4, 5);
$test->deleteAfterNodeWithValue(4);
$test->deleteAfterNodeWithValue(4);
$test->deleteAfterNodeWithValue(4);
$test->displayElements();
var_dump($test->getLastNode());
var_dump($test->getFirstNode());
