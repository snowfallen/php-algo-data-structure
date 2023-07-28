<?php

namespace PhpAlgoDataStructure\DataStructure\LinkedList\Singly;

use PhpAlgoDataStructure\DataStructure\LinkedList\LinkedListInsertionInterface;
use PhpAlgoDataStructure\DataStructure\LinkedList\Nodes\SinglyNodeInterface;
use PhpAlgoDataStructure\DataStructure\LinkedList\Nodes\SinglyNode;

class SinglyLinkedListInsertion implements LinkedListInsertionInterface
{
    /**
     * @param ?SinglyNodeInterface $head
     * @param ?SinglyNodeInterface $tail
     * @param int $size
     */
    public function __construct(
        private ?SinglyNodeInterface &$head,
        private ?SinglyNodeInterface &$tail,
        private int            &$size
    ){}

    /**
     * @param string $value
     * @return void
     */
    final public function prepend(string $value): void
    {
        $newNode = new SinglyNode($value);

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
    final public function append(string $value): void
    {
        $newNode = new SinglyNode($value);

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
    final public function insertNodeAfterValue(string $nodeValue, string $value): void
    {
        $currentNode = $this->head;
        while ($currentNode) {
            if ($currentNode->getValue() === $nodeValue) {
                $newNode = new SinglyNode($value);
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
