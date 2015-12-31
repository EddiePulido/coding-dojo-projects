app.controller('productController', function($scope, productFactory){

  $scope.products = [];

  productFactory.getProduct(function(product){
    $scope.products = product;
  });

  $scope.addProduct = function(){
    productFactory.addProduct($scope.product);
    $scope.product = {};
  }

  $scope.removeProduct = function(product){
    productFactory.removeProduct(product);
  }

});
