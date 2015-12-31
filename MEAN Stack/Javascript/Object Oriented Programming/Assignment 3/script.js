function Vehicle(name, number_of_wheel, number_of_passengers, speed){
  this.name = name;
  this.number_of_wheel = number_of_wheel;
  this.number_of_passengers = number_of_passengers;
  this.speed = speed;
  this.distance_travelled = 0;
}

Vehicle.prototype.makeNoise = function(){
  console.log("Make noises");
};

Vehicle.prototype.updateDistanceTravelled = function(){
  this.distance_travelled += this.speed;
};

Vehicle.prototype.move = function(){
  this.updateDistanceTravelled();
  this.makeNoise();
};

Vehicle.prototype.checkMiles = function(){
  console.log(this.distance_travelled);
}

Vehicle.prototype.vin_number = function(){
  var characters = [1,2,3,4,5,6,7,8,9,0,"A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","T","U","V","W","X","Y","Z"];
  var vim_number = "";
  for (var i = 0; i < 17; i++) {
    vim_number += characters[Math.floor(Math.random() * characters.length)];
  }
  return vim_number;
}

var Bike = new Vehicle("cook", 2, 1, 2);

Bike.makeNoise = function(){
  console.log("ring ring!");
};

console.log(Bike);

var Sedan = new Vehicle("grump", 4, 8, 10);

Sedan.makeNoise = function(){
  console.log("Honk Honk!");
};

console.log(Sedan);

var Bus = new Vehicle("sun", 4, 25, 7);

Bus.pickUpPassengers = function(passengers){
  this.number_of_passengers += passengers;
};

console.log(Bus);
console.log(Bus.vin_number());
