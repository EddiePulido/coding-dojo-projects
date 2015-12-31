app.controller('loginController', ['$scope', '$location', 'userFactory', function($scope, $location, userFactory){

  $scope.createLogin = function(){
    userFactory.createLogin($scope.login);
    $location.path('/dashboard');
  }

}]);
