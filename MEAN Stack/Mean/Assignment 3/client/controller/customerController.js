app.controller('customerController', ['$scope', 'customerFactory', '$location', function($scope, customerFactory, $location){

  $scope.customers = [];

  customerFactory.readCustomer(function(customers){
    $scope.customers = customers;
  });

  $scope.createCustomer = function(){
    customerFactory.createCustomer($scope.customer);
    $scope.customer = "";
    $location.path('#/customers');
  }

  $scope.deleteCustomer = function(id){
    customerFactory.deleteCustomer(id);
    $location.path('#/customers');
  }

}]);
