<?php

namespace PhpAlgoDataStructure\DataStructure\LinkedList\Singly;

use PhpAlgoDataStructure\DataStructure\LinkedList\LinkedListDeletionInterface;
use PhpAlgoDataStructure\DataStructure\LinkedList\Nodes\NodeInterface;

class SinglyLinkedListDeletion implements LinkedListDeletionInterface
{
    /**
     * @param ?NodeInterface $head
     * @param ?NodeInterface $tail
     * @param int $size
     */
    public function __construct(
        private ?NodeInterface &$head,
        private ?NodeInterface &$tail,
        private int            &$size
    ){}

    /**
     * @return void
     */
    final public function removeFirst(): void
    {
        if ($this->size !== 1) {
            $this->head = $this->head->getNextNode();
            $this->size--;

            return;
        }
        $this->resetPointers();
    }

    /**
     * @return void
     */
    final public function removeLast(): void
    {
        if ($this->size !== 1) {
            $currentNode = $this->head;

            while ($currentNode && $currentNode->getNextNode() !== $this->tail) {
                $currentNode = $currentNode->getNextNode();
            }

            $currentNode->setNextNode(null);
            $this->tail = $currentNode;
            $this->size--;

            return;
        }
        $this->resetPointers();
    }

    /**
     * @param string $value
     * @return void
     */
    final public function removeNodeAfterValue(string $value): void
    {
        $currentNode = $this->head;
        while ($currentNode) {
            if ($currentNode->getValue() === $value) {
                $deletedNode = $currentNode->getNextNode();

                if (!$deletedNode) {
                    return;
                }

                $nextNode = $deletedNode->getNextNode();
                $currentNode->setNextNode($nextNode);

                if (!$nextNode) {
                    $this->tail = $currentNode;
                }

                $this->size--;

                return;
            }
            $currentNode = $currentNode->getNextNode();
        }
    }

    /**
     * @return void
     */
    private function resetPointers(): void
    {
        $this->head = null;
        $this->tail = null;
        $this->size--;
    }
}
