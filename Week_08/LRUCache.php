<?php

class LRUCache {

    private $capacity;
    private $map;

    /**
     * @param Integer $capacity
     */
    function __construct($capacity) {
        $this->capacity = $capacity;
    }

    /**
     * @param Integer $key
     * @return Integer
     */
    function get($key) {
        $key = 'k_' . $key;
        if (isset($this->map[$key])) {
            $val = $this->map[$key];
            unset($this->map[$key]);
            $this->map[$key] = $val;
            return $val;
        } else {
            return -1;
        }
    }

    /**
     * @param Integer $key
     * @param Integer $value
     * @return NULL
     */
    function put($key, $value) {
        $key = 'k_' . $key;
         if (isset($this->map[$key])) {
            unset($this->map[$key]);
            $this->map[$key] = $value;
            return;
        }
        if (count($this->map) >= $this->capacity) {
            array_shift($this->map);
        }
        $this->map[$key] = $value;
    }
}

/**
 * Your LRUCache object will be instantiated and called as such:
 * $obj = LRUCache($capacity);
 * $ret_1 = $obj->get($key);
 * $obj->put($key, $value);
 */
