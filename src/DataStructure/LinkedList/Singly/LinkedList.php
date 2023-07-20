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
        $this->insertion = new LinkedListInsertion();
        $this->deletion = new LinkedListDeletion();
    }

    /**
     * @param string $value
     * @return void
     */
    public function insertAtTheBeginning(string $value): void
    {
        $this->insertion->insertAtTheBeginning($this->head, $this->tail, $value, $this->size);
    }

    /**
     * @return void
     */
    public function deleteAtTheBeginning(): void
    {
        $this->deletion->deleteAtTheBeginning($this->head, $this->size);
    }

    /**
     * @param string $value
     * @return void
     */
    public function insertAtTheEnd(string $value): void
    {
        $this->insertion->insertAtTheEnd($this->head, $this->tail, $value, $this->size);
    }

    /**
     * @return void
     */
    public function deleteAtTheEnd(): void
    {
        if (!$this->isEmpty()) {
            $this->deletion->deleteAtTheEnd($this->head, $this->tail, $this->size);
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
            $this->insertAtTheBeginning($value);
        } else {
            $this->insertion->insertAfterNodeWithValue($this->head, $this->tail, $nodeValue, $value, $this->size);
        }
    }

    /**
     * @param string $value
     * @return void
     */
    public function deleteAfterNodeWithValue(string $value): void
    {
        if (!$this->isEmpty()) {
            $this->deletion->deleteAfterNodeWithValue($this->head, $this->tail, $this->size, $value);
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
$test->insertAtTheBeginning(1);
$test->insertAtTheBeginning(0);
$test->insertAtTheBeginning(0);
$test->deleteAtTheBeginning();
$test->insertAtTheEnd(2);
$test->insertAtTheEnd(2);
$test->deleteAtTheEnd();
$test->insertAtTheEnd(3);
$test->insertAtTheEnd(5);
$test->deleteAtTheEnd();
$test->insertAtTheEnd(4);
$test->insertAfterNodeWithValue(4, 6);
$test->insertAfterNodeWithValue(4, 5);
$test->deleteAfterNodeWithValue(4);
$test->deleteAfterNodeWithValue(4);
$test->deleteAfterNodeWithValue(4);
$test->displayElements();
var_dump($test->getLastNode());
var_dump($test->getFirstNode());
