<?php

namespace PhpAlgoDataStructure\DataStructure\LinkedList\Singly;

use PhpAlgoDataStructure\DataStructure\LinkedList\Nodes\AbstractSinglyNode;

require_once '../Nodes/AbstractSinglyNode.php';

class Node extends AbstractSinglyNode
{
    private string $value;
    private ?Node $nextNode;

    /**
     * @param string $value
     */
    public function __construct(string $value)
    {
        $this->value = $value;
        $this->nextNode = null;
    }

    /**
     * @return string
     */
    final public function getValue(): string
    {
        return $this->value;
    }

    /**
     * @param string $newValue
     * @return void
     */
    final public function setValue(string $newValue): void
    {
        $this->value = $newValue;
    }

    /**
     * @return ?AbstractSinglyNode
     */
    final public function getNextNode(): ?AbstractSinglyNode
    {
        return $this->nextNode;
    }

    /**
     * @param ?AbstractSinglyNode $nextNode
     * @return void
     */
    final public function setNextNode(?AbstractSinglyNode $nextNode): void
    {
        $this->nextNode = $nextNode;
    }
}
