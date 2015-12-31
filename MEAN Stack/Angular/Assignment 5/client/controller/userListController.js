app.controller('userListController', function($scope, userFactory){

  $scope.users = [];

  userFactory.getUser(function(user){
    $scope.users = user;
  });

});
