<?php

namespace PhpAlgoDataStructure\DataStructure\LinkedList\Nodes;

class SinglyNode implements NodeInterface, SinglyNodeInterface
{
    private string $value;
    private ?NodeInterface $nextNode;

    /**
     * @param string $value
     */
    public function __construct(string $value)
    {
        $this->value = $value;
        $this->nextNode = null;
    }

    /**
     * @return ?NodeInterface
     */
    final public function getNextNode(): ?NodeInterface
    {
        return $this->nextNode;
    }

    /**
     * @param ?NodeInterface $nextNode
     * @return void
     */
    final public function setNextNode(?NodeInterface $nextNode): void
    {
        $this->nextNode = $nextNode;
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
}
