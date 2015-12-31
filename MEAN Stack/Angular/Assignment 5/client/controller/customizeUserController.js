app.controller('customizeUserController', function($scope, userFactory){

  $scope.users = [];

  userFactory.getUser(function(user){
    $scope.users = user;
  });

  $scope.addUser = function(){
    userFactory.addUser($scope.user);
    $scope.user = {};
  }

  $scope.removeUser = function(user){
    userFactory.removeUser(user);
  }

});
