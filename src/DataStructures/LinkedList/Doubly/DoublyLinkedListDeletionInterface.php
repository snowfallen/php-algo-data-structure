<?php

namespace PhpAlgoDataStructure\DataStructure\LinkedList\Doubly;

interface DoublyLinkedListDeletionInterface
{
    /**
     * @param string $value
     * @return void
     */
    public function removeNodeBeforeValue(string $value): void;
}
