app.controller('userController', function($scope, userFactory){

  $scope.showUsers = [];

  userFactory.getUser(function(user){
    $scope.showUsers = user;
  });

  $scope.addUser = function(){
    userFactory.addUser($scope.user);
    $scope.user = {};
  }

  $scope.removeUser = function(user){
    userFactory.removeUser(user);
  }

});
