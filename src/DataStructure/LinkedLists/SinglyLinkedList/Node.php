<?php
declare(strict_types=1);

namespace PhpAlgoDataStructure\DataStructure\LinkedLists\SinglyLinkedList;

class Node
{
    public string $value;
    public Node|null $nextNode = null;

    /**
     * @param string $value
     */
    public function __construct(string $value)
    {
        $this->value = $value;
    }
}