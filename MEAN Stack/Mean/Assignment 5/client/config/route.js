app.config(['$routeProvider', function($routeProvider){

  $routeProvider.

  when('/login',{
    templateUrl : 'partial/login.html',
    controller : 'loginController'
  }).

  when('/dashboard',{
    templateUrl : 'partial/dashboard.html',
    controller : 'dashboardController'
  }).

  when('/topic',{
    templateUrl : 'partial/topic.html',
    controller : 'topicController'
  }).

  when('/user',{
    templateUrl : 'partial/user.html',
    controller : 'userController'
  }).

  otherwise({
    redirectTo : '/login'
  });

}]);
