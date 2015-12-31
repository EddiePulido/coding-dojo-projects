app.config(function($routeProvider){
  $routeProvider.
  when('/', {
    templateUrl : '/partials/product.html',
    controller : 'productController'
  }).
  otherwise({
    redirectTo: '/'
  });

});
