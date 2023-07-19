<?php
declare(strict_types=1);

namespace PhpAlgoDataStructure\DataStructure\LinkedLists\SinglyLinkedList;

require_once 'Node.php';

class OldLinkedList
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

        if ($this->head !== null) {
            $newNode->setNextNode($this->head);
        }

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
        $this->head = $this->head->getNextNode();
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
            $this->tail->setNextNode($newNode);
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
            echo $currentNode->getValue() . "\n";
            $currentNode = $currentNode->getNextNode();
        }
    }

    public function getFirstNode()
    {
        return $this->head;
    }

    public function getLastNode()
    {
        return $this->tail;
    }
}

$test = new OldLinkedList();
$test->insertAtTheBeginning('1');
$test->insertAtTheBeginning('0');
$test->insertAtTheBeginning('-1');
$test->insertAtTheEnd('2');
$test->insertAtTheEnd('3');
$test->deleteAtTheBeginning();
$test->deleteAtTheBeginning();

var_dump($test->getFirstNode());
var_dump($test->getLastNode());