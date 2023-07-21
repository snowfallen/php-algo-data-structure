<?php

namespace PhpAlgoDataStructure\DataStructure\LinkedList\Singly;

use PhpAlgoDataStructure\DataStructure\LinkedList\Nodes\AbstractSinglyNode;

require_once 'LinkedListInsertionInterface.php';
require_once 'Node.php';

class LinkedListInsertion implements LinkedListInsertionInterface
{
    /**
     * @param ?AbstractSinglyNode $head
     * @param ?AbstractSinglyNode $tail
     * @param int $size
     */
    public function __construct(private ?AbstractSinglyNode &$head, private ?AbstractSinglyNode &$tail, private int &$size){}

    /**
     * @param string $value
     * @return void
     */
    public function prepend(string $value): void
    {
        $newNode = new Node($value);

        if ($this->head) {
            $newNode->setNextNode($this->head);
        } else {
            $this->tail = $newNode;
        }

        $this->head = $newNode;
        $this->size++;
    }

    /**
     * @param string $value
     * @return void
     */
    public function append(string $value): void
    {
        $newNode = new Node($value);

        if ($this->tail) {
            $this->tail->setNextNode($newNode);
            $this->tail = $newNode;
            $this->size++;
            return;
        }

        $this->prepend($value);
    }

    /**
     * @param string $nodeValue
     * @param string $value
     * @return void
     */
    public function insertAfterNodeWithValue(string $nodeValue, string $value): void
    {
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

                return;
            }
            $currentNode = $currentNode->getNextNode();
        }
    }
}