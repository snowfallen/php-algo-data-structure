<?php

namespace PhpAlgoDataStructure\DataStructure\LinkedList\Nodes;

final class DoublyNode extends SinglyNode implements DoublyNodeInterface
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
     * @return NodeInterface|null
     */
    public function getPreviousNode(): ?NodeInterface
    {
        return $this->previousNode;
    }

    /**
     * @param NodeInterface|null $newPreviousNode
     * @return void
     */
    public function setPreviousNode(?NodeInterface $newPreviousNode): void
    {
        $this->previousNode = $newPreviousNode;
    }
}
