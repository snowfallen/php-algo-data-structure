<?php

namespace tests;

use PhpAlgoDataStructure\DataStructure\NewLinkedList\Doubly\DoublyLinkedList;
use PHPUnit\Framework\TestCase;

final class DoublyLinkedListTest extends TestCase
{
    /**
     * @return void
     */
    public function testCanBeCreated(): void
    {
        $list = new DoublyLinkedList();
        $this->assertInstanceOf(DoublyLinkedList::class, $list);
    }
}