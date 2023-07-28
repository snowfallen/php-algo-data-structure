<?php

namespace tests;

use PhpAlgoDataStructure\DataStructure\LinkedList\Nodes\NodeInterface;
use PhpAlgoDataStructure\DataStructure\LinkedList\Singly\SinglyLinkedList;
use PHPUnit\Framework\TestCase;

final class SinglyLinkedListTest extends TestCase
{
    /**
     * @return void
     */
    public function testCanBeCreated(): void
    {
        $list = new SinglyLinkedList();
        $this->assertInstanceOf(SinglyLinkedList::class, $list);
    }

    /**
     * @return void
     */
    public function testCreatedListIsEmptyAfterCreating(): void
    {
        $list = new SinglyLinkedList();
        $this->assertTrue($list->isEmpty());
    }

    /**
     * @return void
     */
    public function testCanGetSize(): void
    {
        $list = new SinglyLinkedList();
        $this->assertEquals(0, $list->getSize());
    }

    /**
     * @return void
     */
    public function testCanGetFirstNode(): void
    {
        $list = new SinglyLinkedList();
        $node = $list->getFirstNode();
        $this->assertNull($node);
    }

    /**
     * @return void
     */
    public function testIsTheHeadIsNullInEmptyList(): void
    {
        $list = new SinglyLinkedList();
        $this->assertNull($list->getFirstNode());
    }

    /**
     * @return void
     */
    public function testIsTheTailIsNullInEmptyList(): void
    {
        $list = new SinglyLinkedList();
        $this->assertNull($list->getLastNode());
    }

    /**
     * @return void
     */
    public function testCanGetLastNode(): void
    {
        $list = new SinglyLinkedList();
        $node = $list->getLastNode();
        $this->assertNull($node);
    }

    /**
     * @return void
     */
    public function testCanPrependInEmptyList(): void
    {
        $list = new SinglyLinkedList();
        $list->prepend('Hi');
        $this->assertFalse($list->isEmpty());
    }

    /**
     * @return void
     */
    public function testAreHeadAndTailAreTheSameAfterPrependFirsElementInEmptyList(): void
    {
        $list = new SinglyLinkedList();
        $list->prepend('Hi');
        $this->assertSame($list->getFirstNode(), $list->getLastNode());
    }

    /**
     * @return void
     */
    public function testAreListSizeIsChangedAfterPrepend(): void
    {
        $list = new SinglyLinkedList();
        $list->prepend('Hi');
        $this->assertSame(1, $list->getSize());
    }

    /**
     * @return void
     */
    public function testCanPrependInNotEmptyList(): void
    {
        $list = new SinglyLinkedList();
        $list->prepend('Hi');
        $list->prepend('World');
        $this->assertSame(2, $list->getSize());
    }

    /**
     * @return void
     */
    public function testHaveCorrectOrderAfterPrepend(): void
    {
        $list = new SinglyLinkedList();
        $list->prepend('Hi');
        $list->prepend('World');
        $this->assertEquals('Hi', $list->getLastNode()->getValue());
        $this->assertEquals('World', $list->getFirstNode()->getValue());
    }

    /**
     * @return void
     */
    public function testCanAppendInEmptyList(): void
    {
        $list = new SinglyLinkedList();
        $list->append('Hi');
        $this->assertFalse($list->isEmpty());
    }

    /**
     * @return void
     */
    public function testTheHeadAndTailAreTheSameAfterAppendFirsElementInEmptyList(): void
    {
        $list = new SinglyLinkedList();
        $list->append('Hi');
        $this->assertSame($list->getFirstNode(), $list->getLastNode());
    }

    /**
     * @return void
     */
    public function testAreListSizeIsChangedAfterAppend(): void
    {
        $list = new SinglyLinkedList();
        $list->append('Hi');
        $this->assertSame(1, $list->getSize());
    }

    /**
     * @return void
     */
    public function testCanAppendInNotEmptyList(): void
    {
        $list = new SinglyLinkedList();
        $list->append('Hi');
        $list->append('World');
        $this->assertSame(2, $list->getSize());
    }

    /**
     * @return void
     */
    public function testHaveCorrectOrderAfterAppend(): void
    {
        $list = new SinglyLinkedList();
        $list->prepend('Hi');
        $list->append('World');
        $this->assertEquals('Hi', $list->getFirstNode()->getValue());
        $this->assertEquals('World', $list->getLastNode()->getValue());
    }

    /**
     * @return void
     */
    public function testCantRemoveFirstElementInEmptyList(): void
    {
        $list = new SinglyLinkedList();
        $this->assertTrue($list->isEmpty());
        $list->removeFirst();
        $this->assertTrue($list->isEmpty());
    }

    /**
     * @return void
     */
    public function testCantRemoveLastElementInEmptyList(): void
    {
        $list = new SinglyLinkedList();
        $this->assertTrue($list->isEmpty());
        $list->removeLast();
        $this->assertTrue($list->isEmpty());
    }

    /**
     * @return void
     */
    public function testCanRemoveFirstElementInNotEmptyList(): void
    {
        $list = new SinglyLinkedList();
        $list->prepend('Hi');
        $list->prepend('World');
        $list->removeFirst();
        $this->assertSame(1, $list->getSize());
        $this->assertEquals('Hi', $list->getFirstNode()->getValue());
    }

    /**
     * @return void
     */
    public function testCanRemoveFirstElementInOneElementList(): void
    {
        $list = new SinglyLinkedList();
        $list->prepend('Hi');
        $list->removeFirst();
        $this->assertTrue($list->isEmpty());
    }

    /**
     * @return void
     */
    public function testTheHeadAndTailAreNullAfterRemoveFirstElementInOneElementList(): void
    {
        $list = new SinglyLinkedList();
        $list->append('Hi');
        $list->removeFirst();
        $this->assertSame($list->getFirstNode(), $list->getLastNode());
    }

    /**
     * @return void
     */
    public function testTheHeadAreChangedAfterRemoveFirstElementInNotEmptyList(): void
    {
        $list = new SinglyLinkedList();
        $list->prepend('Hi');
        $list->prepend('Hello');
        $list->removeFirst();
        $this->assertEquals('Hi', $list->getFirstNode()->getValue());
    }

    /**
     * @return void
     */
    public function testSizeIsChangedAfterRemoveFirst(): void
    {
        $list = new SinglyLinkedList();
        $list->prepend('Hi');
        $list->prepend('Hello');
        $list->removeFirst();
        $this->assertEquals(1, $list->getSize());
    }

    /**
     * @return void
     */
    public function testCanRemoveLastElementInNotEmptyList(): void
    {
        $list = new SinglyLinkedList();
        $list->prepend('Hi');
        $list->prepend('World');
        $list->removeLast();
        $this->assertSame(1, $list->getSize());
        $this->assertEquals('World', $list->getFirstNode()->getValue());
    }

    /**
     * @return void
     */
    public function testCanRemoveLastElementInOneElementList(): void
    {
        $list = new SinglyLinkedList();
        $list->prepend('Hi');
        $list->removeLast();
        $this->assertTrue($list->isEmpty());
    }

    /**
     * @return void
     */
    public function testTheHeadAndTailAreNullAfterRemoveLastElementInOneElementList(): void
    {
        $list = new SinglyLinkedList();
        $list->append('Hi');
        $list->removeLast();
        $this->assertSame($list->getFirstNode(), $list->getLastNode());
    }

    /**
     * @return void
     */
    public function testTheTailAreChangedAfterRemoveLastElementInNotEmptyList(): void
    {
        $list = new SinglyLinkedList();
        $list->prepend('Hi');
        $list->prepend('Hello');
        $list->removeLast();
        $this->assertEquals('Hello', $list->getLastNode()->getValue());
    }

    /**
     * @return void
     */
    public function testSizeIsChangedAfterRemoveLast(): void
    {
        $list = new SinglyLinkedList();
        $list->prepend('Hi');
        $list->prepend('Hello');
        $list->removeLast();
        $this->assertEquals(1, $list->getSize());
    }

    /**
     * @return void
     */
    public function testIsTheHeadIsTheSinglyNodeType(): void
    {
        $list = new SinglyLinkedList();
        $list->prepend('Hi');
        $this->assertInstanceOf(NodeInterface::class, $list->getFirstNode());
    }

    /**
     * @return void
     */
    public function testIsTheTailIsTheSinglyNodeType(): void
    {
        $list = new SinglyLinkedList();
        $list->prepend('Hi');
        $this->assertInstanceOf(NodeInterface::class, $list->getLastNode());
    }

    /**
     * @return void
     */
    public function testCantInsertAfterNodeWithValueInEmptyList(): void
    {
        $list = new SinglyLinkedList();
        $this->assertTrue($list->isEmpty());
        $list->insertNodeAfterValue('Hi', '!');
        $this->assertTrue($list->isEmpty());
    }

    /**
     * @return void
     */
    public function testCanInsertAfterNodeWithValueInOneElementList(): void
    {
        $list = new SinglyLinkedList();
        $list->prepend('Hi');
        $list->insertNodeAfterValue('Hi', '!');
        $this->assertSame(2, $list->getSize());
    }

    /**
     * @return void
     */
    public function testTheSizeIsChangedAfterInsertAfterNodeWithValue(): void
    {
        $list = new SinglyLinkedList();
        $list->prepend('Hi');
        $list->insertNodeAfterValue('Hi', '!');
        $this->assertEquals(2, $list->getSize());
    }

    /**
     * @return void
     */
    public function testTheTailIsChangedAfterInsertAfterNodeWithValueInOneElementList(): void
    {
        $list = new SinglyLinkedList();
        $list->prepend('Hi');
        $list->insertNodeAfterValue('Hi', '!');
        $this->assertEquals('!', $list->getLastNode()->getValue());
    }

    /**
     * @return void
     */
    public function testTheTailIsNotChangedAfterInsertAfterNodeWithValueInNotEmptyList(): void
    {
        $list = new SinglyLinkedList();
        $list->prepend('Hi');
        $list->prepend('Hello');
        $list->insertNodeAfterValue('Hello', '!');
        $this->assertEquals('Hi', $list->getLastNode()->getValue());
    }

    /**
     * @return void
     */
    public function testCantDeleteAfterNodeWithValueInEmptyList(): void
    {
        $list = new SinglyLinkedList();
        $this->assertTrue($list->isEmpty());
        $list->removeNodeAfterValue('Hi', '!');
        $this->assertTrue($list->isEmpty());
    }

    /**
     * @return void
     */
    public function testCantDeleteAfterNodeWithValueInOneElementList(): void
    {
        $list = new SinglyLinkedList();
        $list->prepend('Hi');
        $list->removeNodeAfterValue('Hi', '!');
        $this->assertSame(1, $list->getSize());
    }

    /**
     * @return void
     */
    public function testCanDeleteAfterNodeWithValueInNotEmptyList(): void
    {
        $list = new SinglyLinkedList();
        $list->prepend('Hi');
        $list->prepend('Hello');
        $list->removeNodeAfterValue('Hello');
        $this->assertSame(1, $list->getSize());
    }

    /**
     * @return void
     */
    public function testTheTailIsChangedAfterDeleteAfterNodeWithValue(): void
    {
        $list = new SinglyLinkedList();
        $list->prepend('Hi');
        $list->prepend('Hello');
        $list->removeNodeAfterValue('Hello');
        $this->assertEquals('Hello', $list->getLastNode()->getValue());
    }

    /**
     * @return void
     */
    public function testTheTailInNotChangedAfterDeleteAfterNodeWithValue(): void
    {
        $list = new SinglyLinkedList();
        $list->prepend('Hi');
        $list->prepend('Hello');
        $list->append('!');
        $this->assertSame(3, $list->getSize());
        $list->removeNodeAfterValue('Hello');
        $this->assertEquals('!', $list->getLastNode()->getValue());
    }

    /**
     * @return void
     */
    public function testTheSizeIsChangedAfterDeleteAfterNodeWithValue(): void
    {
        $list = new SinglyLinkedList();
        $list->prepend('Hi');
        $list->prepend('Hello');
        $list->append('!');
        $this->assertSame(3, $list->getSize());
        $list->removeNodeAfterValue('Hello');
        $this->assertSame(2, $list->getSize());
    }
}
