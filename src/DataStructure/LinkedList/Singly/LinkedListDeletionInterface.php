<?php

namespace PhpAlgoDataStructure\DataStructure\LinkedList\Singly;

use PhpAlgoDataStructure\DataStructure\LinkedList\Nodes\AbstractSinglyNode;

interface LinkedListDeletionInterface
{
    /**
     * @param AbstractSinglyNode $head
     * @param int $size
     * @return void
     */
    public function deleteAtTheBeginning(AbstractSinglyNode &$head, int &$size): void;

    /**
     * @param AbstractSinglyNode $head
     * @param AbstractSinglyNode $tail
     * @param int $size
     * @return void
     */
    public function deleteAtTheEnd(AbstractSinglyNode &$head, AbstractSinglyNode &$tail, int &$size): void;

    /**
     * @param AbstractSinglyNode $head
     * @param AbstractSinglyNode $tail
     * @param int $size
     * @param string $value
     * @return void
     */
    public function deleteAfterNodeWithValue(AbstractSinglyNode &$head, AbstractSinglyNode &$tail, int &$size, string $value): void;
}