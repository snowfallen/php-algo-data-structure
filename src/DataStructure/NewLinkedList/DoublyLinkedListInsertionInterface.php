<?php

namespace PhpAlgoDataStructure\DataStructure\NewLinkedList;

interface DoublyLinkedListInsertionInterface
{
    /**
     * @param string $value
     * @return void
     */
    public function insertNodeBeforeValue(string $value): void;
}
