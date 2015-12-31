app.config(['$routeProvider', function($routeProvider){

  $routeProvider.

  when('/',{
    templateUrl : 'views/people.html',
    controller : 'peopleController'
  }).

  otherwise({
    redirectTo : '/'
  });

}]);
