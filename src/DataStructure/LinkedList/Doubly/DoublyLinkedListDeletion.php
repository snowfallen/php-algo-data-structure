<?php

namespace PhpAlgoDataStructure\DataStructure\LinkedList\Doubly;

use PhpAlgoDataStructure\DataStructure\LinkedList\LinkedListDeletionInterface;
use PhpAlgoDataStructure\DataStructure\LinkedList\DoublyLinkedListDeletionInterface;
use PhpAlgoDataStructure\DataStructure\LinkedList\Nodes\NodeInterface;

class DoublyLinkedListDeletion implements LinkedListDeletionInterface, DoublyLinkedListDeletionInterface
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
