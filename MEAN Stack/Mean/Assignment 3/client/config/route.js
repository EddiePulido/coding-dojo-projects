app.config(['$routeProvider', function($routeProvider){

  $routeProvider.

  when('/customers', {
    templateUrl : 'views/customer.html',
    controller : 'customerController'
  }).

  when('/orders', {
    templateUrl : 'views/order.html',
    controller : 'orderController'
  }).

  otherwise({
    redirectTo : '/customers'
  });

}]);
