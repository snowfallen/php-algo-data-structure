<?php

namespace PhpAlgoDataStructure\DataStructure\NewLinkedList;

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
    public function insertNodeAfterValue(string $nodeValue, string $value): void;
}
