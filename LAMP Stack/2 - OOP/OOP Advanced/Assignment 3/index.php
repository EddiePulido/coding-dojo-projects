<?php

  class Node{

    public $data;
    public $next;

    public function __construct($data){
      $this->data = $data;
      $this->next = null;
    }

  }

Class SinglyLinkeList{

  public $head;

  public function __construct(){
  $this->head = null;
  }

  public function add($val){
    if($this->head == null){
        $this->head = new Node($val);
    }else{
      $new_node = new Node($val);
      $new_node->next = $this->head;
      $this->head = $new_node;
    }
    return true;
  }

  public function remove($value){

    $prev_node = $this->head;
    $node = $this->head;
    $count = 0;

    while($node != null){
      if($node->data == $value){
        if ($count == 0) {
          $this->head = $node->next;
        }else{
          $prev_node->next = $node->next;
          return true;
        }
      }else{
        $prev_node = $node;
        $node = $node->next;
      }
      $count++;
    }

    return false;

  }


  public function insert($valueAfter, $newValue){

    $head = $this->head;
    $node = $this->head;
    $new_node = new Node($newValue);
    $new_node->next = null;

    while($node != null){
      if($node->data == $valueAfter){
        $new_node->next = $node->next;
        $node->next = $new_node;
        $this->head = $head;
        return true;
      }else{
        if ($node->next == null) {
          $node->next = $new_node;
          break;
        }
        $node = $node->next;
      }
    }

  }

  public function printList(){

    $head = $this->head;

    while($head != null){
      echo $head->data . " ";
      $head = $head->next;
    }

    echo "<br>";

  }

  public function find($value){

    $head = $this->head;

    while($head != null){
      if($head->data == $value){
        return $head;
      }else{
        $head = $head->next;
      }
    }

    return false;

  }

  public function isEmpty(){

    if($this->head == null){
      return true;
    }else{
      return false;
    }

  }

}

$list = new SinglyLinkeList();
$list->add(5);
$list->add(10);
$list->add(15);
$list->add(20);
$list->add(25);
$list->add(30);
$list->printList();
$list->remove(15);
$list->remove(30);
$list->remove(20);
$list->printList();
$list->insert(25, 20);
$list->insert(5, 0);
$list->printList();

?>
