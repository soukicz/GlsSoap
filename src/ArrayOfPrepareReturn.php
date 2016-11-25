<?php

namespace Soukicz\GlsSoap;

class ArrayOfPrepareReturn implements \ArrayAccess, \Iterator, \Countable {

    /**
     * @var PrepareReturn[] $ArrayOfPrepareReturn
     */
    protected $ArrayOfPrepareReturn = null;

    /**
     * @param PrepareReturn[] $ArrayOfPrepareReturn
     */
    public function __construct(array $ArrayOfPrepareReturn) {
        $this->ArrayOfPrepareReturn = $ArrayOfPrepareReturn;
    }

    /**
     * @return PrepareReturn[]
     */
    public function getArrayOfPrepareReturn() {
        return $this->ArrayOfPrepareReturn;
    }

    /**
     * @param PrepareReturn[] $ArrayOfPrepareReturn
     * @return \Soukicz\GlsSoap\ArrayOfPrepareReturn
     */
    public function setArrayOfPrepareReturn(array $ArrayOfPrepareReturn) {
        $this->ArrayOfPrepareReturn = $ArrayOfPrepareReturn;
        return $this;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset An offset to check for
     * @return boolean true on success or false on failure
     */
    public function offsetExists($offset) {
        return isset($this->ArrayOfPrepareReturn[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return PrepareReturn
     */
    public function offsetGet($offset) {
        return $this->ArrayOfPrepareReturn[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param PrepareReturn $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value) {
        if(!isset($offset)) {
            $this->ArrayOfPrepareReturn[] = $value;
        } else {
            $this->ArrayOfPrepareReturn[$offset] = $value;
        }
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset) {
        unset($this->ArrayOfPrepareReturn[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return PrepareReturn Return the current element
     */
    public function current() {
        return current($this->ArrayOfPrepareReturn);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next() {
        next($this->ArrayOfPrepareReturn);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key() {
        return key($this->ArrayOfPrepareReturn);
    }

    /**
     * Iterator implementation
     *
     * @return boolean Return the validity of the current position
     */
    public function valid() {
        return $this->key() !== null;
    }

    /**
     * Iterator implementation
     * Rewind the Iterator to the first element
     *
     * @return void
     */
    public function rewind() {
        reset($this->ArrayOfPrepareReturn);
    }

    /**
     * Countable implementation
     *
     * @return PrepareReturn Return count of elements
     */
    public function count() {
        return count($this->ArrayOfPrepareReturn);
    }

}
