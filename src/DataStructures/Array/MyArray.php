<?php
declare(strict_types=1);

namespace PhpAlgoDataStructure\DataStructure\Array;

use ArrayAccess;
use IteratorAggregate;
use ArrayIterator;

class MyArray implements ArrayAccess, IteratorAggregate
{
    private int $count;
    private array $elements;

    public function __construct()
    {
        $this->count = 0;
        $this->elements = [];
    }

    /**
     * Add an element to the end of the array.
     *
     * @param mixed $value
     * @return int
     */
    public function push(mixed $value): int
    {
        $this->elements[] = $value;
        $this->count++;

        return $this->getSize();
    }

    /**
     * Get the value at the specified index.
     *
     * @param int $index
     * @return mixed|null
     */
    public function getByIndex(int $index): mixed
    {
        return $this->elements[$index] ?? null;
    }

    /**
     * Remove the element at the specified index.
     *
     * @param int $index
     * @return int
     */
    public function removeByIndex(int $index): int
    {
        if (isset($this->elements[$index])) {
            unset($this->elements[$index]);
            $this->count--;
        }

        return $this->getSize();
    }

    /**
     * Get the size of the array.
     *
     * @return int
     */
    public function getSize(): int
    {
        return $this->count;
    }

    /**
     * Check if the specified offset exists in the array.
     *
     * @param mixed $offset
     * @return bool
     */
    public function offsetExists(mixed $offset): bool
    {
        return isset($this->elements[$offset]);
    }

    /**
     * Get the value at the specified offset.
     *
     * @param mixed $offset
     * @return mixed|null
     */
    public function offsetGet(mixed $offset): mixed
    {
        return $this->elements[$offset] ?? null;
    }

    /**
     * Set the value at the specified offset.
     *
     * @param mixed $offset
     * @param mixed $value
     * @return void
     */
    public function offsetSet(mixed $offset, mixed $value): void
    {
        if ($offset === null) {
            $this->elements[] = $value;
        } else {
            $this->elements[$offset] = $value;
        }
    }

    /**
     * Unset the value at the specified offset.
     *
     * @param mixed $offset
     * @return void
     */
    public function offsetUnset(mixed $offset): void
    {
        unset($this->elements[$offset]);
    }

    /**
     * Get an iterator to traverse the elements.
     *
     * @return ArrayIterator
     */
    public function getIterator(): ArrayIterator
    {
        return new ArrayIterator($this->elements);
    }
}
