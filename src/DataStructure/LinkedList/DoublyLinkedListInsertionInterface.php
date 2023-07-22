<?php

namespace PhpAlgoDataStructure\DataStructure\LinkedList;

interface DoublyLinkedListInsertionInterface
{
    /**
     * @param string $value
     * @return void
     */
    public function insertNodeBeforeValue(string $value): void;
}
