app.controller('orderController', ['$scope', 'customerFactory', 'orderFactory', function($scope, customerFactory, orderFactory){

  $scope.customers = [];
  $scope.quantity = [];
  $scope.product = ['Nike Shoes','Black Belts','Ice Creams','Candies','Cookies','Cupcakes','Brownies'];
  $scope.orders = [];

  for (var i = 1; i <= 50; i++) {
    $scope.quantity.push(i);
  }

  customerFactory.readCustomer(function(customers){
    $scope.customers = customers;
  });

  orderFactory.readOrder(function(order){
    $scope.orders = order;
  });

  $scope.createOrder = function(order){
    orderFactory.createOrder(order);
  }

}]);
