app.config(function($routeProvider){
  $routeProvider.
  when('/', {
    templateUrl : '/partials/home.html'
  }).
  otherwise({
    redirectTo: '/'
  });

});
