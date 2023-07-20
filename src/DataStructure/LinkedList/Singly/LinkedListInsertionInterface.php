<?php

namespace PhpAlgoDataStructure\DataStructure\LinkedList\Singly;

use PhpAlgoDataStructure\DataStructure\LinkedList\Nodes\AbstractSinglyNode;

interface LinkedListInsertionInterface
{
    /**
     * @param ?AbstractSinglyNode $head
     * @param ?AbstractSinglyNode $tail
     * @param string $value
     * @param int $size
     * @return void
     */
    public function insertAtTheBeginning(?AbstractSinglyNode &$head, ?AbstractSinglyNode &$tail, string $value, int &$size): void;

    /**
     * @param ?AbstractSinglyNode $head
     * @param ?AbstractSinglyNode $tail
     * @param string $value
     * @param int $size
     * @return void
     */
    public function insertAtTheEnd(?AbstractSinglyNode &$head, ?AbstractSinglyNode &$tail, string $value, int &$size): void;

    /**
     * @param ?AbstractSinglyNode $head
     * @param ?AbstractSinglyNode $tail
     * @param string $nodeValue
     * @param string $value
     * @param int $size
     * @return void
     */
    public function insertAfterNodeWithValue(?AbstractSinglyNode &$head, ?AbstractSinglyNode &$tail, string $nodeValue, string $value, int &$size): void;
}