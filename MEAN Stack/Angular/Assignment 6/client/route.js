app.config(function($routeProvider){
  $routeProvider.
  when('/players', {
    templateUrl : '/partials/players.html',
    controller : 'playersController'
  }).
  when('/teams', {
    templateUrl : '/partials/teams.html',
    controller : 'teamsController'
  }).
  when('/associations', {
    templateUrl : '/partials/associations.html',
    controller : 'associationsController'
  }).
  otherwise({
    redirectTo: '/players'
  });

});
