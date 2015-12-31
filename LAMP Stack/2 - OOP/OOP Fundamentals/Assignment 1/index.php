<?php

  class Bike{

    public $price;
    public $max_speed;
    public $miles;

    public function __construct($price,$max_speed){
      $this->price = $price;
      $this->max_speed = $max_speed;
      $this->miles = 0;
    }

    public function displayInfo(){
      echo "Bike's price: " . $this->price . "<br>";
      echo "Bike's maximum speed: " . $this->max_speed . "<br>";
      echo "Bike's total miles driven: " . $this->miles . "<br>";
    }

    public function drive(){
      echo "Driving" . "<br>";
      $this->miles += 10;
    }

    public function reverse(){
      echo "Reverse" . "<br>";
      if(!($this->miles - 5 < 0)){
        $this->miles -= 5;
      }
    }

  }

  $tim = new Bike(200, "25mph");
  $tim->drive();
  $tim->drive();
  $tim->drive();
  $tim->reverse();
  $tim->displayInfo();
  $tam = new Bike(100, "15mph");
  $tam->drive();
  $tam->drive();
  $tam->reverse();
  $tam->reverse();
  $tam->displayInfo();
  $tom = new Bike(150, "20mph");
  $tom->reverse();
  $tom->reverse();
  $tom->reverse();
  $tom->displayInfo();
?>
