<?php

namespace PhpAlgoDataStructure\DataStructure\LinkedList\Singly;

use PhpAlgoDataStructure\DataStructure\LinkedList\LinkedList;

class SinglyLinkedList extends LinkedList
{
    public function __construct()
    {
        parent::__construct(new SinglyLinkedListInsertion($this->head, $this->tail, $this->size), new SinglyLinkedListDeletion($this->head, $this->tail, $this->size));
    }
}
