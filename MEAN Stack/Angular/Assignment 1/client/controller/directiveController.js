app.controller('directiveController', function($scope, directiveFactory){

  $scope.displayFood = [];

  directiveFactory.getFood(function(food){
    $scope.displayFood = food;
  });

  $scope.addFood = function(){
    directiveFactory.addFood($scope.food);
    $scope.food = "";
  }

});
