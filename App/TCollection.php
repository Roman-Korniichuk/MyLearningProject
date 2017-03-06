<?php

namespace App;

trait TCollection 
{
    protected $data = [];
    
    public function current() 
    {
        return current($this->data);
    }

    public function key(): \scalar 
    {
        return key($this->data);
    }

    public function next(): void 
    {
        return next($this->data);
    }

    public function offsetExists($offset): bool 
    {
        return array_key_exists($offset, $this->data);
    }

    public function offsetGet($offset) 
    {
        return $this->data[$offset];
    }

    public function offsetSet($offset, $value): void 
    {
        if ('' == $offset) {
            $this->data[] = $value;
        } else {
            $this->data[$offset] = $value;
        }
    }

    public function offsetUnset($offset): void 
    {
        unset($this->data[$offset]);
    }

    public function rewind(): void 
    {
        reset($this->data);
    }

    public function valid(): bool 
    {
        return false !== current($this->data);
    }
}
