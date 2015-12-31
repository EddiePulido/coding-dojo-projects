app.config(['$routeProvider', function($routeProvider){

  $routeProvider.

  when('/',{
    templateUrl : 'views/friend.html',
    controller : 'friendController'
  }).

  otherwise({
    redirectTo : '/'
  });

}]);
