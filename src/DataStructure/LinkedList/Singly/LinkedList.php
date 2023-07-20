<?php

namespace PhpAlgoDataStructure\DataStructure\LinkedList\Singly;

use PhpAlgoDataStructure\DataStructure\LinkedList\Nodes\AbstractSinglyNode;

require_once 'AbstractLinkedList.php';
require_once 'Node.php';

class LinkedList extends AbstractLinkedList
{
    private int $size;
    private ?Node $head;
    private ?Node $tail;

    public function __construct()
    {
        $this->size = 0;
        $this->head = null;
        $this->tail = null;
    }

    /**
     * @param string $value
     * @return void
     */
    public function insertAtTheBeginning(string $value): void
    {
        $newNode = new Node($value);
        if ($this->head) {
            $newNode->setNextNode($this->head);
        }
        if (!$this->tail) {
            $this->tail = $newNode;
        }
        $this->head = $newNode;
        $this->size++;
    }

    /**
     * @return void
     */
    public function deleteAtTheBeginning(): void
    {
        if ($this->head) {
            $this->head = $this->head->getNextNode();
            $this->size--;
        }
    }

    /**
     * @param string $value
     * @return void
     */
    public function insertAtTheEnd(string $value): void
    {
        $newNode = new Node($value);
        if ($this->tail) {
            $this->tail->setNextNode($newNode);
            $this->tail = $newNode;
            $this->size++;
        } else {
            $this->insertAtTheBeginning($value);
        }
    }

    /**
     * @return void
     */
    public function deleteAtTheEnd(): void
    {
        if (!$this->isEmpty()) {
            if ($this->getSize() === 1) {
                $this->head = null;
                $this->tail = null;
            } else {
                $currentNode = $this->head;
                while ($currentNode) {
                    if ($currentNode->getNextNode() === $this->getLastNode()) {
                        $currentNode->setNextNode(null);
                        $this->tail = $currentNode;
                    }
                    $currentNode = $currentNode->getNextNode();
                }
            }
            $this->size--;
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
            $currentNode = $this->head;
            while ($currentNode) {
                if ($currentNode->getValue() === $nodeValue) {
                    $newNode = new Node($value);
                    $currentNodeNextNode = $currentNode->getNextNode();
                    $currentNode->setNextNode($newNode);
                    $newNode->setNextNode($currentNodeNextNode);
                    if ($currentNodeNextNode === null) {
                        $this->tail = $newNode;
                    }
                    $this->size++;
                    break;
                }
                $currentNode = $currentNode->getNextNode();
            }
        }
    }

    /**
     * @param string $value
     * @return void
     */
    public function deleteAfterNodeWithValue(string $value): void
    {
        if (!$this->isEmpty()) {
            $currentNode = $this->head;
            while ($currentNode) {
                if ($currentNode->getValue() === $value) {
                    $deletedNode = $currentNode->getNextNode();
                    if (!$deletedNode) {
                        $this->deleteAtTheEnd();
                    } else {
                        $nextNode = $deletedNode->getNextNode();
                        $currentNode->setNextNode($nextNode);
                        if (!$nextNode) {
                            $this->tail = $currentNode;
                        }
                        $this->size--;
                    }
                    break;
                }
                $currentNode = $currentNode->getNextNode();
            }
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
    private function isEmpty(): bool
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
