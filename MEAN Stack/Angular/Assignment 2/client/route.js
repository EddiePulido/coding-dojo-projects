app.config(function($routeProvider){
  $routeProvider.
  when('/', {
    templateUrl : '/partials/user.html',
    controller : 'userController'
  }).
  otherwise({
    redirectTo: '/'
  });

});
