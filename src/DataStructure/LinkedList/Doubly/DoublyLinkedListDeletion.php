<?php

namespace PhpAlgoDataStructure\DataStructure\LinkedList\Doubly;

use PhpAlgoDataStructure\DataStructure\LinkedList\LinkedListDeletionInterface;
use PhpAlgoDataStructure\DataStructure\LinkedList\Nodes\DoublyNodeInterface;

class DoublyLinkedListDeletion implements LinkedListDeletionInterface, DoublyLinkedListDeletionInterface
{
    /**
     * @param ?DoublyNodeInterface $head
     * @param ?DoublyNodeInterface $tail
     * @param int $size
     */
    public function __construct(
        private ?DoublyNodeInterface &$head,
        private ?DoublyNodeInterface &$tail,
        private int            &$size
    ){}

    /**
     * @return void
     */
    final public function removeFirst(): void
    {
        // TODO: Implement removeFirst() method.
    }

    /**
     * @return void
     */
    final public function removeLast(): void
    {
        // TODO: Implement removeLast() method.
    }

    /**
     * @param string $value
     * @return void
     */
    final public function removeNodeAfterValue(string $value): void
    {
        // TODO: Implement removeNodeAfterValue() method.
    }

    /**
     * @param string $value
     * @return void
     */
    final public function removeNodeBeforeValue(string $value): void
    {
        // TODO: Implement removeNodeBeforeValue() method.
    }
}
