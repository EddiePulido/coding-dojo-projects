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
      return $this;
    }

    public function drive(){
      echo "Driving" . "<br>";
      $this->miles += 10;
      return $this;
    }

    public function reverse(){
      echo "Reverse" . "<br>";
      if(!($this->miles - 5 < 0)){
        $this->miles -= 5;
      }
      return $this;
    }

  }

  $tim = new Bike(200, "25mph");
  $tim->drive()->drive()->drive()->reverse()->displayInfo();
  $tam = new Bike(100, "15mph");
  $tam->drive()->drive()->reverse()->reverse()->displayInfo();
  $tom = new Bike(150, "20mph");
  $tom->reverse()->reverse()->reverse()->displayInfo();
?>
