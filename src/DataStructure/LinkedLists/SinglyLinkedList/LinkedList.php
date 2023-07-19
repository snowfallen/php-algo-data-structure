<?php
declare(strict_types=1);

namespace PhpAlgoDataStructure\DataStructure\LinkedLists\SinglyLinkedList;

require_once 'Node.php';

class LinkedList
{
    private Node|null $head;
    private Node|null $tail;

    public function __construct()
    {
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
        $newNode->nextNode = $this->head;
        $this->head = $newNode;
        if (!$this->tail) {
            $this->tail = $newNode;
        }
    }

    /**
     * @return void
     */
    public function deleteAtTheBeginning(): void
    {
        $this->head = $this->head->nextNode;
    }

    /**
     * @param string $value
     * @return void
     */
    public function insertAtTheEnd(string $value): void
    {
        $newNode = new Node($value);

        if ($this->head === null) {
            $this->head = $newNode;
        } else {
            $this->tail->nextNode = $newNode;
        }
        $this->tail = $newNode;
    }

    /**
     * @return void
     */
    public function displayElements(): void
    {
        $currentNode = $this->head;
        while ($currentNode) {
            echo $currentNode->value . "\n";
            $currentNode = $currentNode->nextNode;
        }
    }
}

$test = new LinkedList();
$test->insertAtTheBeginning('1');
$test->insertAtTheBeginning('0');
$test->insertAtTheBeginning('-1');
$test->insertAtTheEnd('2');
$test->insertAtTheEnd('3');
$test->deleteAtTheBeginning();

$test->displayElements();