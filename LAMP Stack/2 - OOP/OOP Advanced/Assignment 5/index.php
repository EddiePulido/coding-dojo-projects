<?php

class Node {
  public $value, $prev, $next;
  public function __construct($value){
    $this->value = $value;
    $this->prev = null;
    $this->next = null;
  }
}

//implementation of linked list
class DoublyLinkedList {

  public $head, $tail;

  public function __construct(){
    $this->head = null; //have the head point to NULL
    $this->tail = null; //have the tail point to NULL
  }

  public function add($value){
    $node = new Node($value);
    if ($this->head == null && $this->tail == null) {
      $this->head = $node;
      $this->tail = $node;
    }else{
      $node->next = $this->head;
      $this->head->prev = $node;
      $this->head = $node;
    }
  }

  //finds the node on the $pos position
  public function find($pos){
    $node = $this->head;
    $count = 0;
    while ($node != null) {
      if ($count == $pos) {
        return $node;
      }else{
        $node = $node->next;
        $count++;
      }
    }
    return false;
  }

  //finds all nodes with the value of $value
  public function findAllNodesWithValueOf($value){
    $node = $this->head;
    $nodes = array();
    while ($node != null) {
      if($node->value == $value){
        array_push($nodes, $node);
      }
      $node = $node->next;
    }
    return $nodes;
  }

  //removes all nodes with the value of $value
  public function removeAllNodesWithValueOf($value){
    $node = $this->head;
    while ($node != null) {
      if($node->value == $value){
        if ($node->prev != null) {
          $node->prev->next = $node->next;
        }else{
          $node->next->prev = null;
          $this->head = $node->next;
        }
        if ($node->next != null) {
          $node->next->prev = $node->prev;
        }
        $node = $node->next;
      }else{
        $node = $node->next;
      }
    }
  }

  //removes node of position $pos
  public function removeNode($pos){
    $node = $this->head;
    $count = 0;
    while ($node != null) {
      if($count == $pos){
        if ($node->prev != null) {
          $node->prev->next = $node->next;
        }else{
          $node->next->prev = null;
          $this->head = $node->next;
        }
        if ($node->next != null) {
          $node->next->prev = $node->prev;
        }
      }
      $node = $node->next;
      $count++;
    }
  }

  //inserts a new value in the specified position
  public function insert($pos, $value){
    $node = $this->head;
    $count = 0;
    while($node != null) {
      if($count == $pos) {
        $new_node = new Node($value);
        $new_node->prev = $node;
        $new_node->next = $node->next;
        $node->next = $new_node;
        return true;
      }else{
        $node = $node->next;
        $count++;
      }
    }
  }

  public function printValues(){
    $node = $this->head;

    while ($node != null) {
      echo $node->value . " ";
      $node = $node->next;
    }

  }

}

$dll = new DoublyLinkedList(); //creates a new instance of the doubly linked list
$dll->add(5); //should add a new node with the value of 5
$dll->add(7); //should add a new node with the value of 7
$dll->add(10);
$dll->removeAllNodesWithValueOf(5); //should remove all nodes with value of 7
$dll->findAllNodesWithValueOf(7);
$dll->removeNode(1); //removes node of position 1
$dll->find(0);
$dll->add(3); //should add a new node with the value of 3
$dll->insert(1, 100); //insert a new node of value 100 in the position 1
$dll->printValues(); //should print all the values in the doubly linked list

?>
