<?php

namespace PhpAlgoDataStructure\DataStructure\LinkedList;

interface LinkedListDeletionInterface
{
    /**
     * @return void
     */
    public function removeFirst(): void;

    /**
     * @return void
     */
    public function removeLast(): void;

    /**
     * @param string $value
     * @return void
     */
    public function removeNodeAfterValue(string $value): void;
}
