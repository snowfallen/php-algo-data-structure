<?php
declare(strict_types=1);

namespace PhpAlgoDataStructure\DataStructure\LinkedLists\SinglyLinkedList;

require_once 'NodeInterface.php';

class Node implements NodeInterface
{

    private string $value;
    private ?Node $nextNode = null;

    /**
     * @param string $value
     */
    public function __construct(string $value)
    {
        $this->value = $value;
    }

    /**
     * @return string
     */
    public function getValue(): string
    {
        return $this->value;
    }

    /**
     * @param string $newValue
     * @return void
     */
    public function setValue(string $newValue): void
    {
        $this->value = $newValue;
    }

    /**
     * @return NodeInterface|null
     */
    public function getNextNode(): NodeInterface|null
    {
        return $this->nextNode;
    }

    /**
     * @param NodeInterface $nextNode
     * @return void
     */
    public function setNextNode(NodeInterface $nextNode): void
    {
        $this->nextNode = $nextNode;
    }
}