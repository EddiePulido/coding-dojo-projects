<?php

  class Car{

    public $price;
    public $speed;
    public $fuel;
    public $mileage;
    public $tax;

    public function __construct($price, $speed, $fuel, $mileage){
      $this->price = $price;
      $this->speed = $speed;
      $this->fuel = $fuel;
      $this->mileage = $mileage;

      if($price > 10000){
        $this->tax = 0.15;
      }else{
        $this->tax = 0.12;
      }

      $this->Display_all();

    }

    public function Display_all(){
      echo "Price: " . $this->price . "<br>";
      echo "Speed: " . $this->speed . "<br>";
      echo "Fuel: " . $this->fuel . "<br>";
      echo "Mileage: " . $this->mileage . "<br>";
      echo "Tax: " . $this->tax . "<br>";
      echo "<br>";
    }

  }

  $toyota = new Car(2000, "35mph", "Full", "15mpg");
  $honda = new Car(2000, "15mph", "Kind of Full", "95mpg");
  $mazda = new Car(2000, "25mph", "Full", "25mpg");
  $camery = new Car(2000, "45mph", "Empty", "25mpg");
  $corolla = new Car(20000000, "35mph", "Empty", "15mpg");

?>
