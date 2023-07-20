<?php

namespace PhpAlgoDataStructure\DataStructure\LinkedList\Singly;

use PhpAlgoDataStructure\DataStructure\LinkedList\Nodes\AbstractSinglyNode;

require_once 'LinkedListDeletionInterface.php';

class LinkedListDeletion implements LinkedListDeletionInterface
{
    /**
     * @param AbstractSinglyNode $head
     * @param int $size
     * @return void
     */
    public function deleteAtTheBeginning(AbstractSinglyNode &$head, int &$size): void
    {
        $head = $head->getNextNode();
        $size--;
    }

    /**
     * @param AbstractSinglyNode $head
     * @param AbstractSinglyNode $tail
     * @param int $size
     * @return void
     */
    public function deleteAtTheEnd(AbstractSinglyNode &$head, AbstractSinglyNode &$tail, int &$size): void
    {
        if ($size === 1) {
            $head = null;
            $tail = null;
        } else {
            $currentNode = $head;
            while ($currentNode) {
                if ($currentNode->getNextNode() === $tail) {
                    $currentNode->setNextNode(null);
                    $tail = $currentNode;
                }
                $currentNode = $currentNode->getNextNode();
            }
        }
        $size--;
    }

    /**
     * @param AbstractSinglyNode $head
     * @param AbstractSinglyNode $tail
     * @param int $size
     * @param string $value
     * @return void
     */
    public function deleteAfterNodeWithValue(AbstractSinglyNode &$head, AbstractSinglyNode &$tail, int &$size, string $value): void
    {
        $currentNode = $head;
        while ($currentNode) {
            if ($currentNode->getValue() === $value) {
                $deletedNode = $currentNode->getNextNode();
                if (!$deletedNode) {
                    $this->deleteAtTheEnd($head, $tail, $size);
                } else {
                    $nextNode = $deletedNode->getNextNode();
                    $currentNode->setNextNode($nextNode);
                    if (!$nextNode) {
                        $tail = $currentNode;
                    }
                    $size--;
                }
                break;
            }
            $currentNode = $currentNode->getNextNode();
        }
    }
}