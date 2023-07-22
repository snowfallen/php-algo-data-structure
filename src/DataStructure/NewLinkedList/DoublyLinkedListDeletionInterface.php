<?php

namespace PhpAlgoDataStructure\DataStructure\NewLinkedList;

interface DoublyLinkedListDeletionInterface
{
    /**
     * @param string $value
     * @return void
     */
    public function removeNodeBeforeValue(string $value): void;
}
