app.controller('orderController', function($scope, productFactory){

  $scope.orders = [];

  productFactory.getProduct(function(product){
    $scope.orders = product;
  });

  $scope.buyProduct = function(order){
    productFactory.buyProduct(order);
  }

});
