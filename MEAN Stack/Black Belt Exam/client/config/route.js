app.config(['$routeProvider', function($routeProvider){

  $routeProvider.

  when('/login',{
    templateUrl : 'partial/login.html',
    controller : 'loginController'
  }).

  when('/bids',{
    templateUrl : 'partial/bid.html',
    controller : 'bidController'
  }).

  when('/result',{
    templateUrl : 'partial/result.html',
    controller : 'resultController'
  }).
  
  otherwise({
    redirectTo : '/login'
  });

}]);
