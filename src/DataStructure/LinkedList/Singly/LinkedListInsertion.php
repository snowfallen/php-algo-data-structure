<?php

namespace PhpAlgoDataStructure\DataStructure\LinkedList\Singly;

use PhpAlgoDataStructure\DataStructure\LinkedList\Nodes\AbstractSinglyNode;

require_once 'LinkedListInsertionInterface.php';
require_once 'Node.php';

class LinkedListInsertion implements LinkedListInsertionInterface
{
    /**
     * @param AbstractSinglyNode|null $head
     * @param AbstractSinglyNode|null $tail
     * @param string $value
     * @param int $size
     * @return void
     */
    public function insertAtTheBeginning(?AbstractSinglyNode &$head, ?AbstractSinglyNode &$tail, string $value, int &$size): void
    {
        $newNode = new Node($value);
        if ($head) {
            $newNode->setNextNode($head);
        }
        if (!$tail) {
            $tail = $newNode;
        }
        $head = $newNode;
        $size++;
    }

    /**
     * @param AbstractSinglyNode|null $head
     * @param AbstractSinglyNode|null $tail
     * @param string $value
     * @param int $size
     * @return void
     */
    public function insertAtTheEnd(?AbstractSinglyNode &$head, ?AbstractSinglyNode &$tail, string $value, int &$size): void
    {
        $newNode = new Node($value);
        if ($tail) {
            $tail->setNextNode($newNode);
            $tail = $newNode;
            $size++;
        } else {
            $this->insertAtTheBeginning($head, $tail, $value, $size);
        }
    }

    /**
     * @param AbstractSinglyNode|null $head
     * @param AbstractSinglyNode|null $tail
     * @param string $nodeValue
     * @param string $value
     * @param int $size
     * @return void
     */
    public function insertAfterNodeWithValue(?AbstractSinglyNode &$head, ?AbstractSinglyNode &$tail, string $nodeValue, string $value, int &$size): void
    {
        $currentNode = $head;
        while ($currentNode) {
            if ($currentNode->getValue() === $nodeValue) {
                $newNode = new Node($value);
                $currentNodeNextNode = $currentNode->getNextNode();
                $currentNode->setNextNode($newNode);
                $newNode->setNextNode($currentNodeNextNode);
                if ($currentNodeNextNode === null) {
                    $tail = $newNode;
                }
                $size++;
                break;
            }
            $currentNode = $currentNode->getNextNode();
        }
    }
}