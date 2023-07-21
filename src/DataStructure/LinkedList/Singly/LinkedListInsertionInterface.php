<?php

namespace PhpAlgoDataStructure\DataStructure\LinkedList\Singly;

interface LinkedListInsertionInterface
{
    /**
     * @param string $value
     * @return void
     */
    public function prepend(string $value): void;

    /**
     * @param string $value
     * @return void
     */
    public function append(string $value): void;

    /**
     * @param string $nodeValue
     * @param string $value
     * @return void
     */
    public function insertAfterNodeWithValue(string $nodeValue, string $value): void;
}
