// Standalone Functions
function sums(x,y){
  var sum = 0;
  for (var i = x; i <= y; i++) {
    sum += i;
  }
  console.log(sum);
}
function min_number(array){
  var min = array[0];
  for (var i = 0; i < array.length; i++) {
    if (min > array[i]) {
      min = array[i];
    }
  }
  console.log(min);
}
function average(array){
  var sum = 0;
  for (var i = 0; i < array.length; i++) {
    sum += array[i];
  }
  console.log(sum / array.length);
}

sums(1,5);
min_number([9,2,3,7,5]);
average([9,2,3,7,5]);

//---------------------------------------

// Anonymous functions
var sums_function = function(x,y){
  var sum = 0;
  for (var i = x; i <= y; i++) {
    sum += i;
  }
  console.log(sum);
}
var min_number_function = function(array){
  var min = array[0];
  for (var i = 0; i < array.length; i++) {
    if (min > array[i]) {
      min = array[i];
    }
  }
  console.log(min);
}
var average_function = function(array){
  var sum = 0;
  for (var i = 0; i < array.length; i++) {
    sum += array[i];
  }
  console.log(sum / array.length);
}

sums_function(1,5);
min_number_function([9,2,3,7,5]);
average_function([9,2,3,7,5]);

//---------------------------------------

// Object Method
var myFunction = {

  sums : function(x,y){
          var sum = 0;
          for (var i = x; i <= y; i++) {
            sum += i;
          }
          console.log(sum);
        },
  min_number : function(array){
                var min = array[0];
                for (var i = 0; i < array.length; i++) {
                  if (min > array[i]) {
                    min = array[i];
                  }
                }
                console.log(min);
              },
  average : function(array){
              var sum = 0;
              for (var i = 0; i < array.length; i++) {
                sum += array[i];
              }
              console.log(sum / array.length);
            }

};

myFunction.sums(1,5);
myFunction.min_number([9,2,3,7,5]);
myFunction.average([9,2,3,7,5]);

//---------------------------------------

var person = {

  name : 'nelson',
  distance_travelled : 0,
  say_name : function(){
    alert(this.name);
  },
  say_something : function(phrase){
    alert(this.name + " says '" + phrase + "'" );
  },
  walk : function(){
    alert(this.name + " is walking");
    this.distance_travelled += 3;
  },
  run : function(){
    alert(this.name + " is running");
    this.distance_travelled += 10;
  },
  crawl : function(){
    alert(this.name + " is crawling");
    this.distance_travelled += 1;
  }

};

person.say_something('thank you');
person.run();
alert(person.distance_travelled);
