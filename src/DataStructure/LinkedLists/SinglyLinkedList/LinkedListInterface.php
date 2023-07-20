<?php

namespace PhpAlgoDataStructure\DataStructure\LinkedLists\SinglyLinkedList;

require_once 'NodeInterface.php';

interface LinkedListInterface
{
    /**
     * @param string $value
     * @return void
     */
    public function insertAtTheBeginning(string $value): void;

    /**
     * @return void
     */
    public function deleteAtTheBeginning(): void;

    /**
     * @param string $value
     * @return void
     */
    public function insertAtTheEnd(string $value): void;

    /**
     * @return void
     */
    public function deleteAtTheEnd(): void;

    /**
     * @param NodeInterface $node
     * @return void
     */
    public function insertAfterNodeWithValue(NodeInterface $node): void;

    /**
     * @return void
     */
    public function deleteAfter(): void;

    /**
     * @param string $value
     * @return void
     */
    public function deleteNodeByValue(string $value): void;

    /**
     * @return NodeInterface
     */
    public function getFirstNode(): NodeInterface;

    /**
     * @return NodeInterface
     */
    public function getLastNode(): NodeInterface;

    /**
     * @return void
     */
    public function displayElements(): void;
}