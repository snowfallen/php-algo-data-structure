<?php

namespace PhpAlgoDataStructure\DataStructure\LinkedList\Singly\tests;

use PhpAlgoDataStructure\DataStructure\LinkedList\Singly\LinkedList;
use PHPUnit\Framework\TestCase;

final class LinkedListTest extends TestCase
{
    public function testCanBeCreated(): void {
        $linkedList = new LinkedList();
    }
}