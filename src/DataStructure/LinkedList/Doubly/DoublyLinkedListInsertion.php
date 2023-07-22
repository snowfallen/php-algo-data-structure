<?php

namespace PhpAlgoDataStructure\DataStructure\LinkedList\Doubly;

use PhpAlgoDataStructure\DataStructure\LinkedList\LinkedListInsertionInterface;
use PhpAlgoDataStructure\DataStructure\LinkedList\DoublyLinkedListInsertionInterface;
use PhpAlgoDataStructure\DataStructure\LinkedList\Nodes\NodeInterface;

class LinkedListInsertion implements LinkedListInsertionInterface, DoublyLinkedListInsertionInterface
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
     * @param string $value
     * @return void
     */
    public function prepend(string $value): void
    {
        // TODO: Implement prepend() method.
    }

    /**
     * @param string $value
     * @return void
     */
    public function append(string $value): void
    {
        // TODO: Implement append() method.
    }

    /**
     * @param string $nodeValue
     * @param string $value
     * @return void
     */
    public function insertNodeAfterValue(string $nodeValue, string $value): void
    {
        // TODO: Implement insertNodeAfterValue() method.
    }

    /**
     * @param string $value
     * @return void
     */
    public function insertNodeBeforeValue(string $value): void
    {
        // TODO: Implement insertNodeBeforeValue() method.
    }
}
