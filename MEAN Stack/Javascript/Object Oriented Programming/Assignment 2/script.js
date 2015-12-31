function Vehicle(name, num_of_wheel, num_of_passenger, speed){

  var self = this;
  var distance_travelled = 0;
  this.name = name;
  this.num_of_wheel = num_of_wheel;
  this.num_of_passenger = num_of_passenger;
  this.speed = speed;

  this.makeNoise = function(){
    console.log("Makes noises");
  };

  var updateDistanceTravelled = function(){
    distance_travelled += self.speed;
  }

  this.move = function(){
    updateDistanceTravelled();
    this.makeNoise();
  }

  this.checkMiles = function(){
    console.log(distance_travelled);
  }

}

// Bike Object
var Bike = new Vehicle("skippy", 2, 1, 5);
Bike.makeNoise = function(){
  console.log("ring ring!");
}

console.log(Bike);
Bike.move();
Bike.checkMiles();

// Sedan Object
var Sedan = new Vehicle("roadrunner", 4, 8, 10);
Sedan.makeNoise = function(){
  console.log("Honk Honk!");
}

console.log(Sedan);
Sedan.move();
Sedan.checkMiles();

// Bus Object
var Bus = new Vehicle("champ", 4, 25, 7);
Bus.pickUpPassengers = function(passenger){
  this.num_of_passenger += passenger;
}

console.log(Bus);
Bus.move();
Bus.checkMiles();
