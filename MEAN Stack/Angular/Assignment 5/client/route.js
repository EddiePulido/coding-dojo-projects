app.config(function($routeProvider){
  $routeProvider.
  when('/users', {
    templateUrl : '/partials/customizeUser.html',
    controller : 'customizeUserController'
  }).
  when('/list', {
    templateUrl : '/partials/userList.html',
    controller : 'userListController'
  }).
  otherwise({
    redirectTo: '/users'
  });

});
