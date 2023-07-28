<?php

namespace PhpAlgoDataStructure\DataStructure\LinkedList\Nodes;

class DoublyNode extends SinglyNode implements DoublyNodeInterface
{
    private ?NodeInterface $previousNode;

    /**
     * @param string $value
     */
    public function __construct(string $value)
    {
        parent::__construct($value);
        $this->previousNode = null;
    }

    /**
     * @return ?NodeInterface
     */
    final public function getPreviousNode(): ?NodeInterface
    {
        return $this->previousNode;
    }

    /**
     * @param ?NodeInterface $newPreviousNode
     * @return void
     */
    final public function setPreviousNode(?NodeInterface $newPreviousNode): void
    {
        $this->previousNode = $newPreviousNode;
    }
}
