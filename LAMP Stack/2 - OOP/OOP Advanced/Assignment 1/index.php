<?php

  class Animal{

    protected $name;
    protected $health;

    public function __construct($name){
      $this->name = $name;
      $this->health = 100;
    }

    public function walk(){
      $this->health -= 1;
      return $this;
    }

    public function run(){
      $this->health -= 5;
      return $this;
    }

    public function displayHealth(){
      echo "Name: " . $this->name . "<br>";
      echo "Health: " . $this->health . "<br>";
      return $this;
    }

  }

  class Dog extends Animal{

    public function __construct($name){
      $this->name = $name;
      $this->health = 150;
    }

    public function pet(){
      $this->health += 5;
      return $this;
    }

  }

  class Dragon extends Animal{

    public function __construct($name){
      $this->name = $name;
      $this->health = 170;
    }

    public function fly(){
      $this->health -= 10;
      return $this;
    }

    public function displayHealth(){
      echo "this is a dragon!" . "<br>";
      parent::displayHealth();
      return $this;
    }

  }

  $animal = new Animal("animal");
  $animal->walk()->walk()->walk()->run()->run()->displayHealth();

  $ruffie = new Dog("ruffie");
  $ruffie->walk()->walk()->walk()->run()->run()->pet()->displayHealth();

  $carl = new Dragon("carl");
  $carl->walk()->walk()->walk()->run()->run()->fly()->fly()->displayHealth();

?>
