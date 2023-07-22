<?php

namespace PhpAlgoDataStructure\DataStructure\NewLinkedList\Doubly;

use PhpAlgoDataStructure\DataStructure\NewLinkedList\LinkedListDeletionInterface;
use PhpAlgoDataStructure\DataStructure\NewLinkedList\DoublyLinkedListDeletionInterface;
use PhpAlgoDataStructure\DataStructure\NewLinkedList\Nodes\NodeInterface;

class LinkedListDeletion implements LinkedListDeletionInterface, DoublyLinkedListDeletionInterface
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
    public function removeFirst(): void
    {
        // TODO: Implement removeFirst() method.
    }

    /**
     * @return void
     */
    public function removeLast(): void
    {
        // TODO: Implement removeLast() method.
    }

    /**
     * @param string $value
     * @return void
     */
    public function removeNodeAfterValue(string $value): void
    {
        // TODO: Implement removeNodeAfterValue() method.
    }

    /**
     * @param string $value
     * @return void
     */
    public function removeNodeBeforeValue(string $value): void
    {
        // TODO: Implement removeNodeBeforeValue() method.
    }
}
