<?php

/**
 * Time exceed
 */

 /**
  * Data Schem
    ListNode Object
    (
        [value] => 3
        [next] => ListNode Object
            (
                [value] => 1
                [next] => ListNode Object
                    (
                        [value] => 2
                        [next] => ListNode Object
                            (
                                [value] => 3
                                [next] => ListNode Object
                                    (
                                        [value] => 4
                                        [next] => ListNode Object
                                            (
                                                [value] => 5
                                                [next] => 
                                            )

                                    )

                            )

                    )

            )

    )
  */


// Singly-linked lists are already defined with this interface:
class ListNode {
  public $value;
  public $next;

  public function __construct($x) {
    $this->value = $x;
    $this->next = null;
  }
}

function removeKFromList($l, $k, $new = null) {
    
    if($l === null){
        return $new;
    }
    
    if($l->value !== $k){        
        if($new === null){
            $new = new ListNode($l->value);
        }else{
            $c = new ListNode($l->value);
            $new = linked($new, $c);
        }
    }
    return removeKFromList($l->next, $k, $new);
}

function linked($actual, $new)
{
    if($actual->next === null){
        $actual->next = $new;
    }else{
        linked($actual->next, $new);
    }
    return $actual;   
}