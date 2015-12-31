app.factory('directiveFactory', function(){

  var food = [];
  var factory = {};

  factory.addFood = function(item){
    food.push(item);
  }

  factory.getFood = function(callback){
    callback(food);
  }

  return factory;

});
