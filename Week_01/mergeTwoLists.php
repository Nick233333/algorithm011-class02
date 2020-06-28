<?php

class ListNode {
    public $val = 0;
    public $next = null;
    function __construct($val = 0, $next = null) {
        $this->val = $val;
        $this->next = $next;
    }
}

function mergeTwoLists($l1, $l2) {
    $newList = new ListNode();
    $current = $newList;
    while ($l1 != null && $l2 != null) {
        if ($l1->val <= $l2->val) {
            $current->next = $l1;
            $l1 = $l1->next; 
        } else {
            $current->next = $l2;
            $l2 = $l2->next;
        }
        $current = $current->next;
    }
    if ($l1 != null) {
        $current->next = $l1;
    } else {
        $current->next = $l2;
    }
    return $newList->next;
}
