app.config(function($routeProvider){
  $routeProvider.
  when('/', {
    templateUrl : '/partials/directive.html',
    controller : 'directiveController'
  }).
  otherwise({
    redirectTo: '/'
  });

});
