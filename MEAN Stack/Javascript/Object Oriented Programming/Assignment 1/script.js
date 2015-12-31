function vehicleConstructor(name, num_of_wheels, num_of_passengers){
  var vehicle = {};
  vehicle.name = name;
  vehicle.num_of_wheels = num_of_wheels;
  vehicle.num_of_passengers = num_of_passengers;
  vehicle.makeNoise = function(){
    console.log("I make noise");
  }
  return vehicle;
}

// Bike Object
var Bike = vehicleConstructor("crane", 2, 1);
Bike.makeNoise = function(){
  console.log("ring ring!");
};

console.log(Bike);
Bike.makeNoise();

// Sedan Object
var Sedan = vehicleConstructor("bumpy", 4, 8);
Sedan.makeNoise = function(){
  console.log("Honk Honk!");
};

console.log(Sedan);
Sedan.makeNoise();


// Bus Object
var Bus = vehicleConstructor("corey", 4, 25);
Bus.pickUpPassengers = function(people){
  Bus.num_of_passengers += people;
};

console.log(Bus);
Bus.pickUpPassengers(5);
console.log(Bus);
