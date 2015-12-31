app.controller('userController', ['$scope', '$location', 'userFactory', function($scope, $location, userFactory){

  $scope.username = '';
  $scope.userNameInfo = '';

  userFactory.readLogin(function(username){
    $scope.username = username;
    if (username === '') {
      $location.path('/login');
    }
  });

  userFactory.readUserInfo(function(username){
    $scope.userNameInfo = username;
  });

}]);
