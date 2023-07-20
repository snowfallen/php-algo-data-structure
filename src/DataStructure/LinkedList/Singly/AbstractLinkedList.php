<?php

namespace PhpAlgoDataStructure\DataStructure\LinkedList\Singly;

use PhpAlgoDataStructure\DataStructure\LinkedList\LinkedListInterface;

require_once '../LinkedListInterface.php';

abstract class AbstractLinkedList implements LinkedListInterface
{
    /**
     * @param string $value
     * @return void
     */
    public abstract function insertAtTheBeginning(string $value): void;

    /**
     * @return void
     */
    public abstract function deleteAtTheBeginning(): void;

    /**
     * @param string $value
     * @return void
     */
    public abstract function insertAtTheEnd(string $value): void;

    /**
     * @return void
     */
    public abstract function deleteAtTheEnd(): void;

    /**
     * @param string $nodeValue
     * @param string $value
     * @return void
     */
    public abstract function insertAfterNodeWithValue(string $nodeValue, string $value): void;

    /**
     * @param string $value
     * @return void
     */
    public abstract function deleteAfterNodeWithValue(string $value): void;
}