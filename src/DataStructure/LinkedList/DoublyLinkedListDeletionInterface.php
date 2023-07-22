<?php

namespace PhpAlgoDataStructure\DataStructure\LinkedList;

interface DoublyLinkedListDeletionInterface
{
    /**
     * @param string $value
     * @return void
     */
    public function removeNodeBeforeValue(string $value): void;
}
